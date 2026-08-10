/* =====================================================================
   Rivett Architectural — product page interactions

   Everything here is scoped to Product-page.php: the banner gallery and
   its lightbox, and the Door Options tabs/accordion. Product-page.php
   asks for it through $page_scripts, which footer.php reads, so no other
   template pays for the request.

   Depends on jQuery, Owl Carousel and Magnific Popup, plus the shared
   .rv-tabs click handler in custom.js — all of which footer.php loads
   first. Introduces no new libraries.
   ===================================================================== */

// ===================================================================//

// Product page banner gallery
//
// One selected index drives everything: the page stage image, the page
// thumbnail strip, and the Magnific inline popup. Because they share the
// index, the popup always opens on the photo the visitor was already
// looking at, and whatever they land on inside the popup is reflected on
// the page after it closes.
//
// The popup itself is a pair of Owl carousels — .popup-main holds the
// full-size photos, .popup-thumbs drives it — with .popup-main as the
// single source of truth: arrows, swipes and thumbnail clicks all move
// it, and its changed event is the one place the selection is updated.
// Neither carousel is declared in the markup, because Owl's stylesheet
// hides .owl-carousel until it is initialised and a hidden popup has no
// width for Owl to measure; both are built on first open instead.
//
// The page strip is the same carousel on the same settings, so the two
// thumbnail rows behave identically — same item counts, same margins,
// same arrows. It is on screen from the start, so it is the one that can
// be measured and built immediately.

// ===================================================================//

