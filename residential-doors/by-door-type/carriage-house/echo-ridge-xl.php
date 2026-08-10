<?php
/**
 * Landmark™ Echo Ridge XL L200ERX — three-section carriage house door
 * with Fibrex® overlay boards.
 *
 * Built on the single-product template (Product-page.php): the same
 * banner gallery, the same Door Options tabs, the same shared renderers
 * from common-sections/product-options.php.
 *
 * Like the Echo Ridge L138ER its "panel styles" are OVERLAY styles — the
 * arrangement of boards applied over the steel panel — and the boards are
 * finished separately, hence the Board Colours tab. The XL differs in
 * being a three-section door on the 2" panel, and the reference lists a
 * single door colour for it.
 *
 * This file sits three levels under the project root, so every include
 * is resolved from __DIR__ rather than relatively. Asset and link paths
 * in the markup stay root-relative because header.php declares
 * <base href="/rivett/">.
 *
 * Product photography downloaded from the reference site lives in
 * src/images/residential/, per doc/images.md.
 */

/* Overrides the sitewide defaults in header.php. */
$page_title       = 'Echo Ridge XL L200ERX | Carriage House Garage Doors, 2″ R18 | Rivett Architectural Hardware';
$page_description = 'Classic carriage house garage door style with extra-large windows. The Landmark™ Echo Ridge '
                  . 'XL L200ERX is a three-section 2″ Neufoam™ polyurethane insulated door (R18) with Fibrex® '
                  . 'overlay boards, supplied and installed by Rivett Architectural Hardware.';

require __DIR__ . '/../../../header.php';

/* Drives the gallery lightbox and the Door Options tabs/accordion. */
$page_scripts = ['src/js/product.js'];

/* The gallery, card grid and literature renderers, shared with every
   other door-model page. */
require_once __DIR__ . '/../../../common-sections/product-options.php';

/** Every product image on this page comes from the one folder. */
$img = 'src/images/residential/';

/**
 * Banner gallery source of truth. The stage image, the page thumbnails
 * and the popup thumbnails are all rendered from this one array.
 */
$product_gallery = [
    [
        'src' => $img . 'echo-ridge-xl-slider-1.webp',
        'alt' => 'Echo Ridge XL L200ERX carriage house garage doors with extra-large windows',
    ],
    [
        'src' => $img . 'echo-ridge-xl-slider-2.webp',
        'alt' => 'Echo Ridge XL L200ERX in white with a Bi-Fold overlay style',
    ],
    [
        'src' => $img . 'echo-ridge-xl-slider-3.webp',
        'alt' => 'Echo Ridge XL L200ERX in white with a Swing overlay style',
    ],
    [
        'src' => $img . 'echo-ridge-xl-slider-4.webp',
        'alt' => 'Echo Ridge XL L200ERX with a V-Buck overlay style',
    ],
];

$product_gallery_total = count($product_gallery);
$product_gallery_first = $product_gallery[0];

/**
 * Door Options tabs. The keys drive the tab/panel ids, so a tab and its
 * panel can never point at each other incorrectly.
 */
$door_option_tabs = [
    'overlay-styles' => 'Overlay Styles',
    'colours'        => 'Colours',
    'board-colours'  => 'Board Colours',
    'windows'        => 'Windows',
    'warranty'       => 'Warranty',
    'literature'     => 'Literature',
];


/* --- Tab content ------------------------------------------------------ */

/* Six overlay board arrangements, matching the "6 Panel Styles Available"
   claim above. Each is a pattern of Fibrex boards laid over the steel
   section rather than a pressed profile. */
$overlay_styles = [
    ['name' => 'A-Buck',         'img' => $img . 'echo-ridge-xl-a-buck.webp'],
    ['name' => 'V-Buck',         'img' => $img . 'echo-ridge-xl-v-buck.webp'],
    ['name' => 'X-Buck',         'img' => $img . 'echo-ridge-xl-x-buck.webp'],
    ['name' => 'Swing',          'img' => $img . 'echo-ridge-xl-swing.webp'],
    ['name' => 'Bi-Fold',        'img' => $img . 'echo-ridge-xl-bi-fold.webp'],
    ['name' => 'Double Bi-Fold', 'img' => $img . 'echo-ridge-xl-double-bi-fold.webp'],
];

/* The reference lists a single door colour for this model; the design
   variety comes from the overlay style and the board colour instead. */
$door_colours = [
    ['name' => 'White', 'hex' => '#FDF6EF'],
];

/* The overlay boards are finished separately from the door itself. */
$board_colours = [
    ['name' => 'White',     'img' => $img . 'echo-ridge-board-white.webp'],
    ['name' => 'Sandstone', 'img' => $img . 'echo-ridge-board-sandstone.webp'],
];

