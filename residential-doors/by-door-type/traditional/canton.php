<?php
/**
 * Canton™ Series (S & SI) — non-insulated and polystyrene-insulated
 * residential garage door.
 *
 * Built on the single-product template (Product-page.php): the same
 * banner gallery, the same Door Options tabs, the same shared renderers
 * from common-sections/product-options.php.
 *
 * The Canton is the entry point of the range: two panel styles, four
 * colours, and a decorative insert list that adds the Sherwood,
 * Cathedral, Sunburst and Sunray designs the insulated models do not
 * offer. It also carries its own stated warranty terms rather than the
 * Lifetimer cover, so the Warranty tab lists them.
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
$page_title       = 'Canton™ Series (S & SI) | Non-Insulated & Polystyrene Garage Doors | Rivett Architectural Hardware';
$page_description = 'Style and performance at an affordable price. The Canton™ Series comes in the non-insulated '
                  . 'S collection and the polystyrene insulated SI collection (R6.6), in two panel styles and four '
                  . 'colours, supplied and installed by Rivett Architectural Hardware.';

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
        'src' => $img . 'canton-slider-1.webp',
        'alt' => 'Canton Series garage door with a Colonial panel style',
    ],
    [
        'src' => $img . 'canton-slider-2.webp',
        'alt' => 'Canton Series garage door with a Ranch panel style',
    ],
    [
        'src' => $img . 'canton-slider-3.webp',
        'alt' => 'Canton Series garage doors with decorative insert windows',
    ],
    [
        'src' => $img . 'canton-slider-4.webp',
        'alt' => 'Canton Series double garage door on a suburban home',
    ],
];

$product_gallery_total = count($product_gallery);
$product_gallery_first = $product_gallery[0];

/**
 * Door Options tabs. The Canton has no woodtone option, so that tab is
 * simply absent — the keys drive the tab/panel ids, so dropping an entry
 * removes the tab and its panel together.
 */
$door_option_tabs = [
    'panel-styles' => 'Panel Styles',
    'colours'      => 'Colours',
    'windows'      => 'Windows',
    'warranty'     => 'Warranty',
    'literature'   => 'Literature',
];


/* --- Tab content ------------------------------------------------------ */

/* Two panel styles, matching the "2 Panel Style And 4 Colours Available"
   claim above. */
$panel_styles = [
    ['name' => 'Colonial', 'img' => $img . 'canton-colonial.webp'],
    ['name' => 'Ranch',    'img' => $img . 'canton-ranch.webp'],
];

/* Four colours. The hex values are sampled from the manufacturer's finish
   swatches — see the note under the tab. */
$door_colours = [
    ['name' => 'White',      'hex' => '#EFEBE7'],
    ['name' => 'Almond',     'hex' => '#BFB8A4'],
    ['name' => 'Desert Tan', 'hex' => '#AEA695'],
    ['name' => 'Brown',      'hex' => '#41342B'],
];

/* One insert family, larger than the insulated models' because the Canton
   adds the Sherwood, Cathedral, Sunburst and Sunray designs. */
$door_windows = [

    [
        'heading' => 'Decorative Inserts',
        'desc'    => 'Lites are available in single or double glazed clear glass, clear acrylic, '
                   . 'obscure glass (pinhead morocco) and obscure glass (glue chip).',
        'items'   => [
            ['name' => 'CLEAR',                    'img' => $img . 'CLEAR.webp'],
            ['name' => 'CLEAR RANCH',              'img' => $img . 'CLEAR-RANCH.webp'],
            ['name' => 'SHERWOOD',                 'img' => $img . 'SHERWOOD.webp'],
            ['name' => 'SUNBURST RANCH',           'img' => $img . 'SUNBURST-RANCH.webp'],
            ['name' => 'PRAIRIE',                  'img' => $img . 'PRAIRIE.webp'],
            ['name' => 'CATHEDRAL',                'img' => $img . 'CATHEDRAL.webp'],
            ['name' => 'WATERTON',                 'img' => $img . 'WATERTON.webp'],
            ['name' => 'WATERTON RANCH',           'img' => $img . 'WATERTON-RANCH.webp'],
            ['name' => 'CASCADE',                  'img' => $img . 'CASCADE.webp'],
            ['name' => 'CASCADE RANCH',            'img' => $img . 'CASCADE-RANCH.webp'],
            ['name' => 'STOCKBRIDGE RANCH',        'img' => $img . 'STOCKBRIDGE-RANCH.webp'],
            ['name' => 'ARCHED STOCKBRIDGE RANCH', 'img' => $img . 'ARCHED-STOCKBRIDGE-RANCH.webp'],
            ['name' => 'STOCKTON',                 'img' => $img . 'STOCKTON.webp'],
            ['name' => 'STOCKTON RANCH',           'img' => $img . 'STOCKTON-RANCH.webp'],
            ['name' => 'ARCHED STOCKTON RANCH',    'img' => $img . 'ARCHED-STOCKTON-RANCH.webp'],
            ['name' => 'SUNBURST 4',               'img' => $img . 'SUNBURST-4.webp'],
            ['name' => 'SUNBURST 5',               'img' => $img . 'SUNBURST-5.webp'],
            ['name' => 'SUNBURST 6',               'img' => $img . 'SUNBURST-6.webp'],
            ['name' => 'SUNBURST 7',               'img' => $img . 'SUNBURST-7.webp'],
            ['name' => 'SUNBURST 8',               'img' => $img . 'SUNBURST-8.webp'],
            ['name' => 'SUNBURST 9',               'img' => $img . 'SUNBURST-9.webp'],
            ['name' => 'SUNRAY (4 PANEL)',         'img' => $img . 'SUNRAY-4-PANEL.webp'],
        ],
    ],

];

