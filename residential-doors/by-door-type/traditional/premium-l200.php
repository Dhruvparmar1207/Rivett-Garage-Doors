<?php
/**
 * Landmark™ Premium L200 — traditional residential garage door.
 *
 * Built on the single-product template (Product-page.php): the same
 * banner gallery, the same Door Options tabs, the same shared renderers
 * from common-sections/product-options.php. Only the data below changes
 * from one door model to the next.
 *
 * This file sits three levels under the project root, so every include
 * is resolved from __DIR__ rather than relatively — PHP would otherwise
 * look for common-sections/ inside this folder. Asset and link paths in
 * the markup stay root-relative because header.php declares
 * <base href="/rivett/">.
 *
 * Product photography downloaded from the reference site lives in
 * src/images/residential/, per doc/images.md.
 */

/* Overrides the sitewide defaults in header.php. */
$page_title       = 'Premium L200 Collection | 2″ Door, R-Value 18 | Rivett Architectural Hardware';
$page_description = 'Quality, stylish, finger-protected garage doors. The Landmark™ Premium L200 is a 2″ '
                  . 'Neufoam™ polyurethane insulated garage door (R18) with 12 colour options and 8 panel '
                  . 'styles, supplied and installed by Rivett Architectural Hardware.';

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
        'src' => $img . 'premium-l200-slider-1.webp',
        'alt' => 'Landmark Premium L200 garage doors with a Raised Ranch panel',
    ],
    [
        'src' => $img . 'premium-l200-slider-2.webp',
        'alt' => 'Landmark Premium L200 in a Flush panel with Ranch windows',
    ],
    [
        'src' => $img . 'premium-l200-slider-3.jpg',
        'alt' => 'Landmark Premium L200 garage doors on a stone-fronted home',
    ],
    [
        'src' => $img . 'premium-l200-slider-4.jpg',
        'alt' => 'Landmark Premium L200 garage doors in a dark woodgrain finish',
    ],
];

$product_gallery_total = count($product_gallery);
$product_gallery_first = $product_gallery[0];

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
   Note the %20: "Recessed Ranch.webp" is the one asset whose filename uses
   a space instead of a hyphen. Renaming it to match the other seven would
   let this line drop the escape. */
$panel_styles = [
    ['name' => 'Raised Ranch',              'img' => $img . 'Raised-Ranch.webp'],
    ['name' => 'Raised Colonial',           'img' => $img . 'Raised-Colonial.webp'],
    ['name' => 'Flush',                     'img' => $img . 'Flush.webp'],
    ['name' => 'Plank',                     'img' => $img . 'Plank.webp'],
    ['name' => 'Mixed Panel',               'img' => $img . 'mixed-panel.webp'],
    ['name' => 'Recessed Grooved Colonial', 'img' => $img . 'Recessed-Grooved-Colonial.webp'],
    ['name' => 'Recessed Grooved Ranch',    'img' => $img . 'Recessed-Grooved-Ranch.webp'],
    ['name' => 'Recessed Ranch',            'img' => $img . 'Recessed%20Ranch.webp'],
];

/* Ten painted finishes; with the two woodtones below they make up the
   "12 Colour Options" the intro claims. The hex values are sampled from
   the manufacturer's finish swatches — see the note under the tab. */
$door_colours = [
    ['name' => 'Almond',      'hex' => '#D2CAB4'],
    ['name' => 'Black',       'hex' => '#21201E'],
    ['name' => 'Bronze',      'hex' => '#665C50'],
    ['name' => 'Brown',       'hex' => '#463A2F'],
    ['name' => 'Café*',       'hex' => '#3B3933'],
    ['name' => 'Desert Tan',  'hex' => '#BFB6A4'],
    ['name' => 'Iron Ore*',   'hex' => '#303531'],
    ['name' => 'Sandstone',   'hex' => '#91887C'],
    ['name' => 'Slate Grey*', 'hex' => '#626260'],
    ['name' => 'White',       'hex' => '#FDF6EF'],
];

$door_woodtones = [
    ['name' => 'Cocoa Hickory', 'img' => $img . 'Cocoa-Hickory.webp'],
    ['name' => 'Honey Cedar',   'img' => $img . 'Honey-Cedar.webp'],
];