$(function () {

  var $gallery = $("#productGallery");
  if (!$gallery.length) return;

  var $popup = $("#productGalleryPopup");
  var $openLink = $gallery.find(".js-product-gallery-open");
  var $stageImg = $gallery.find(".js-product-gallery-image");
  var $thumbStrip = $gallery.find(".product-gallery-thumbs");
  var $thumbs = $thumbStrip.find(".product-thumb");
  var $popupMain = $popup.find(".popup-main");
  var $popupThumbs = $popup.find(".popup-thumbs");
  var $popupThumbBtns = $popupThumbs.find(".thumb-wrap");

  var reduceMotion = window.matchMedia &&
    window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  var speed = reduceMotion ? 0 : 400;
  var current = 0;

  // Arrows for both thumbnail strips. Font Awesome chevrons rather than an
  // image asset: the icon font is already loaded for the page's lists, it
  // scales with font-size and takes its colour from CSS, and the two
  // directions are separate glyphs so neither arrow has to be a rotated
  // copy of the other. Marked aria-hidden because labelNav() names the
  // button itself.
  var NAV_TEXT = [
    '<i class="fa-solid fa-chevron-left" aria-hidden="true"></i>',
    '<i class="fa-solid fa-chevron-right" aria-hidden="true"></i>'
  ];

  // loop stays false on both: a looping Owl clones its items, and the
  // clones would both duplicate every data-gallery-index and shift the
  // index reported by changed.owl.carousel away from the photo it means.
  var MAIN_CAROUSEL = {
    items: 1,
    nav: false,
    dots: false,
    loop: false,
    smartSpeed: speed,
  };

  var THUMBS_CAROUSEL = {
    items: 4,
    margin: 15,
    nav: true,
    dots: false,
    loop: false,
    smartSpeed: speed,
    navText: NAV_TEXT,
    responsive: {
      0:   { items: 3, margin: 10 },
      576: { items: 4, margin: 12 },
      992: { items: 4, margin: 15 }
    }
  };

  // Owl builds its arrows as unnamed buttons carrying role="presentation",
  // which would leave silent controls in the tab order. Drop the role and
  // name them so they are announced for what they do.
  function labelNav($carousel, noun) {
    $carousel.find(".owl-nav button").removeAttr("role");
    $carousel.find(".owl-nav .owl-prev").attr("aria-label", "Previous " + noun);
    $carousel.find(".owl-nav .owl-next").attr("aria-label", "Next " + noun);
  }

  // Bring the selected thumbnail into view. Owl owns the scrolling in
  // both strips, so the carousel is asked to move rather than the element
  // scrolled, and only when the thumbnail is genuinely outside the
  // viewport — otherwise every selection would shunt the strip sideways.
  function revealThumb($strip, $btns, index) {
    if (!$strip.hasClass("owl-loaded")) return;

    var item = $btns.filter('[data-gallery-index="' + index + '"]')
      .closest(".owl-item")[0];
    var viewport = $strip.find(".owl-stage-outer")[0];
    if (!item || !viewport) return;

    var itemBox = item.getBoundingClientRect();
    var viewBox = viewport.getBoundingClientRect();

    if (itemBox.left < viewBox.left - 1 || itemBox.right > viewBox.right + 1) {
      $strip.trigger("to.owl.carousel", [index, speed]);
    }
  }

  // Reflect a selection everywhere except the main carousel — that one is
  // what calls in here, so writing back to it would loop.
  function select(index) {
    var $match = $thumbs.filter('[data-gallery-index="' + index + '"]');
    if (!$match.length) return;

    var src = $match.attr("data-gallery-src");
    var alt = $match.attr("data-gallery-alt") || "";

    current = index;

    $stageImg.attr({ src: src, alt: alt });
    // The stage is a real link to the photo, so keep its href honest for
    // no-JS visitors, middle-clicks and "open image in new tab".
    $openLink.attr("href", src);

    // A page thumbnail changes job when it becomes the selected one — it
    // stops selecting and starts opening the popup — so its accessible
    // name and its popup semantics move with the selection. Both label
    // strings are rendered by the PHP, so nothing is assembled here.
    $thumbs.removeClass("is-active")
      .attr("aria-current", "false")
      .removeAttr("aria-haspopup")
      .removeAttr("aria-controls")
      .each(function () {
        var label = this.getAttribute("data-select-label");
        if (label) this.setAttribute("aria-label", label);
      });

    $match.addClass("is-active").attr({
      "aria-current": "true",
      "aria-haspopup": "dialog",
      "aria-controls": "productGalleryPopup"
    }).each(function () {
      var label = this.getAttribute("data-open-label");
      if (label) this.setAttribute("aria-label", label);
    });

    $popupThumbBtns.removeClass("is-active").attr("aria-current", "false")
      .filter('[data-gallery-index="' + index + '"]')
      .addClass("is-active").attr("aria-current", "true");

    revealThumb($thumbStrip, $thumbs, index);
    revealThumb($popupThumbs, $popupThumbBtns, index);
  }

  // Every selection made outside the main carousel goes through here, so
  // there is exactly one path into it.
  function goTo(index, moveSpeed) {
    if ($popupMain.hasClass("owl-loaded")) {
      $popupMain.trigger("to.owl.carousel", [index, moveSpeed]);
    } else {
      select(index);
    }
  }

  function initPopupCarousels() {
    if (!$.fn.owlCarousel || $popupMain.hasClass("owl-loaded")) return;

    $popupMain.addClass("owl-carousel owl-theme").owlCarousel(MAIN_CAROUSEL);
    $popupThumbs.addClass("owl-carousel owl-theme").owlCarousel(THUMBS_CAROUSEL);

    labelNav($popupMain, "photo");
    labelNav($popupThumbs, "thumbnails");

    // Owl fires changed.owl.carousel for three different properties, and
    // only "position" means the visitor moved to another photo. It also
    // fires for "settings" — every refresh runs setup(), which announces
    // its settings that way — and e.item.index there is wherever the
    // carousel happens to be sitting, not a selection anyone made. Acting
    // on that would overwrite the page's selection with the popup's stale
    // position on the very refresh that runs before the popup is moved to
    // it. The namespace check rejects any same-named jQuery event that did
    // not come from Owl at all.
    $popupMain.on("changed.owl.carousel", function (e) {
      if (!e.namespace || e.property.name !== "position") return;
      select(e.item.index);
    });
  }

  // The page strip is laid out and measurable on load, so it is built
  // here rather than being deferred like the popup pair. The class is
  // added from JS for the same reason it is in the popup: without Owl the
  // markup must not inherit .owl-carousel's display:none and vanish.
  // Owl re-parents the buttons into .owl-item wrappers, which the click
  // handlers below survive because they are bound to the buttons.
  if ($.fn.owlCarousel && $thumbStrip.length) {
    $thumbStrip.addClass("owl-carousel owl-theme").owlCarousel(THUMBS_CAROUSEL);
    labelNav($thumbStrip, "thumbnails");
  }

  // The popup is closed whenever a page thumbnail is clickable, so the
  // main carousel is left alone and caught up on the next open instead of
  // being moved while it is hidden and has no width to work with.
  //
  // A thumbnail that is already selected has nothing left to select, so
  // that is the click which opens the popup on it. The first click on any
  // other thumbnail still only moves the stage, so the strip can be
  // browsed without the lightbox taking over the screen.
  $thumbs.on("click", function () {
    var index = parseInt(this.getAttribute("data-gallery-index"), 10);

    if (index === current) {
      // Going through the stage link rather than opening Magnific
      // directly keeps one configured instance of the popup, callbacks
      // included — and without the plugin the link still resolves to the
      // full photo, exactly as clicking the stage would.
      $openLink.trigger("click");
      return;
    }

    select(index);
  });

  $popupThumbBtns.on("click", function () {
    goTo(parseInt(this.getAttribute("data-gallery-index"), 10), speed);
  });

  // Without the plugin the stage stays a plain link to the full photo.
  if (!$.fn.magnificPopup || !$popup.length) return;

  $popup.on("click", ".popup-close", function () {
    $.magnificPopup.close();
  });

  $openLink.magnificPopup({
    items: { src: "#productGalleryPopup" },
    type: "inline",
    midClick: true,
    mainClass: "product-gallery-mfp",
    removalDelay: 250,
    // The popup carries its own close button, so Magnific's is off.
    showCloseBtn: false,
    focus: ".popup-close",
    callbacks: {
      // Nothing inside the popup can be measured while it is hidden, so
      // the carousels are built on the first open and re-measured on
      // every one after that, then jumped to the photo already selected.
      open: function () {
        initPopupCarousels();
        $popupMain.trigger("refresh.owl.carousel");
        $popupThumbs.trigger("refresh.owl.carousel");
        goTo(current, 0);
        // Owl stays silent when it is asked to move where it already is,
        // so the selection is applied directly as well; select() is
        // idempotent, and this is what scrolls the active thumbnail back
        // into view after the strip has been re-measured.
        select(current);
      }
    }
  });

});


