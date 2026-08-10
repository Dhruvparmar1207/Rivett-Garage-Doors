<?php
/**
 * Landmark™ Premium Contemporary L200C — the 2" Premium panel with
 * modern window layouts.
 *
 * Built on the single-product template (Product-page.php): the same
 * banner gallery, the same Door Options tabs, the same shared renderers
 * from common-sections/product-options.php.
 *
 * The Windows tab is what separates this model from the plain Premium
 * L200: instead of a catalogue of decorative inserts it offers whole-door
 * window LAYOUTS. It carries two families the Classic Contemporary does
 * not — Aluminum and Slim Windows — which is the "three sophisticated
 * window options" the intro refers to. The reference ships the artwork
 * uncaptioned, so the cards are numbered Layout 1-3: a structural label,
 * not a product name.
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
$page_title       = 'Premium Contemporary L200C | 2″ Door, R-Value 18 | Rivett Architectural Hardware';
$page_description = 'The Landmark™ Premium Contemporary L200C offers a wide variety of window configurations on a '
                  . '2″ Neufoam™ polyurethane insulated panel (R18), supplied and installed by Rivett '
                  . 'Architectural Hardware.';

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
        'src' => $img . 'premium-contemporary-slider-1.webp',
        'alt' => 'Premium Contemporary L200C single-car garage door in black with slim windows',
    ],
    [
        'src' => $img . 'premium-contemporary-slider-2.webp',
        'alt' => 'Premium Contemporary L200C in black with a Ranch panel and satin glass',
    ],
    [
        'src' => $img . 'premium-contemporary-slider-3.webp',
        'alt' => 'Premium Contemporary L200C garage doors on a modern home',
    ],
    [
        'src' => $img . 'premium-contemporary-slider-4.webp',
        'alt' => 'Premium Contemporary L200C garage door with a full-width window layout',
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

/* The five panel styles the reference lists under this model. Note the
   %20: "Recessed Ranch.webp" is the one asset whose filename uses a space
   instead of a hyphen. */
$panel_styles = [
    ['name' => 'Raised Ranch',    'img' => $img . 'Raised-Ranch.webp'],
    ['name' => 'Raised Colonial', 'img' => $img . 'Raised-Colonial.webp'],
    ['name' => 'Flush',           'img' => $img . 'Flush.webp'],
    ['name' => 'Plank',           'img' => $img . 'Plank.webp'],
    ['name' => 'Recessed Ranch',  'img' => $img . 'Recessed%20Ranch.webp'],
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
    ['name' => 'Iron Ore',    'hex' => '#303531'],
    ['name' => 'Sandstone',   'hex' => '#91887C'],
    ['name' => 'Slate Grey*', 'hex' => '#626260'],
    ['name' => 'White',       'hex' => '#FDF6EF'],
];

$door_woodtones = [
    ['name' => 'Cocoa Hickory', 'img' => $img . 'Cocoa-Hickory.webp'],
    ['name' => 'Honey Cedar',   'img' => $img . 'Honey-Cedar.webp'],
];

/* Whole-door window layouts rather than individual inserts — three per
   family. Aluminum and Slim Windows are unique to this model. The
   reference ships these uncaptioned, so the numbering is ours. */
$door_windows = [

    [
        'heading' => 'Aluminum',
        'items'   => [
            ['name' => 'Layout 1', 'img' => $img . 'contemporary-aluminum-layout-1.webp'],
            ['name' => 'Layout 2', 'img' => $img . 'contemporary-aluminum-layout-2.webp'],
            ['name' => 'Layout 3', 'img' => $img . 'contemporary-aluminum-layout-3.webp'],
        ],
    ],

    [
        'heading' => 'Colonial',
        'items'   => [
            ['name' => 'Layout 1', 'img' => $img . 'contemporary-colonial-layout-1.webp'],
            ['name' => 'Layout 2', 'img' => $img . 'contemporary-colonial-layout-2.webp'],
            ['name' => 'Layout 3', 'img' => $img . 'contemporary-colonial-layout-3.webp'],
        ],
    ],

    [
        'heading' => 'Ranch',
        'items'   => [
            ['name' => 'Layout 1', 'img' => $img . 'contemporary-ranch-layout-1.webp'],
            ['name' => 'Layout 2', 'img' => $img . 'contemporary-ranch-layout-2.webp'],
            ['name' => 'Layout 3', 'img' => $img . 'contemporary-ranch-layout-3.webp'],
        ],
    ],

    [
        'heading' => 'Slim Windows',
        'items'   => [
            ['name' => 'Layout 1', 'img' => $img . 'contemporary-slim-window-1.png'],
            ['name' => 'Layout 2', 'img' => $img . 'contemporary-slim-window-2.png'],
            ['name' => 'Layout 3', 'img' => $img . 'contemporary-slim-window-3.png'],
        ],
    ],

];

