/* =====================================================================
   Rivett Architectural — homepage interactions
   Reuses existing project libraries: jQuery, Bootstrap bundle, Owl Carousel.
   No new libraries introduced.
   ===================================================================== */
(function ($) {
  "use strict";

  $(function () {


    /* ---------- Brand logo carousel (Owl) ---------- */
    if ($.fn.owlCarousel && $(".brand-logo-carousel").length) {
      $(".brand-logo-carousel").owlCarousel({
        loop: true,
        margin: 50,
        dots: false,
        nav: false,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        slideTransition: "linear",
        responsive: {
          0:    { items: 2.7, margin: 40, center: true },
          576:  { items: 3 },
          768:  { items: 4 },
          992:  { items: 5 },
          1200: { items: 6 }
        }
      });
    }

    /* ---------- Testimonials carousel (Owl) ---------- */
    if ($.fn.owlCarousel && $(".testimonial-carousel").length) {
      $(".testimonial-carousel").owlCarousel({
        loop: true,
        margin: 24,
        dots: false,
        center:false,
        nav: true,
        navText: [
          '<img src="./src/images/testimonial-arrow.webp" alt="" width="50" height="50" class="img-fluid">',
          '<img src="./src/images/testimonial-arrow.webp" alt="" width="50" height="50" class="img-fluid" style="transform: rotate(180deg);">'
        ],
        responsive: {
          0:   { items: 1, margin:15, },
          768: { items: 2.5, margin:15,center:true},
          992: { items: 3 },
          1200:{ items: 3 },
          1600:{items:4}
        }
      });
    }

    /* ---------- Mobile-only carousels (gallery + associations) ---------- */
    /* Both blocks keep their existing layout on desktop and become Owl
       carousels below 768px, using the same configuration as the brand strip.
       The owl-carousel classes are applied here rather than in the markup:
       Owl's stylesheet hides .owl-carousel until it is initialised, so a
       permanent class in the HTML would blank both sections out on desktop. */
    var MOBILE_QUERY = "(max-width: 767.98px)";

    var mobileCarousels = [
      { el: ".gallery-grid", margin: 12, responsive: { 0: { items: 1, stagePadding: 40,center:true }, 576: { items: 2 } } },
      { el: ".assoc-list",   margin: 30, responsive: { 0: { items: 2.2, stagePadding: 15,center:true }, 576: { items: 3 } } }
    ];

    function syncMobileCarousels() {
      if (!$.fn.owlCarousel) return;

      var isMobile = window.matchMedia(MOBILE_QUERY).matches;

      mobileCarousels.forEach(function (cfg) {
        $(cfg.el).each(function () {
          var $el = $(this);
          var running = $el.hasClass("owl-loaded");

          if (isMobile && !running) {
            $el.addClass("owl-carousel owl-theme").owlCarousel({
              loop: true,
              margin: cfg.margin,
              dots: false,
              nav: false,
              autoplay: true,
              autoplayTimeout: 5000,
              autoplayHoverPause: true,
              slideTransition: "linear",
              responsive: cfg.responsive
            });
          } else if (!isMobile && running) {
            // destroy.owl.carousel restores the original children, but the two
            // classes added above are ours to clean up.
            $el.trigger("destroy.owl.carousel").removeClass("owl-carousel owl-theme");
          }
        });
      });
    }

    syncMobileCarousels();

    var carouselResizeTimer;
    $(window).on("resize", function () {
      clearTimeout(carouselResizeTimer);
      carouselResizeTimer = setTimeout(syncMobileCarousels, 200);
    });

    /* ---------- Tabs (gallery + communities) ---------- */
    $(".rv-tabs").on("click", ".rv-tab", function () {
      var $tab = $(this);
      var target = $tab.data("tab");
      var $group = $tab.closest("section");

      $tab.addClass("active").attr("aria-selected", "true")
          .siblings(".rv-tab").removeClass("active").attr("aria-selected", "false");

      $group.find(".rv-tab-panel").each(function () {
        var isTarget = this.id === target;
        $(this).toggleClass("active", isTarget).prop("hidden", !isTarget);
      });

      // A carousel initialised inside a hidden panel has no width to measure,
      // so re-measure it the moment its panel becomes visible.
      $group.find(".rv-tab-panel.active .owl-loaded").trigger("refresh.owl.carousel");
    });


    /* ---------- Built for Every Buyer: photo follows the active buyer ---------- */
    /* Hover (or keyboard focus) previews a buyer, a click pins it. Moving the
       pointer away from the list falls back to whichever one was pinned last. */
    var $buyerList = $(".every-built-sec .buyer-list");
    var $buyerItems = $buyerList.find(".buyer-item");
    var $buyerVisuals = $(".every-built-sec .buyer-visual");

    if ($buyerItems.length && $buyerVisuals.length) {

      var pinnedBuyer = $buyerItems.filter(".is-active").data("buyer") ||
                        $buyerItems.first().data("buyer");

      function showBuyer(name) {
        $buyerItems.each(function () {
          var match = $(this).data("buyer") === name;
          $(this).toggleClass("is-active", match)
                 .attr("aria-selected", match ? "true" : "false");
        });
        $buyerVisuals.each(function () {
          $(this).toggleClass("is-active", $(this).data("buyer") === name);
        });
      }

      showBuyer(pinnedBuyer);

      $buyerItems
        .on("mouseenter focusin", function () {
          showBuyer($(this).data("buyer"));
        })
        .on("click", function () {
          pinnedBuyer = $(this).data("buyer");
          showBuyer(pinnedBuyer);
        })
        .on("keydown", function (e) {
          if (e.key === "Enter" || e.key === " " || e.key === "Spacebar") {
            e.preventDefault();
            $(this).trigger("click");
          }
        });

      $buyerList.on("mouseleave focusout", function () {
        showBuyer(pinnedBuyer);
      });
    }


    /* ---------- Smooth scroll for in-page anchors ---------- */
    $('a[href^="#"]').on("click", function (e) {
      var id = $(this).attr("href");
      if (id.length <= 1) return;
      var $target = $(id);
      if ($target.length) {
        e.preventDefault();
        var offset = $(".site-header").outerHeight() || 0;
        $("html, body").animate(
          { scrollTop: $target.offset().top - offset - 10 },
          400
        );
      }
    });

  });
})(jQuery);