// ===================================================================//

// Product page "Door Options" tabs
//
// Panel switching is already handled by the shared .rv-tabs click
// handler further up this file, so this only adds the keyboard model a
// tablist is expected to have: a roving tabindex plus arrow/Home/End
// navigation. Scoped to .door-options-tabs so the homepage gallery tabs
// keep their existing behaviour untouched.

// ===================================================================//

$(function () {

  var $tablist = $(".door-options-tabs");
  if (!$tablist.length) return;

  var $tabs = $tablist.find(".rv-tab");
  if ($tabs.length < 2) return;

  function focusTab($tab) {
    $tabs.attr("tabindex", "-1");
    $tab.attr("tabindex", "0");
  }

  // A pointer user can also move the roving tabindex, so tabbing back
  // into the list lands on whatever is actually selected.
  $tablist.on("click", ".rv-tab", function () {
    focusTab($(this));
  });

  $tablist.on("keydown", ".rv-tab", function (e) {
    var index = $tabs.index(this);
    var next;

    switch (e.key) {
      case "ArrowDown":
      case "ArrowRight":
        next = (index + 1) % $tabs.length;
        break;
      case "ArrowUp":
      case "ArrowLeft":
        next = (index - 1 + $tabs.length) % $tabs.length;
        break;
      case "Home":
        next = 0;
        break;
      case "End":
        next = $tabs.length - 1;
        break;
      default:
        return;
    }

    e.preventDefault();

    // Click drives the shared handler, so selection stays in one place.
    $tabs.eq(next).trigger("click").trigger("focus");
  });

});


// ===================================================================//

// Product page "Door Options" — accordion below the stacking breakpoint
//
// Above 991.98px the section is the vertical tablist above; below it the
// two Bootstrap columns stack, and a full-width list of tabs sitting on
// top of a detached panel reads as two unrelated blocks. Rather than
// shipping a second copy of the markup, the very same buttons are moved
// in front of the panel each one controls, which turns the section into
// a single-open accordion. Moving them back restores the tablist byte
// for byte, so the desktop layout is never a special case.
//
// Both roles are honoured properly: the buttons swap their tab ARIA for
// aria-expanded, the panels swap role="tabpanel" for role="region", and
// the roving tabindex is dropped so every header stays reachable.

// ===================================================================//

