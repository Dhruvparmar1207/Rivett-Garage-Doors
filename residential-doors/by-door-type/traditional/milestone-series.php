<?php
/**
 * Milestone™ Series — polystyrene-insulated residential garage door.
 *
 * Built on the single-product template (Product-page.php): the same
 * banner gallery, the same Door Options tabs, the same shared renderers
 * from common-sections/product-options.php.
 *
 * The Milestone shares almost nothing with its Neufoam siblings, and the
 * data below reflects that: its own seven panel styles, its own nine
 * solid colours plus a single woodtone, and window inserts split into
 * Colonial and Ranch families rather than the shared decorative range.
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
$page_title       = 'Milestone™ Series | 2″ Polystyrene-Insulated Garage Doors (R10) | Rivett Architectural Hardware';
$page_description = 'The Milestone™ Series is a 2″ polystyrene-insulated garage door (R10) in traditional, modern '
                  . 'and carriage house styles, with seven panel styles and nine colour options, supplied and '
                  . 'installed by Rivett Architectural Hardware.';

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
        'src' => $img . 'milestone-slider-1.jpg',
        'alt' => 'Milestone Series garage doors in Black on a modern home',
    ],
    [
        'src' => $img . 'milestone-slider-2.jpg',
        'alt' => 'Milestone Series garage doors in Brown with carriage-style panels',
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

/* Seven panel styles, matching the "Available in 7 Panel Styles" claim
   above. The Milestone has its own artwork throughout — the Gunite
   surface embossing and the carriage profiles do not appear on any other
   model in the range. */
$panel_styles = [
    ['name' => 'Ranch',             'img' => $img . 'milestone-ranch.png'],
    ['name' => 'Colonial',          'img' => $img . 'milestone-colonial.png'],
    ['name' => 'Ranch Carriage',    'img' => $img . 'milestone-ranch-carriage.png'],
    ['name' => 'Colonial Carriage', 'img' => $img . 'milestone-colonial-carriage.png'],
    ['name' => 'Flush',             'img' => $img . 'milestone-flush.png'],
    ['name' => 'Plank',             'img' => $img . 'milestone-plank.png'],
    ['name' => 'Shaker',            'img' => $img . 'milestone-shaker.png'],
];

/* The nine solid colours. Mocha, the single-directional woodtone, is a
   grain rather than a flat finish and lives in its own tab below. The hex
   values are sampled from the manufacturer's finish swatches — see the
   note under the tab. */
$door_colours = [
    ['name' => 'Black',      'hex' => '#3B3B3D'],
    ['name' => 'Brown',      'hex' => '#61524A'],
    ['name' => 'Desert Tan', 'hex' => '#C5BCAB'],
    ['name' => 'Grey',       'hex' => '#A7A7A5'],
    ['name' => 'Ivory',      'hex' => '#D8D2C2'],
    ['name' => 'Red',        'hex' => '#8C4445'],
    ['name' => 'Shale',      'hex' => '#8E7B6E'],
    ['name' => 'Taupe',      'hex' => '#A89B8B'],
    ['name' => 'White',      'hex' => '#E0E2E1'],
];

$door_woodtones = [
    ['name' => 'Mocha', 'img' => $img . 'milestone-mocha.jpg'],
];

/* Window inserts come in a Colonial (short panel) and a Ranch (long
   panel) family, matched to the panel style of the door. */
$door_windows = [

    [
        'heading' => 'Colonial Decorative Inserts',
        'items'   => [
            ['name' => 'COLONIAL',             'img' => $img . 'milestone-win-colonial.webp'],
            ['name' => 'PRAIRIE COLONIAL',     'img' => $img . 'milestone-win-prairie-colonial.webp'],
            ['name' => 'WATERTON COLONIAL',    'img' => $img . 'milestone-win-waterton-colonial.webp'],
            ['name' => 'CASCADE COLONIAL',     'img' => $img . 'milestone-win-cascade-colonial.webp'],
            ['name' => 'STOCKBRIDGE COLONIAL', 'img' => $img . 'milestone-win-stockbridge-colonial.webp'],
            ['name' => 'STOCKTON COLONIAL',    'img' => $img . 'milestone-win-stockton-colonial.webp'],
        ],
    ],

    [
        'heading' => 'Ranch Decorative Inserts',
        'items'   => [
            ['name' => 'RANCH',                         'img' => $img . 'milestone-win-ranch.webp'],
            ['name' => 'PRAIRIE RANCH',                 'img' => $img . 'milestone-win-prairie-ranch.webp'],
            ['name' => 'WATERTON RANCH',                'img' => $img . 'milestone-win-waterton-ranch.webp'],
            ['name' => 'CASCADE RANCH',                 'img' => $img . 'milestone-win-cascade-ranch.webp'],
            ['name' => 'STOCKBRIDGE RANCH',             'img' => $img . 'milestone-win-stockbridge-ranch.webp'],
            ['name' => 'ARCHED STOCKBRIDGE RANCH',      'img' => $img . 'milestone-win-arched-stockbridge-ranch.webp'],
            ['name' => 'STOCKTON 10-PANE RANCH',        'img' => $img . 'milestone-win-stockton-10-pane-ranch.webp'],
            ['name' => 'STOCKTON 8-PANE RANCH',         'img' => $img . 'milestone-win-stockton-8-pane-ranch.webp'],
            ['name' => 'ARCHED STOCKTON 10-PANE RANCH', 'img' => $img . 'milestone-win-arched-stockton-10-pane-ranch.webp'],
            ['name' => 'ARCHED STOCKTON 8-PANE RANCH',  'img' => $img . 'milestone-win-arched-stockton-8-pane-ranch.webp'],
            ['name' => 'BRECKENRIDGE',                  'img' => $img . 'milestone-win-breckenridge.webp'],
            ['name' => 'BERKSHIRE 8-PANE RANCH',        'img' => $img . 'milestone-win-berkshire-8-pane-ranch.webp'],
            ['name' => 'BERKSHIRE 10-PANE RANCH',       'img' => $img . 'milestone-win-berkshire-10-pane-ranch.webp'],
        ],
    ],

];