document.querySelectorAll('.rv-acc-head').forEach(label => {
  label.addEventListener('click', function(e) {
    const input = document.getElementById(this.getAttribute('for'));

    // If already checked → uncheck it (close)
    if (input.checked) {
      e.preventDefault();
      input.checked = false;
    }
  });
});


$('.gallery-grid-overhead').magnificPopup({
  delegate: 'a',
  type: 'image',
  gallery: {
    enabled: true
  }
});

$('.gallery-grid-doors').magnificPopup({
  delegate: 'a',
  type: 'image',
  gallery: {
    enabled: true
  }
});



 //===================================================================//

 // header scripts
 
 // Mobile menu hide on scroll down and show on scroll up

// ===================================================================//


jQuery(document).ready(function ($) {
            let lastScrollTop = 0;
            const $myHeader = $('.site-header');
            const scrollDelta = 15;
            const bannerHeight = 380; // hide after 380px
            let mobilenavslider = false;
            let isHidden = false;

            $myHeader.removeClass('headerHide');

            // Mobile menu open
            $('.mobile-header .navbar-toggler').on('click', function () {
                mobilenavslider = true;
                isHidden = false;
                $myHeader.removeClass('headerHide');
            });

            // Mobile menu close
            $('.mobile-close-icon-new').on('click', function () {
                mobilenavslider = false;
            });

            $(window).on('scroll', function () {
                if (mobilenavslider) return;

                const currentScroll = $(this).scrollTop();

                // Ignore small scrolls
                if (Math.abs(currentScroll - lastScrollTop) < scrollDelta) return;

                // Scroll down Ã¢â€ â€™ hide (only after 350px)
                if (currentScroll > lastScrollTop && currentScroll > bannerHeight) {
                    if (!isHidden) {
                        $myHeader.addClass('headerHide');
                        isHidden = true;
                    }
                }
                // Scroll up Ã¢â€ â€™ show
                else {
                    if (isHidden) {
                        $myHeader.removeClass('headerHide');
                        isHidden = false;
                    }
                }

                lastScrollTop = currentScroll;
            });
        });


 $(window).on('beforeunload', function () {
            // Remove active class from the section on the first page
            $('.mobile-header-menu').removeClass('show');
        });




       // mobile navigation menu 

        $('.navbar-toggler').on('click', function () {
            if ($('.mobile-header-menu').hasClass("show")) {
                $('.mobile-header-menu').removeClass('show');
            } else {
                $('.mobile-header-menu').addClass('show');
            }
        });


        $(document).on('click', '.mobile-close-icon-new', function () {
            $('.header-menu.mobile-header-menu.show').removeClass('show');
            $('.sub-menu.active').removeClass('active');
        });


        // mobile navigation menu sub menu open and close
        (function ($) {
            document.addEventListener('DOMContentLoaded', function () {

                const dropItems = document.querySelectorAll('.mobile-navigation-menu li.mobile-drop-list');

                dropItems.forEach(dropItem => {
                    const link = dropItem.querySelector(
                        'span'); // This targets your `<span>` that acts as a trigger
                    const subMenu = dropItem.querySelector('div.sub-menu'); // Direct sub-menu

                    if (link && subMenu) {

                        // Add click event on span to open submenu
                        link.addEventListener('click', function (e) {
                            e.preventDefault();
                            dropItem.classList.add('active');
                            subMenu.classList.add('active', 'active-sub');
                        });





                        // Insert Back button if not already present
                        if (!subMenu.querySelector('.nav-back-item')) {
                            const backItem = document.createElement('div');
                            backItem.classList.add('nav-item', 'nav-back-item');

                            // backItem.innerHTML = `<a class="nav-link nav-back-link" href="javascript:;">Back</a>`;
                            backItem.innerHTML =
                                `<div class="sub-header-inner">
            <a class="nav-link nav-back-link" href="javascript:;">Back</a>
            <div class="mobile-toggle-sec">
                                <div class="menu-toggle">
                                    <a href="tel:19056684455" aria-label="Call" class="sub-header-inner-close"data-call-popup="" aria-haspopup="dialog" aria-controls="callPopup"><img src="./src/images/header-call.png" alt="" width="36" height="36" class="mobile-tel img-fluid"></a>
                                    <button class="navbar-toggler mobile-close-icon-new" type="button" aria-label="nav-open-button">
                                        <img src="./src/images/close-icon.svg" alt="" width="24" height="24" class="close-icon img-fluid">
                                    </button>
                                </div>
                            </div>
        </div>`;


                            subMenu.insertBefore(backItem, subMenu.firstChild);

                            // Back button behavior
                            const backBtn = backItem.querySelector('.nav-back-link');
                            backBtn.addEventListener('click', function (e) {
                                e.preventDefault();
                                subMenu.classList.remove('active', 'active-sub');
                                dropItem.classList.remove('active');
                            });

                            // problam to inner sub menu expand 
                            // Close button behavior
                            const closeBtn = backItem.querySelector('.mobile-close-icon-new');
                            closeBtn.addEventListener('click', function (e) {
                                e.preventDefault();
                                subMenu.classList.remove('active', 'active-sub');
                                dropItem.classList.remove('active');
                            });
                        }



                    }
                });

            });
        })(jQuery);





        $(document).ready(function () {
            // Ensure the mobile menu is hidden and all submenus are closed on page load
            if (window.location.href === window.location.origin) {
                // Set initial state to hidden for the mobile menu and submenus
                $('.mobile-header-menu').removeClass('show'); // Close the mobile menu
                $('.mobile-header-menu .sub-menu').removeClass('active active-sub'); // Close all submenus
            }

            // Toggle behavior for opening/closing the mobile menu
            $('.mobile-menu-toggle').on('click', function () {
                $('.mobile-header-menu').toggleClass('show');
            });

            // Handle page unload events to remove the class before leaving
            $(window).on('pagehide', function () {
                // Remove the 'show' class and close any open submenus when navigating away
                $('.mobile-header-menu').removeClass('show');
                $('.mobile-header-menu .sub-menu').removeClass('active active-sub');
            });

            // Reset mobile menu and submenus to closed state when the page reloads
            $(window).on('load', function () {
                $('.mobile-header-menu').removeClass('show'); // Ensures menu is closed after page reload
                $('.mobile-header-menu .sub-menu').removeClass(
                    'active active-sub'); // Ensures all submenus are closed
            });
        });
    

