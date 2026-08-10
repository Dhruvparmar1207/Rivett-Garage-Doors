<?php include 'header.php'; ?>

<?php
/**
 * This page's own script, picked up by footer.php. The gallery, its
 * lightbox and the Door Options tabs/accordion live in product.js so
 * that custom.js carries only what every template uses.
 */
$page_scripts = ['src/js/product.js'];

/**
 * Banner gallery source of truth.
 *
 * The stage image, the page thumbnails and the popup thumbnails are all
 * rendered from this one array, so adding or reordering a photo is a
 * single-line change and the three views can never drift apart.
 */
$product_gallery = [
    [
        'src' => 'src/images/landmark-l-200-slider-1.webp',
        'alt' => 'Landmark Premium L200 garage doors in dark woodgrain on a brick home',
    ],
    [
        'src' => 'src/images/landmark-l-200-slider-2.webp',
        'alt' => 'Landmark Premium Contemporary L200C garage door with full-width windows',
    ],
    [
        'src' => 'src/images/landmark-l-200-slider-3.webp',
        'alt' => 'Landmark Briarcrest L200BC carriage-house style garage door',
    ],
    [
        'src' => 'src/images/landmark-l-200-slider-4.webp',
        'alt' => 'Landmark Grandview L200GV garage doors with large dual-pane windows',
    ],
];

$product_gallery_total = count($product_gallery);
$product_gallery_first = $product_gallery[0];

/* The gallery, card grid and literature renderers are shared with every
   other door-model page — see the header of the file below. */
require_once __DIR__ . '/common-sections/product-options.php';

/**
 * Door Options tabs. The keys drive the tab/panel ids, so a tab and its
 * panel can never point at each other incorrectly.
 */
$door_option_tabs = [
    'panel-styles' => 'Panel Styles',
    'colours'      => 'Colours',
    'woodtones'    => 'Woodtones',
    'windows'      => 'Windows',
    'warranty'     => 'Warranty',
    'literature'   => 'Literature',
];

/* --- Tab content ------------------------------------------------------ */

/* Eight panel styles, matching the "8 Panel Styles Available" claim above.
   The artwork is 200x168, so the card ratio in product-page.css follows the
   photos rather than the 200x120 box the old line art used.
   Note the %20: "Recessed Ranch.webp" is the one asset whose filename uses a
   space instead of a hyphen. Renaming it to match the other seven would let
   this line drop the escape. */
$panel_styles = [
    ['name' => 'Raised Ranch',              'img' => 'src/images/Raised-Ranch.webp'],
    ['name' => 'Raised Colonial',           'img' => 'src/images/Raised-Colonial.webp'],
    ['name' => 'Flush',                     'img' => 'src/images/Flush.webp'],
    ['name' => 'Plank',                     'img' => 'src/images/Plank.webp'],
    ['name' => 'Mixed Panel',               'img' => 'src/images/mixed-panel.webp'],
    ['name' => 'Recessed Grooved Colonial', 'img' => 'src/images/Recessed-Grooved-Colonial.webp'],
    ['name' => 'Recessed Grooved Ranch',    'img' => 'src/images/Recessed-Grooved-Ranch.webp'],
    ['name' => 'Recessed Ranch',            'img' => 'src/images/Recessed%20Ranch.webp'],
];

/* Twelve colours, matching the "12 Colour Options" claim above. */
$door_colours = [
    ['name' => 'White',        'hex' => '#FFFFFF'],
    ['name' => 'Almond',       'hex' => '#E8DFC9'],
    ['name' => 'Sandstone',    'hex' => '#D8CBB0'],
    ['name' => 'Desert Tan',   'hex' => '#C9AE86'],
    ['name' => 'Clay',         'hex' => '#B08768'],
    ['name' => 'Terratone',    'hex' => '#8C6B52'],
    ['name' => 'Chocolate',    'hex' => '#4E342A'],
    ['name' => 'Dark Bronze',  'hex' => '#3E3A36'],
    ['name' => 'Slate Grey',   'hex' => '#6E7377'],
    ['name' => 'Charcoal',     'hex' => '#4A4E52'],
    ['name' => 'Hunter Green', 'hex' => '#2F4A38'],
    ['name' => 'Black',        'hex' => '#1A1A18'],
];