$door_literature = [
    [
        'name' => 'Milestone Series Sell Sheet',
        'img'  => $img . 'milestone-sell-sheet.jpg',
        'pdf'  => $img . 'milestone-sell-sheet.pdf',
    ],
];

?>

<section class="product-page-banner rivett-padding rivett-cmn">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 left-side">

                <div class="product-intro">
                    <h1 class="desktop-heading">Milestone&trade; Series</h1>

                    <h2>Durability Meets Strength with this Polystyrene-Insulated Garage Door Available in
                        Traditional, Modern and Carriage House Styles</h2>

                    <ul class="product-intro-list">
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>2&Prime; Panel Thickness.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>R Value of R10*.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Max Opening: 20&rsquo;0&Prime; wide x 10&prime; high.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>3-Layer polystyrene Insulation.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Unique Gunite Surface Texture Embossing.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Available in 7 Panel Styles on this
                                <a href="residential-doors/by-door-type/traditional.php">Garage Door</a>.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Nine Solid Colour Options Available.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Single-Directional Woodtone Option Available.</span>
                        </li>
                    </ul>

                    <p class="door-options-note">*Pending testing in accordance with DASMA TDS-163.</p>

                    <a href="contact-us.php" class="cmn-btn">Get a Free Estimate</a>
                </div>

            </div>
            <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 right-side">
                <h1 class="mobile-heading">Milestone&trade; Series</h1>

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
        aria-label="Milestone Series image gallery" tabindex="-1">

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
                    <p class="door-options-note">*Every Milestone panel carries the unique Gunite surface texture
                        embossing, in traditional, modern and carriage house profiles.</p>
                </div>

                <!-- Colours -->
                <div class="rv-tab-panel" id="door-opt-colours" role="tabpanel"
                    aria-labelledby="door-tab-colours" tabindex="0" hidden>
                    <h3>Colours</h3>
                    <?php rv_render_option_cards($door_colours, 'door-options-grid-swatch'); ?>
                    <p class="door-options-note">*The swatches shown on monitors and printed materials may vary
                        from the actual colour. For a true representation of the colour, visit our showroom.</p>
                </div>

                <!-- Woodtones -->
                <div class="rv-tab-panel" id="door-opt-woodtones" role="tabpanel"
                    aria-labelledby="door-tab-woodtones" tabindex="0" hidden>
                    <h3>Woodtones</h3>
                    <?php rv_render_option_cards($door_woodtones, 'door-options-grid-swatch door-options-grid-grain'); ?>
                    <p class="door-options-note">*Mocha is the Milestone&rsquo;s single-directional woodtone option,
                        offered alongside the nine solid colours.</p>
                </div>

                <!-- Windows -->
                <div class="rv-tab-panel" id="door-opt-windows" role="tabpanel"
                    aria-labelledby="door-tab-windows" tabindex="0" hidden>
                    <?php rv_render_option_groups($door_windows, 'door-options-grid-window'); ?>

                    <p class="door-options-note">*Insert families are matched to the panel style &mdash; Colonial
                        inserts for the short panel, Ranch inserts for the long. Not all window styles are
                        available in all door sizes; ask our team for details.</p>
                </div>

                <!-- Warranty -->
                <div class="rv-tab-panel" id="door-opt-warranty" role="tabpanel"
                    aria-labelledby="door-tab-warranty" tabindex="0" hidden>
                    <h3>Milestone&trade; Warranty</h3>
                    <p>There are enough worries in life &ndash; your garage door shouldn&rsquo;t be one of them.
                        The Milestone&trade; Series carries its own written warranty, and every door we supply is
                        fitted by Rivett&rsquo;s own factory-trained technicians.</p>
                    <ul class="door-options-list">
                        <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span><a href="<?php echo rv_attr($img); ?>milestone-warranty.pdf" target="_blank"
                                rel="noopener">Download the full Milestone&trade; warranty (PDF)</a></span></li>
                    </ul>
                    <a href="contact-us.php" class="cmn-btn">Ask About Coverage</a>
                    <p class="door-options-note">*Warranty terms vary by panel style and finish. Full details are
                        supplied with your quote.</p>
                </div>

                <!-- Literature -->
                <div class="rv-tab-panel" id="door-opt-literature" role="tabpanel"
                    aria-labelledby="door-tab-literature" tabindex="0" hidden>
                    <h3>Literature</h3>
                    <p>Download the product literature for the Milestone&trade; Series, or ask us to walk you
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