/* =====================================================================
   DESKTOP MULTI-LEVEL NAVIGATION
   The reveal itself lives in header-footer.css (:hover / :focus-within),
   so the menu works with JS disabled. This block adds what CSS cannot:
     - a short close delay, so a diagonal pointer path from a parent row
       to its fly-out does not snap the panel shut mid-travel;
     - flipping a panel to the other side when it would run off-screen;
     - Escape to close, and tap-to-open on touch screens.
   Depth-agnostic — it walks li.has-sub wherever it appears.
   ===================================================================== */
(function ($) {
  "use strict";

  $(function () {

    var $nav = $(".main-nav .main-nav-list");
    if (!$nav.length || !$nav.find("li.has-sub").length) return;

    var DESKTOP_QUERY = "(min-width: 992px)";
    var CLOSE_DELAY = 180;   // ms of tolerance after the pointer leaves a branch
    var OPEN_DELAY = 120;    // ms a row must be held before it takes over from an open sibling
    var EDGE_PAD = 20;       // px gutter kept between a panel and the viewport

    var switchTimer = null;  // at most one row can be waiting to take over
    var $pendingRow = null;  // the row that switch is for

    function isDesktop() {
      return window.matchMedia(DESKTOP_QUERY).matches;
    }

    function hasFinePointer() {
      return window.matchMedia("(hover: hover)").matches;
    }

    /* A panel is measured the moment it opens, while its entrance
       transition is still running and it sits a few px off its resting
       place — EDGE_PAD absorbs that as well as the viewport gutter.
       clientWidth, not innerWidth, so a visible scrollbar is excluded. */
    function placePanel($li) {
      var panel = $li.children(".nav-submenu")[0];
      if (!panel) return;

      $li.removeClass("flip-x");
      var rect = panel.getBoundingClientRect();
      if (rect.right + EDGE_PAD > document.documentElement.clientWidth) {
        $li.addClass("flip-x");
      }
    }

    function openItem($li) {
      window.clearTimeout($li.data("rvCloseTimer"));
      $li.removeClass("is-dismissed");

      if ($li.hasClass("is-open")) return;
      $li.addClass("is-open").children("a").attr("aria-expanded", "true");
      placePanel($li);
    }

    function closeItem($li, immediate) {
      window.clearTimeout($li.data("rvCloseTimer"));

      function run() {
        $li.removeClass("is-open flip-x").removeData("rvTapped")
           .children("a").attr("aria-expanded", "false");
        $li.find("li.has-sub.is-open").each(function () {
          closeItem($(this), true);
        });
      }

      if (immediate) {
        run();
      } else {
        $li.data("rvCloseTimer", window.setTimeout(run, CLOSE_DELAY));
      }
    }

    function cancelSwitch() {
      window.clearTimeout(switchTimer);
      $pendingRow = null;
    }

    function closeAll() {
      cancelSwitch();
      $nav.find("li.has-sub").each(function () {
        closeItem($(this), true);
        $(this).removeClass("is-dismissed");
      });
    }

    /* Make a row the open one within its own panel: whatever sibling was
       showing is dropped at once, so two fly-outs never overlap. */
    function activate($li) {
      if ($pendingRow && $pendingRow[0] === $li[0]) cancelSwitch();
      $li.siblings().filter(".is-open").each(function () {
        closeItem($(this), true);
      });
      if ($li.hasClass("has-sub")) openItem($li);
    }

    /* Anything above the row stays put — this is what cancels a close
       armed while the pointer was crossing a sibling to get here. */
    function holdAncestors($li) {
      $li.parents("li.has-sub").each(function () {
        openItem($(this));
      });
    }

    /* ---------- Pointer ---------- */
    /* Taking over from an open sibling waits OPEN_DELAY. Without it, a
       diagonal sweep from a row toward its own fly-out would re-open
       every row it grazes on the way and strobe the panel. */
    $nav.on("mouseenter", "li", function () {
      if (!isDesktop()) return;
      var $li = $(this);

      // Entering a row from outside the whole menu fires this handler for
      // the row and for every li above it. The ancestors run last, so they
      // must leave a switch the row itself just scheduled alone.
      if (!$pendingRow || !$.contains(this, $pendingRow[0])) cancelSwitch();

      holdAncestors($li);

      if ($li.hasClass("is-open") || !$li.siblings().filter(".is-open").length) {
        activate($li);
        return;
      }

      $pendingRow = $li;
      switchTimer = window.setTimeout(function () { activate($li); }, OPEN_DELAY);
    });

    $nav.on("mouseleave", "li.has-sub", function () {
      if (!isDesktop()) return;
      // The pointer has left this whole branch, so any switch pending
      // inside it is moot — and leaving the nav fires no mouseenter to
      // clear it later.
      cancelSwitch();
      closeItem($(this));
    });

    /* ---------- Keyboard ---------- */
    // :focus-within already opens the branch; mirror it onto .is-open so
    // aria-expanded and edge flipping stay in step with what is visible.
    $nav.on("focusin", "li", function () {
      if (!isDesktop()) return;
      var $li = $(this);
      // Escape parks focus back on the trigger of the branch it just
      // closed; re-opening here would make Escape a no-op.
      if ($li.hasClass("is-dismissed")) return;
      holdAncestors($li);
      activate($li);
    });

    $nav.on("focusout", "li.has-sub", function (e) {
      if (!isDesktop()) return;
      if (e.relatedTarget && $.contains(this, e.relatedTarget)) return;
      $(this).removeClass("is-dismissed");
      closeItem($(this));
    });

    $nav.on("keydown", function (e) {
      if (e.key !== "Escape" && e.key !== "Esc") return;

      var $li = $(e.target).closest("li.has-sub");
      // Focus rests on the trigger after a dismissal, so a second Escape
      // has to step out to the branch above rather than re-close this one.
      if ($li.hasClass("is-dismissed")) $li = $li.parent().closest("li.has-sub");
      if (!$li.length) return;

      e.preventDefault();
      closeItem($li, true);
      $li.addClass("is-dismissed").children("a").trigger("focus");
    });

    /* ---------- Touch ---------- */
    // Without a hover state the first tap has to stand in for hovering;
    // the second tap on the same trigger follows the link. The flag is a
    // record of the tap itself, not of the panel being open — focus and
    // the synthesised mouseenter both land before click and would
    // otherwise make the first tap look like the second.
    $nav.on("click", "li.has-sub > a", function (e) {
      if (!isDesktop() || hasFinePointer()) return;
      var $li = $(this).parent();
      if ($li.data("rvTapped")) return;

      e.preventDefault();
      $li.data("rvTapped", true);
      activate($li);
    });

    $(document).on("click", function (e) {
      if (!$(e.target).closest(".main-nav").length) closeAll();
    });

    /* ---------- Viewport changes ---------- */
    // Flip decisions are measured on open, so they are stale after a
    // resize; closing is simpler and less jarring than re-measuring.
    var navResizeTimer;
    $(window).on("resize", function () {
      window.clearTimeout(navResizeTimer);
      navResizeTimer = window.setTimeout(closeAll, 150);
    });

  });
})(jQuery);