/* Window inserts, in the manufacturer's own families. The second group
   has no heading of its own — the glazing note introduces it. */
$door_windows = [

    [
        'heading' => 'Decorative Inserts',
        'desc'    => 'Make a style statement with our wide selection of designer window options.',
        'items'   => [
            ['name' => 'CLEAR',                    'img' => $img . 'CLEAR.webp'],
            ['name' => 'PRAIRIE',                  'img' => $img . 'PRAIRIE.webp'],
            ['name' => 'PRAIRIE RANCH',            'img' => $img . 'PRAIRIE-RANCH.webp'],
            ['name' => 'WATERTON',                 'img' => $img . 'WATERTON.webp'],
            ['name' => 'CASCADE',                  'img' => $img . 'CASCADE.webp'],
            ['name' => 'STOCKBRIDGE RANCH',        'img' => $img . 'STOCKBRIDGE-RANCH.webp'],
            ['name' => 'STOCKTON',                 'img' => $img . 'STOCKTON.webp'],
            ['name' => 'ARCHED STOCKTON RANCH',    'img' => $img . 'ARCHED-STOCKTON-RANCH.webp'],
            ['name' => 'CLEAR RANCH',              'img' => $img . 'CLEAR-RANCH.webp'],
            ['name' => 'WATERTON RANCH',           'img' => $img . 'WATERTON-RANCH.webp'],
            ['name' => 'CASCADE RANCH',            'img' => $img . 'CASCADE-RANCH.webp'],
            ['name' => 'ARCHED STOCKBRIDGE RANCH', 'img' => $img . 'ARCHED-STOCKBRIDGE-RANCH.webp'],
            ['name' => 'STOCKTON RANCH',           'img' => $img . 'STOCKTON-RANCH.webp'],
        ],
    ],

    [
        'desc'  => 'Lites are available in single or double glazed clear glass, clear acrylic, '
                 . 'obscure glass (pinhead morocco) and obscure glass (glue chip).',
        'items' => [
            ['name' => 'BRECKENRIDGE', 'img' => $img . 'BRECKENRIDGE.webp'],
            ['name' => 'BERKSHIRE',    'img' => $img . 'BERKSHIRE.webp'],
        ],
    ],

    [
        'heading' => 'Round Bar',
        'desc'    => '3/8” (10 mm) round bars available in pewter. Standard with clear double glass; '
                   . 'obscure pinhead and satin glass optional.',
        'items'   => [
            ['name' => 'STOCKTON 4',    'img' => $img . 'stockton-4.webp'],
            ['name' => 'STOCKTON 6',    'img' => $img . 'stockton-6.webp'],
            ['name' => 'STOCKTON 10',   'img' => $img . 'stockton-10.webp'],
            ['name' => 'PRAIRIE',       'img' => $img . 'prairie-1.webp'],
            ['name' => 'PRAIRIE RANCH', 'img' => $img . 'prairie-ranch-1.webp'],
        ],
    ],

    [
        'heading' => 'Square Bar',
        'desc'    => '3/8” (10 mm) square bars available in black. Standard with clear double glass; '
                   . 'obscure pinhead and satin glass optional.',
        'items'   => [
            ['name' => 'STOCKTON 4',    'img' => $img . 'stockton-4-square.webp'],
            ['name' => 'STOCKTON 6',    'img' => $img . 'stockton-6-square.webp'],
            ['name' => 'STOCKTON 10',   'img' => $img . 'stockton-10-square.webp'],
            ['name' => 'PRAIRIE',       'img' => $img . 'prairie-square.webp'],
            ['name' => 'PRAIRIE RANCH', 'img' => $img . 'prairie-ranch-square.webp'],
        ],
    ],

    [
        'heading' => 'Aluminum Grid',
        'desc'    => '5/8” (16 mm) grids available in sandstone, desert tan, almond, bronze, brown, café, '
                   . 'slate grey, white and black. Standard with clear double glass; obscure pinhead and '
                   . 'satin is optional.',
        'items'   => [
            ['name' => 'STOCKTON 4',    'img' => $img . 'stockton-4-grid.webp'],
            ['name' => 'STOCKTON 6',    'img' => $img . 'stockton-6-grid.webp'],
            ['name' => 'STOCKTON 10',   'img' => $img . 'stockton-10-grid.webp'],
            ['name' => 'PRAIRIE',       'img' => $img . 'prairie-grid.webp'],
            ['name' => 'PRAIRIE RANCH', 'img' => $img . 'prairie-ranch-grid.webp'],
        ],
    ],

];