$door_windows = [
    [
        'items' => [
            ['name' => '1 PANE CLEAR',         'img' => $img . 'echo-ridge-win-1-pane-clear.webp'],
            ['name' => '1 PANE ARCHED',        'img' => $img . 'echo-ridge-win-1-pane-arched.webp'],
            ['name' => '3-OVER-3 PANE',        'img' => $img . 'echo-ridge-win-3-over-3-pane.webp'],
            ['name' => '3-OVER-3 PANE ARCHED', 'img' => $img . 'echo-ridge-win-3-over-3-pane-arched.webp'],
            ['name' => '3 PANE',               'img' => $img . 'echo-ridge-win-3-pane.webp'],
        ],
    ],
];

$door_literature = [
    [
        'name' => 'Echo Ridge XL Brochure',
        'img'  => $img . 'echo-ridge-xl-slider-1.webp',
        'pdf'  => $img . 'echo-ridge-xl-brochure.pdf',
    ],
    [
        'name' => 'Landmark Product Catalogue',
        'img'  => $img . 'LandmarkProductCatalogueOct2024web.png',
        'pdf'  => $img . 'LandmarkProductCatalogue_April-2026.pdf',
    ],
];

?>

<section class="product-page-banner rivett-padding rivett-cmn">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 left-side">

                <div class="product-intro">
                    <h1 class="desktop-heading">Landmark&trade; Echo Ridge XL L200ERX</h1>

                    <h2>Enjoy The View</h2>

                    <p>This unique three-section design makes it one of the best garage door options, with overlays
                        in five styles offering numerous design combinations. Customize with decorative hardware
                        and four window options to add period-charm and curb-appeal to your home.</p>

                    <ul class="product-intro-list">
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>2&Prime; Neufoam&trade; Polyurethane Insulated Carriage House
                                <a href="residential-doors/Residential-Garage-Doors.php">Garage Door</a>
                                (R18).</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Three-Section Door With Carriage House With Fibrex&reg; Overlay Boards.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>6 Panel Styles Available.</span>
                        </li>
                    </ul>

                    <a href="contact-us.php" class="cmn-btn">Get a Free Estimate</a>
                </div>

            </div>
            <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 right-side">
                <h1 class="mobile-heading">Landmark&trade; Echo Ridge XL L200ERX</h1>

                <div class="product-gallery" id="productGallery">

                    <!-- Stage. Kept as a real link to the photo so it still opens
                         without JavaScript; the popup is the enhancement. -->
                    <a href="<?php echo rv_attr($product_gallery_first['src']); ?>"
                        class="product-gallery-stage js-product-gallery-open"
                        aria-haspopup="dialog" aria-controls="productGalleryPopup">
                        <img src="<?php echo rv_attr($product_gallery_first['src']); ?>"
                            alt="<?php echo rv_attr($product_gallery_first['alt']); ?>" width="934" height="529"
                            class="img-fluid js-product-gallery-image" fetchpriority="high" decoding="async">
                        <span class="visually-hidden"> &mdash; open larger view</span>
                    </a>

                    <?php rv_render_gallery_thumbs($product_gallery); ?>

                </div>

            </div>

        </div>
    </div>

    <!-- Lightbox content. Hidden until Magnific Popup pulls it in.
         Two Owl carousels wired together by product.js: .popup-main carries
         the full-size photo and .popup-thumbs drives it. Neither carries the
         owl-carousel class here, because Owl's stylesheet hides .owl-carousel
         until it is initialised and both are only built once the popup is on
         screen and has a width Owl can measure. -->
    <div class="product-gallery-popup mfp-hide" id="productGalleryPopup" role="dialog" aria-modal="true"
        aria-label="Echo Ridge XL L200ERX image gallery" tabindex="-1">

        <div class="popup-gallery">

            <button type="button" class="popup-close" aria-label="Close gallery">
                <img src="./src/images/popup-close-icon.webp" alt="" width="20" height="20"
                    class="img-fluid" aria-hidden="true">
            </button>

            <div class="popup-main">
                <?php foreach ($product_gallery as $image) : ?>
                    <div class="popup-main-item">
                        <img src="<?php echo rv_attr($image['src']); ?>"
                            alt="<?php echo rv_attr($image['alt']); ?>" class="img-fluid"
                            loading="lazy" decoding="async">
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="popup-thumbs" role="group" aria-label="Product images">
                <?php foreach ($product_gallery as $index => $image) : ?>
                    <button type="button"
                        class="thumb-wrap<?php echo $index === 0 ? ' is-active' : ''; ?>"
                        data-gallery-index="<?php echo (int) $index; ?>"
                        aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                        aria-label="Show image <?php echo (int) ($index + 1); ?> of <?php echo (int) $product_gallery_total; ?>: <?php echo rv_attr($image['alt']); ?>">
                        <img src="<?php echo rv_attr($image['src']); ?>" alt="" class="img-fluid"
                            loading="lazy" decoding="async">
                    </button>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

</section>