/* =====================================================================
   CALL POPUP  ("Choose Your Location")
   Any element carrying data-call-popup opens it. Triggers keep their
   tel: href, so the popup is a progressive enhancement: with JS off the
   link still dials the main number.
   ===================================================================== */
(function ($) {
  "use strict";

  $(function () {

    var $popup = $("#callPopup");
    if (!$popup.length) return;

    var $dialog = $popup.find(".call-popup-dialog");
    var $html = $("html");
    var $lastTrigger = null;
    var isOpen = false;
    var hideTimer = null;

    var FOCUSABLE = 'a[href], button:not([disabled]), [tabindex]:not([tabindex="-1"])';

    function scrollbarWidth() {
      return window.innerWidth - document.documentElement.clientWidth;
    }

    function openPopup(trigger) {
      if (isOpen) return;
      isOpen = true;
      $lastTrigger = trigger ? $(trigger) : null;
      window.clearTimeout(hideTimer);

      // A trigger can live inside the open mobile menu; stand it down first.
      $(".mobile-header-menu").removeClass("show");
      $(".mobile-header-menu .sub-menu").removeClass("active active-sub");

      var gap = scrollbarWidth();
      if (gap > 0) $("body").css("padding-right", gap + "px");

      $html.addClass("call-popup-open");
      $popup.prop("hidden", false).attr("aria-hidden", "false");

      // Force a reflow so the transition runs from the hidden state.
      $popup[0].offsetHeight;
      $popup.addClass("is-open");

      // And again, so the visibility:hidden lifted by .is-open is applied
      // before focus moves — focus() is a no-op on a hidden element.
      $popup[0].offsetHeight;
      $popup.find(".call-popup-close").trigger("focus");
    }

    function closePopup() {
      if (!isOpen) return;
      isOpen = false;

      $popup.removeClass("is-open").attr("aria-hidden", "true");
      $html.removeClass("call-popup-open");
      $("body").css("padding-right", "");

      // Hold the element in the layout until the fade-out has finished. A
      // timer rather than transitionend: child transitions fire that event
      // too, and reduced-motion users get no transition at all.
      window.clearTimeout(hideTimer);
      hideTimer = window.setTimeout(function () {
        if (!isOpen) $popup.prop("hidden", true);
      }, 300);

      if ($lastTrigger && $lastTrigger.length && document.contains($lastTrigger[0])) {
        $lastTrigger.trigger("focus");
      }
      $lastTrigger = null;
    }

    $(document).on("click", "[data-call-popup]", function (e) {
      e.preventDefault();
      openPopup(this);
    });

    $popup.on("click", "[data-call-popup-close]", function (e) {
      e.preventDefault();
      closePopup();
    });

    // Dialling a number dismisses the popup so the page is clean on return.
    $popup.on("click", 'a[href^="tel:"]', function () {
      closePopup();
    });

    $(document).on("keydown", function (e) {
      if (!isOpen) return;

      if (e.key === "Escape" || e.key === "Esc") {
        e.preventDefault();
        closePopup();
        return;
      }

      if (e.key !== "Tab") return;

      // Focus trap: keep tabbing inside the dialog.
      var $items = $dialog.find(FOCUSABLE).filter(":visible");
      if (!$items.length) return;

      var first = $items[0];
      var last = $items[$items.length - 1];

      if (e.shiftKey && (document.activeElement === first || !$dialog[0].contains(document.activeElement))) {
        e.preventDefault();
        last.focus();
      } else if (!e.shiftKey && document.activeElement === last) {
        e.preventDefault();
        first.focus();
      }
    });

  });
})(jQuery);