$door_literature = [
    [
        'name' => 'Landmark Product Catalogue',
        'img'  => $img . 'LandmarkProductCatalogueOct2024web.png',
        'pdf'  => $img . 'LandmarkProductCatalogue_April-2026.pdf',
    ],
    [
        'name' => 'Classic & Premium Brochure',
        'img'  => $img . 'classic-premium-brochure.jpg',
        'pdf'  => $img . 'classic-premium-brochure.pdf',
    ],
    [
        'name' => 'Mixed Panel Flyer',
        'img'  => $img . 'mixed-panel-flyer.jpg',
        'pdf'  => $img . 'mixed-panel-flyer.pdf',
    ],
];

?>

<section class="product-page-banner rivett-padding rivett-cmn">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 left-side">

                <div class="product-intro">
                    <h1 class="desktop-heading">Landmark&trade; Premium L200</h1>

                    <h2>Quality, Stylish, Garage Door</h2>

                    <p>Add character and beauty to your home with our Premium panel styles. Authentic woodgrain
                        texture embossed on the panels has the look of wood but the strength of steel. Customize
                        with gorgeous windows. The perfect style to give your home the distinctive, elegant look
                        it deserves.</p>

                    <ul class="product-intro-list">
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>2&Prime; Neufoam&trade; Polyurethane Insulated
                                <a href="residential-doors/by-door-type/traditional.php">Garage Door</a>
                                (R18).</span>
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
                <h1 class="mobile-heading">Landmark&trade; Premium L200</h1>

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
                        us to discuss the perfect look for your home.</p>
                </div>

                <!-- Colours -->
                <div class="rv-tab-panel" id="door-opt-colours" role="tabpanel"
                    aria-labelledby="door-tab-colours" tabindex="0" hidden>
                    <h3>Colours</h3>
                    <?php rv_render_option_cards($door_colours, 'door-options-grid-swatch'); ?>
                    <p class="door-options-note">*Not available in Recessed Grooved Colonial. Colours shown are a
                        guide only &mdash; ask us for a physical sample before you choose.</p>
                </div>

                <!-- Woodtones -->
                <div class="rv-tab-panel" id="door-opt-woodtones" role="tabpanel"
                    aria-labelledby="door-tab-woodtones" tabindex="0" hidden>
                    <h3>Woodtones</h3>
                    <?php rv_render_option_cards($door_woodtones, 'door-options-grid-swatch door-options-grid-grain'); ?>
                    <p class="door-options-note">*The two woodtone finishes are counted within the 12 colour options
                        available on the Premium L200.</p>
                </div>

                <!-- Windows -->
                <div class="rv-tab-panel" id="door-opt-windows" role="tabpanel"
                    aria-labelledby="door-tab-windows" tabindex="0" hidden>
                    <?php rv_render_option_groups($door_windows, 'door-options-grid-window'); ?>

                    <p class="door-options-note">*Not all window styles are available in all door sizes. Ask our
                        team for details.</p>
                </div>

                <!-- Warranty -->
                <div class="rv-tab-panel" id="door-opt-warranty" role="tabpanel"
                    aria-labelledby="door-tab-warranty" tabindex="0" hidden>
                    <h3>Limited Lifetimer&trade; Warranty</h3>
                    <p>There are enough worries in life &ndash; your garage door shouldn&rsquo;t be one of them.
                        When you choose the Landmark&trade; Premium L200, you&rsquo;ve chosen the best garage door
                        you can buy, and that is backed up in writing with the Limited Lifetimer&trade; Warranty.</p>
                    <p>A door is only as good as its installation, so every Premium L200 we supply is fitted by
                        Rivett&rsquo;s own factory-trained technicians.</p>
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