$door_literature = [
    [
        'name' => 'Canton S & SI Sell Sheet',
        'img'  => $img . 'canton-sell-sheet.webp',
        'pdf'  => $img . 'canton-sell-sheet.pdf',
    ],
];

?>

<section class="product-page-banner rivett-padding rivett-cmn">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 left-side">

                <div class="product-intro">
                    <h1 class="desktop-heading">Canton&trade; Series (S &amp; SI)</h1>

                    <h2>Timeless Styling at an Affordable Price.</h2>

                    <p>The clean, classic lines of our Colonial or Ranch panel styles will add instant charm and
                        curb-appeal to your home. Authentic woodgrain texture embossed on the panels has the look
                        of wood but the strength of steel.</p>

                    <p>Canton comes in the non-insulated S collection and the polystyrene insulated SI collection.
                        Add decorative insert windows and choose one of four colours to find the perfect look at
                        the perfect price.</p>

                    <ul class="product-intro-list">
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Polystyrene Insulated
                                <a href="residential-doors/by-door-type/traditional.php">Garage Door</a>
                                (R6.6).</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Single or Double-Sided Steel Non-Insulated Garage Doors Also Available.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>2 Panel Style and 4 Colours Available.</span>
                        </li>
                    </ul>

                    <a href="contact-us.php" class="cmn-btn">Get a Free Estimate</a>
                </div>

            </div>
            <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 right-side">
                <h1 class="mobile-heading">Canton&trade; Series (S &amp; SI)</h1>

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
        aria-label="Canton Series image gallery" tabindex="-1">

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
                    <p class="door-options-note">*Authentic woodgrain texture is embossed on the panels, so both
                        styles have the look of wood but the strength of steel.</p>
                </div>

                <!-- Colours -->
                <div class="rv-tab-panel" id="door-opt-colours" role="tabpanel"
                    aria-labelledby="door-tab-colours" tabindex="0" hidden>
                    <h3>Colours</h3>
                    <?php rv_render_option_cards($door_colours, 'door-options-grid-swatch'); ?>
                    <p class="door-options-note">*Colours shown are a guide only &mdash; ask us for a physical
                        sample before you choose.</p>
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
                    <h3>Limited Warranty &mdash; S/SI</h3>
                    <p>There are enough worries in life &ndash; your garage door shouldn&rsquo;t be one of them.
                        When you choose the Canton&trade; Series, you&rsquo;ve chosen the best garage door you can
                        buy, and that is backed up in writing with a Limited Warranty*.</p>
                    <ul class="door-options-list">
                        <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Section Rust-through: Limited Lifetime*</span></li>
                        <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Track/Hardware: 5 Years</span></li>
                        <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Springs: 3 Years</span></li>
                    </ul>
                    <a href="contact-us.php" class="cmn-btn">Ask About Coverage</a>
                    <p class="door-options-note">*Talk to us for full warranty details. Every Canton we supply is
                        fitted by Rivett&rsquo;s own factory-trained technicians.</p>
                </div>

                <!-- Literature -->
                <div class="rv-tab-panel" id="door-opt-literature" role="tabpanel"
                    aria-labelledby="door-tab-literature" tabindex="0" hidden>
                    <h3>Literature</h3>
                    <p>Download the product literature for the Canton&trade; Series, or ask us to walk you through
                        it in our showroom.</p>
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