// Hero banner slider for the residential and commercial service pages.
$(document).ready(function () {

  var $bannerSlider = $("#bannerSlider");
  if (!$bannerSlider.length) return;

  var AUTOPLAY_MS = 6000;
  var reduceMotion = window.matchMedia &&
    window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  $bannerSlider.owlCarousel({
    items: 1,
    margin: 0,
    nav: false,
    dots: true,
    // rewind, not loop: loop makes Owl clone the slides, which would put a
    // second copy of the hero <h1> and its headings into the DOM.
    loop: false,
    rewind: true,
    autoplay: !reduceMotion,
    autoplayTimeout: AUTOPLAY_MS,
    autoplayHoverPause: true,
    smartSpeed: 600,
  });

  // Name the dots so they are not announced as bare "button", and pause the
  // rotation while a keyboard user is inside the slider (WCAG 2.2.2 — hover
  // pause alone leaves keyboard users chasing a moving target).
  $bannerSlider.find(".owl-dot").each(function (i) {
    $(this).attr("aria-label", "Show slide " + (i + 1));
  });

  $bannerSlider.on("focusin", function () {
    $bannerSlider.trigger("stop.owl.autoplay");
  }).on("focusout", function () {
    if (!reduceMotion) $bannerSlider.trigger("play.owl.autoplay", [AUTOPLAY_MS]);
  });

});


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