$door_woodtones = [
    ['name' => 'Golden Oak', 'img' => 'src/images/Honey-Cedar.webp'],
    ['name' => 'Medium Oak', 'img' => 'src/images/Cocoa-Hickory.webp'],

];




$door_windows = [

    [
        'heading' => 'Decorative Inserts',
        'items' => [
            ['name' => 'PRAIRIE',       'img' => 'src/images/PRAIRIE.webp'],
            ['name' => 'CLEAR-RANCH',   'img' => 'src/images/CLEAR-RANCH.webp'],
            ['name' => 'CLEAR',         'img' => 'src/images/CLEAR.webp'],
            ['name' => 'STOCKTON',      'img' => 'src/images/STOCKTON.webp'],
            ['name' => 'CASCADE',       'img' => 'src/images/CASCADE.webp'],
        ],
    ],

    [
        'heading' => 'Round Bar',
        'items' => [
            ['name' => 'STOCKTON 4',    'img' => 'src/images/stockton-4.webp'],
            ['name' => 'STOCKTON 6',    'img' => 'src/images/stockton-6.webp'],
            ['name' => 'STOCKTON 10',   'img' => 'src/images/stockton-10.webp'],
            ['name' => 'Prairie',       'img' => 'src/images/prairie-1.Webp'],
            ['name' => 'prairie ranch', 'img' => 'src/images/prairie-ranch-1.webp'],
        ],
    ],

    [
        'heading' => 'Square Bar',
        'items' => [
            ['name' => 'STOCKTON 4',     'img' => 'src/images/stockton-4.webp'],
            ['name' => 'STOCKTON 6',     'img' => 'src/images/stockton-6.webp'],
            ['name' => 'STOCKTON 10',    'img' => 'src/images/stockton-10.webp'],
            ['name' => 'Prairie',        'img' => 'src/images/prairie-1.webp'],
            ['name' => 'prairie ranch',  'img' => 'src/images/prairie-ranch-1.webp'],
        ],
    ],

];

$door_literature = [
    [
        'name' => 'Landmark Product Catalogue',
        'img'  => 'src/images/LandmarkProductCatalogueOct2024web.png',
        'pdf'  => 'src/images/LandmarkProductCatalogue_April-2026.pdf',
    ],
    [
        'name' => 'Landmark Product Catalogue',
        'img'  => 'src/images/LandmarkProductCatalogueOct2024web.png',
        'pdf'  => 'src/images/LandmarkProductCatalogue_April-2026.pdf',
    ],
];

?>