$(function () {

  var $section = $(".door-options-sec");
  if (!$section.length) return;

  var $tablist = $section.find(".door-options-tabs");
  var $tabs = $tablist.find(".rv-tab");
  if (!$tablist.length || $tabs.length < 2) return;

  // Matches the "Up to 991.98px" block in product-page.css. The two have
  // to agree: the CSS hides the empty tablist column, the JS empties it.
  var mqAccordion = window.matchMedia("(max-width:991.98px)");
  var mqReduced = window.matchMedia("(prefers-reduced-motion:reduce)");
  var isAccordion = false;

  // getElementById rather than a built selector, so a key that ever
  // gains a character jQuery treats specially cannot break the lookup.
  function panelFor($tab) {
    var el = document.getElementById($tab.attr("data-tab"));
    return el ? $(el) : $();
  }

  function slideSpeed() {
    return mqReduced.matches ? 0 : 800;
  }

  /* ---------- scroll anchoring ----------
     Closing an item that sits above the one being opened pulls every
     following header up the page, so the header the user just tapped
     slides out from under the finger. Pinning it to the viewport
     position it was tapped at — on every frame of the collapse, not
     only at the end — keeps the section visually still. */

  var anchor = null;

  function holdAnchor() {
    if (!anchor) return;
    var drift = anchor.el.getBoundingClientRect().top - anchor.top;
    if (drift) window.scrollBy(0, drift);
  }

  /* ---------- accordion state ---------- */

  function setItem($tab, open, animate) {
    var $panel = panelFor($tab);

    $tab.toggleClass("active", open).attr("aria-expanded", open ? "true" : "false");
    if (!$panel.length) return;

    // jumpToEnd, so a pending slide settles into a known state — its
    // completion callback is what finishes the collapse below.
    $panel.stop(true, true);

    if (!animate) {
      $panel.toggleClass("active", open)
            .prop("hidden", !open)
            .css("display", open ? "block" : "none");
      return;
    }

    if (open) {
      // hidden has to come off before the slide, or the attribute keeps
      // the panel display:none for the frame jQuery measures it in.
      $panel.addClass("active").prop("hidden", false).slideDown(slideSpeed());
    } else {
      // .active is what the stylesheet uses to keep the panel displayed,
      // so it can only come off once the slide has finished — dropping it
      // first would hide the panel outright and there would be nothing
      // left to animate.
      $panel.slideUp({
        duration: slideSpeed(),
        progress: holdAnchor,
        complete: function () {
          $(this).removeClass("active").prop("hidden", true);
          holdAnchor();
        }
      });
    }
  }

  // One panel at a time, matching what the tablist does — reopening the
  // same header collapses it, which is what a stacked list is expected
  // to allow.
  $section.on("click", ".rv-tab", function () {
    if (!isAccordion) return;   // above the breakpoint the shared .rv-tabs handler owns this

    var $tab = $(this);

    if ($tab.hasClass("active")) {
      anchor = null;   // nothing above it moves, so the page cannot shift
      setItem($tab, false, true);
      return;
    }

    anchor = { el: this, top: this.getBoundingClientRect().top };

    $tabs.filter(".active").not($tab).each(function () {
      setItem($(this), false, true);
    });

    setItem($tab, true, true);
  });

  /* ---------- layout switch ---------- */

  function enableAccordion() {
    if (isAccordion) return;
    isAccordion = true;

    $tabs.each(function () {
      var $tab = $(this);
      var $panel = panelFor($tab);
      if (!$panel.length) return;

      var open = $tab.hasClass("active");

      // A button already exposes the button role, so the tab attributes
      // are removed rather than replaced. Dropping tabindex retires the
      // roving tabindex: every accordion header is a tab stop.
      $tab.removeAttr("role")
          .removeAttr("aria-selected")
          .removeAttr("tabindex")
          .attr("aria-expanded", open ? "true" : "false");

      // aria-labelledby already points at the button, which is exactly
      // what a region needs for its name.
      $panel.attr("role", "region").removeAttr("tabindex");

      setItem($tab, open, false);
      $panel.before($tab);
    });

    $section.addClass("is-accordion");
  }

  function disableAccordion() {
    if (!isAccordion) return;
    isAccordion = false;

    $section.removeClass("is-accordion");

    // A tablist always shows exactly one panel, so a fully collapsed
    // accordion falls back to the first item on the way up.
    var $active = $tabs.filter(".active").first();
    if (!$active.length) $active = $tabs.first();

    $tabs.each(function () {
      var $tab = $(this);
      var $panel = panelFor($tab);
      var open = this === $active[0];

      $tab.removeAttr("aria-expanded")
          .toggleClass("active", open)
          .attr({
            role: "tab",
            "aria-selected": open ? "true" : "false",
            tabindex: open ? "0" : "-1"
          });

      if (!$panel.length) return;

      // Every property the slide touches is handed back to the
      // stylesheet, so the tab layout is driven by .active alone and a
      // resize caught mid-animation cannot strand a panel at zero height.
      $panel.stop(true, true)
            .css({
              display: "",
              height: "",
              overflow: "",
              paddingTop: "",
              paddingBottom: "",
              marginTop: "",
              marginBottom: ""
            })
            .attr({ role: "tabpanel", tabindex: "0" })
            .toggleClass("active", open)
            .prop("hidden", !open);
    });

    // $tabs is in original DOM order, so this rebuilds the tablist as authored.
    $tablist.append($tabs);
  }

  function sync() {
    if (mqAccordion.matches) enableAccordion();
    else disableAccordion();
  }

  sync();

  if (mqAccordion.addEventListener) {
    mqAccordion.addEventListener("change", sync);
  } else if (mqAccordion.addListener) {
    mqAccordion.addListener(sync);   // Safari < 14
  }

});