// ===================================================================//

$(function () {

  var $gallery = $("#productGallery");
  if (!$gallery.length) return;

  var $popup = $("#productGalleryPopup");
  var $openLink = $gallery.find(".js-product-gallery-open");
  var $stageImg = $gallery.find(".js-product-gallery-image");
  var $thumbs = $gallery.find(".product-thumb");
  var $popupMain = $popup.find(".popup-main");
  var $popupThumbs = $popup.find(".popup-thumbs");
  var $popupThumbBtns = $popupThumbs.find(".thumb-wrap");

  var reduceMotion = window.matchMedia &&
    window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  var speed = reduceMotion ? 0 : 400;
  var current = 0;

  // The same circular arrow the testimonial carousel uses; the CSS flips
  // it for "next" rather than shipping a second image.
  // var NAV_TEXT = [
  //   '<img src="./src/images/testimonial-arrow.webp" alt="" width="50" height="50" class="img-fluid">',
  //   '<img src="./src/images/testimonial-arrow.webp" alt="" width="50" height="50" class="img-fluid">'
  // ];

  // loop stays false on both: a looping Owl clones its items, and the
  // clones would both duplicate every data-gallery-index and shift the
  // index reported by changed.owl.carousel away from the photo it means.
  var MAIN_CAROUSEL = {
    items: 1,
    nav: false,
    dots: false,
    loop: false,
    smartSpeed: speed,
    //navText: NAV_TEXT
  };

  var THUMBS_CAROUSEL = {
    items: 4,
    margin: 15,
    nav: true,
    dots: false,
    loop: false,
    smartSpeed: speed,
    // navText: NAV_TEXT,
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

  // Centre a page thumbnail in its strip, but only when the strip
  // actually overflows — otherwise this would scroll the page on some
  // browsers.
  function revealThumb(thumb) {
    var strip = thumb.parentNode;
    if (!strip || strip.scrollWidth <= strip.clientWidth) return;

    var left = thumb.offsetLeft - (strip.clientWidth - thumb.offsetWidth) / 2;

    if (typeof strip.scrollTo === "function") {
      strip.scrollTo({ left: left, behavior: reduceMotion ? "auto" : "smooth" });
    } else {
      strip.scrollLeft = left;
    }
  }

  // Same idea for the popup strip, except Owl owns the scrolling there,
  // so the carousel is asked to move rather than the element scrolled.
  function revealPopupThumb(index) {
    if (!$popupThumbs.hasClass("owl-loaded")) return;

    var item = $popupThumbBtns.filter('[data-gallery-index="' + index + '"]')
      .closest(".owl-item")[0];
    var viewport = $popupThumbs.find(".owl-stage-outer")[0];
    if (!item || !viewport) return;

    var itemBox = item.getBoundingClientRect();
    var viewBox = viewport.getBoundingClientRect();

    if (itemBox.left < viewBox.left - 1 || itemBox.right > viewBox.right + 1) {
      $popupThumbs.trigger("to.owl.carousel", [index, speed]);
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

    $thumbs.removeClass("is-active").attr("aria-current", "false");
    $match.addClass("is-active").attr("aria-current", "true").each(function () {
      revealThumb(this);
    });

    $popupThumbBtns.removeClass("is-active").attr("aria-current", "false")
      .filter('[data-gallery-index="' + index + '"]')
      .addClass("is-active").attr("aria-current", "true");

    revealPopupThumb(index);
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

    $popupMain.on("changed.owl.carousel", function (e) {
      select(e.item.index);
    });
  }

  // The popup is closed whenever a page thumbnail is clickable, so the
  // main carousel is left alone and caught up on the next open instead of
  // being moved while it is hidden and has no width to work with.
  $thumbs.on("click", function () {
    select(parseInt(this.getAttribute("data-gallery-index"), 10));
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