<section class="product-page-banner rivett-padding rivett-cmn">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 left-side">

                <div class="product-intro">
                    <h1 class="desktop-heading">Landmark™ Premium L200</h1>

                    <h2>A Quality, Stylish Garage Door</h2>

                    <p>Add character and beauty to your home with our Premium panel styles. Authentic woodgrain
                        texture embossed on the panels has the look of wood but the strength of steel. Customize
                        with gorgeous windows. The perfect style to give your home the distinctive, elegant look
                        it deserves.</p>

                    <ul class="product-intro-list">
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>2&rdquo; Neufoam&trade; Polyurethane Insulated
                                <a href="residential-doors/Residential-Garage-Doors.php">Garage Door</a> (R18).</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>12 Colour Options and 8 Panel Styles Available.</span>
                        </li>
                    </ul>

                    <a href="contact-us.php" class="cmn-btn">Get a Free Estimate</a>
                </div>

            </div>
            <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 right-side">
                <h1 class="mobile-heading">Landmark™ Premium L200</h1>

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
        aria-label="Landmark Premium L200 image gallery" tabindex="-1">

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
                            <!-- <i class="fa-solid fa-angle-right" aria-hidden="true">

                            </i> -->
                            <img src="./src/images/tabbing-sec-arrow.webp" alt="" class="img-fluid">
                        </button>
                    <?php $tab_index++; endforeach; ?>
                </div>
            </div>

            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12 right-side">

                <!-- Panel Styles -->
                <div class="rv-tab-panel active" id="door-opt-panel-styles" role="tabpanel"
                    aria-labelledby="door-tab-panel-styles" tabindex="0">
                    <h3>Panel Styles</h3>
                    <?php rv_render_option_cards($panel_styles); ?>
                    <p class="door-options-note">*Mixed Panel doors are available in many configurations. Talk to
                        your dealer to discuss the perfect look for your home.</p>
                </div>

                <!-- Colours -->
                <div class="rv-tab-panel" id="door-opt-colours" role="tabpanel"
                    aria-labelledby="door-tab-colours" tabindex="0" hidden>
                    <h3>Colours</h3>
                    <?php rv_render_option_cards($door_colours, 'door-options-grid-swatch'); ?>
                    <p class="door-options-note">*Colours shown are a guide only. Ask us for a physical sample
                        before you choose — screen colours vary.</p>
                </div>

                <!-- Woodtones -->
                <div class="rv-tab-panel" id="door-opt-woodtones" role="tabpanel"
                    aria-labelledby="door-tab-woodtones" tabindex="0" hidden>
                    <h3>Woodtones</h3>
                    <?php rv_render_option_cards($door_woodtones, 'door-options-grid-swatch door-options-grid-grain'); ?>
                    <p class="door-options-note">*Authentic woodgrain texture is embossed on the steel panels, so
                        the finish has the look of wood without the maintenance.</p>
                </div>

                <!-- Windows -->
                <div class="rv-tab-panel" id="door-opt-windows" role="tabpanel"
                    aria-labelledby="door-tab-windows" tabindex="0" hidden>
                        <?php
                        rv_render_option_groups(
                            $door_windows,
                            'door-options-grid-window'
                        );
                        ?>


                    <p class="door-options-note">*Dual-pane insulated glass is available on every window design,
                        with clear, obscure, and tinted glazing options.</p>
                </div>

                <!-- Warranty -->
                <div class="rv-tab-panel" id="door-opt-warranty" role="tabpanel"
                    aria-labelledby="door-tab-warranty" tabindex="0" hidden>
                    <h3>Warranty</h3>
                    <p>Every Landmark&trade; Premium L200 is backed by the manufacturer and installed by Rivett's
                        own factory-trained technicians.</p>
                    <ul class="door-options-list">
                        <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Lifetime warranty on the polyurethane-to-steel bond.</span></li>
                        <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Limited lifetime warranty against section rust-through.</span></li>
                        <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>3-year warranty on hardware, springs, and cables.</span></li>
                        <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>1-year warranty on Rivett workmanship and installation.</span></li>
                    </ul>
                    <a href="contact-us.php" class="cmn-btn">Ask About Coverage</a>
                    <p class="door-options-note">*Warranty terms vary by panel style and finish. Full details are
                        supplied with your quote.</p>
                </div>

                <!-- Literature -->
                <div class="rv-tab-panel" id="door-opt-literature" role="tabpanel"
                    aria-labelledby="door-tab-literature" tabindex="0" hidden>
                    <h3>Literature</h3>
                    <p>Download the product literature for the Landmark&trade; Premium L200, or ask us to walk you
                        through it in our showroom.</p>
                     <?php rv_render_literature_cards($door_literature); ?>
                  
                    <p class="door-options-note">*Need something that isn't listed here? Get in touch and we will
                        send it over.</p>
                </div>

            </div>

        </div>
    </div>
</section>

<?php include 'common-sections/location-mapping-sec.php'; ?>


<?php include 'common-sections/footer-cta.php'; ?>


<?php include 'footer.php'; ?>