<!-- ============================= DOOR OPTIONS ============================= -->
<section class="door-options-sec rivett-padding rivett-cmn">
    <div class="container-md">

        <div class="row">
            <div class="col-12 top-heading">
                <h2>Door Options</h2>
            </div>
        </div>

        <div class="row door-options-row">

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 left-side">
                <div class="rv-tabs door-options-tabs" role="tablist" aria-orientation="vertical"
                    aria-label="Door options">
                    <?php $tab_index = 0; foreach ($door_option_tabs as $key => $label) : $is_first = ($tab_index === 0); ?>
                        <button type="button"
                            class="rv-tab<?php echo $is_first ? ' active' : ''; ?>"
                            role="tab"
                            id="door-tab-<?php echo rv_attr($key); ?>"
                            data-tab="door-opt-<?php echo rv_attr($key); ?>"
                            aria-controls="door-opt-<?php echo rv_attr($key); ?>"
                            aria-selected="<?php echo $is_first ? 'true' : 'false'; ?>"
                            tabindex="<?php echo $is_first ? '0' : '-1'; ?>">
                            <span><?php echo rv_attr($label); ?></span>
                            <img src="./src/images/tabbing-sec-arrow.webp" alt="" class="img-fluid">
                        </button>
                    <?php $tab_index++; endforeach; ?>
                </div>
            </div>

            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12 right-side">

                <!-- Overlay Styles -->
                <div class="rv-tab-panel active" id="door-opt-overlay-styles" role="tabpanel"
                    aria-labelledby="door-tab-overlay-styles" tabindex="0">
                    <h3>Overlay Styles</h3>
                    <?php rv_render_option_cards($overlay_styles); ?>
                    <p class="door-options-note">*Each style is an arrangement of Fibrex&reg; overlay boards
                        applied over the insulated steel section, and every one can be finished with decorative
                        carriage hardware.</p>
                </div>

                <!-- Colours -->
                <div class="rv-tab-panel" id="door-opt-colours" role="tabpanel"
                    aria-labelledby="door-tab-colours" tabindex="0" hidden>
                    <h3>Colours</h3>
                    <?php rv_render_option_cards($door_colours, 'door-options-grid-swatch'); ?>
                    <p class="door-options-note">*On the XL the design variety comes from the overlay style and the
                        board colour. Ask us if you need the door itself in another finish.</p>
                </div>

                <!-- Board Colours -->
                <div class="rv-tab-panel" id="door-opt-board-colours" role="tabpanel"
                    aria-labelledby="door-tab-board-colours" tabindex="0" hidden>
                    <h3>Board Colours</h3>
                    <?php rv_render_option_cards($board_colours); ?>
                    <p class="door-options-note">*The Fibrex&reg; overlay boards are finished separately from the
                        door, so you can contrast them against the door colour.</p>
                </div>

                <!-- Windows -->
                <div class="rv-tab-panel" id="door-opt-windows" role="tabpanel"
                    aria-labelledby="door-tab-windows" tabindex="0" hidden>
                    <?php rv_render_option_groups($door_windows, 'door-options-grid-window'); ?>

                    <p class="door-options-note">*All overlay options are available without windows.</p>
                </div>

                <!-- Warranty -->
                <div class="rv-tab-panel" id="door-opt-warranty" role="tabpanel"
                    aria-labelledby="door-tab-warranty" tabindex="0" hidden>
                    <h3>Limited Lifetimer&trade; Warranty</h3>
                    <p>There are enough worries in life &ndash; your garage door shouldn&rsquo;t be one of them.
                        When you choose the Landmark&trade; Echo Ridge XL L200ERX, you&rsquo;ve chosen the best
                        garage door you can buy, and that is backed up in writing with the Limited
                        Lifetimer&trade; Warranty.</p>
                    <p>A door is only as good as its installation, so every Echo Ridge XL we supply is fitted by
                        Rivett&rsquo;s own factory-trained technicians.</p>
                    <ul class="door-options-list">
                        <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span><a href="<?php echo rv_attr($img); ?>landmark-rockwood-warranty.pdf"
                                target="_blank" rel="noopener">Download the full Echo Ridge XL warranty
                                (PDF)</a></span></li>
                    </ul>
                    <a href="contact-us.php" class="cmn-btn">Ask About Coverage</a>
                    <p class="door-options-note">*Warranty terms vary by overlay style and finish. Full details are
                        supplied with your quote.</p>
                </div>

                <!-- Literature -->
                <div class="rv-tab-panel" id="door-opt-literature" role="tabpanel"
                    aria-labelledby="door-tab-literature" tabindex="0" hidden>
                    <h3>Literature</h3>
                    <p>Download the product literature for the Landmark&trade; Echo Ridge XL L200ERX, or ask us to
                        walk you through it in our showroom.</p>
                    <?php rv_render_literature_cards($door_literature); ?>

                    <p class="door-options-note">*Need something that isn&rsquo;t listed here? Get in touch and we
                        will send it over.</p>
                </div>

            </div>

        </div>
    </div>
</section>





<?php include __DIR__ . '/../../../common-sections/location-mapping-sec.php'; ?>

<?php include __DIR__ . '/../../../common-sections/footer-cta.php'; ?>

<?php include __DIR__ . '/../../../footer.php'; ?>