$door_literature = [
    [
        'name' => 'Classic & Premium Contemporary Brochure',
        'img'  => $img . 'classic-premium-contemporary-brochure.jpg',
        'pdf'  => $img . 'classic-premium-contemporary-brochure.pdf',
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
                    <h1 class="desktop-heading">Landmark&trade; Premium Contemporary L200C</h1>

                    <h2>Sophisticated Style, Unrivalled Craftsmanship.</h2>

                    <p>Our Premium Contemporary garage doors offer a wide variety of window configurations and
                        designs. Three sophisticated window options offered on two Premium panels provide a
                        multitude of fashionable layouts sure to compliment your home&rsquo;s modern design.</p>

                    <ul class="product-intro-list">
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>2&Prime; (R18) Neufoam&trade; Polyurethane Insulated
                                <a href="residential-doors/Residential-Garage-Doors.php">Garage Door</a>.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Features Customizable Window Placement for a Modern Look.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>12 Colour Options and 2 Panel Styles Available.</span>
                        </li>
                    </ul>

                    <a href="contact-us.php" class="cmn-btn">Get a Free Estimate</a>
                </div>

            </div>
            <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 right-side">
                <h1 class="mobile-heading">Landmark&trade; Premium Contemporary L200C</h1>

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
        aria-label="Premium Contemporary L200C image gallery" tabindex="-1">

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
                    <p class="door-options-note">*Authentic woodgrain texture is embossed on the panels, so every
                        style has the look of wood but the strength of steel.</p>
                </div>

                <!-- Colours -->
                <div class="rv-tab-panel" id="door-opt-colours" role="tabpanel"
                    aria-labelledby="door-tab-colours" tabindex="0" hidden>
                    <h3>Colours</h3>
                    <?php rv_render_option_cards($door_colours, 'door-options-grid-swatch'); ?>
                    <p class="door-options-note">*Available in Stucco and Woodgrain embossing. Colours shown are a
                        guide only &mdash; ask us for a physical sample before you choose.</p>
                </div>

                <!-- Woodtones -->
                <div class="rv-tab-panel" id="door-opt-woodtones" role="tabpanel"
                    aria-labelledby="door-tab-woodtones" tabindex="0" hidden>
                    <h3>Woodtones</h3>
                    <?php rv_render_option_cards($door_woodtones, 'door-options-grid-swatch door-options-grid-grain'); ?>
                    <p class="door-options-note">*The two woodtone finishes are counted within the 12 colour options
                        available on the Premium Contemporary L200C.</p>
                </div>

                <!-- Windows -->
                <div class="rv-tab-panel" id="door-opt-windows" role="tabpanel"
                    aria-labelledby="door-tab-windows" tabindex="0" hidden>
                    <?php rv_render_option_groups($door_windows, 'door-options-grid-window'); ?>

                    <p class="door-options-note">*These are whole-door window layouts rather than single inserts
                        &mdash; window placement is customizable, so bring us the look you are after.</p>
                </div>

                <!-- Warranty -->
                <div class="rv-tab-panel" id="door-opt-warranty" role="tabpanel"
                    aria-labelledby="door-tab-warranty" tabindex="0" hidden>
                    <h3>Limited Lifetimer&trade; Warranty</h3>
                    <p>There are enough worries in life &ndash; your garage door shouldn&rsquo;t be one of them.
                        When you choose the Landmark&trade; Premium Contemporary L200C, you&rsquo;ve chosen the
                        best garage door you can buy, and that is backed up in writing with the Limited
                        Lifetimer&trade; Warranty.</p>
                    <p>A door is only as good as its installation, so every Premium Contemporary we supply is
                        fitted by Rivett&rsquo;s own factory-trained technicians.</p>
                    <a href="contact-us.php" class="cmn-btn">Ask About Coverage</a>
                    <p class="door-options-note">*Warranty terms vary by panel style and finish. Full details are
                        supplied with your quote.</p>
                </div>

                <!-- Literature -->
                <div class="rv-tab-panel" id="door-opt-literature" role="tabpanel"
                    aria-labelledby="door-tab-literature" tabindex="0" hidden>
                    <h3>Literature</h3>
                    <p>Download the product literature for the Landmark&trade; Premium Contemporary L200C, or ask
                        us to walk you through it in our showroom.</p>
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
