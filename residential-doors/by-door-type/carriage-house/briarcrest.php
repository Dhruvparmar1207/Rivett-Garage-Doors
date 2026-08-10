<?php
/**
 * Landmark™ Briarcrest L200BC — carriage house door with a 24" top
 * section for extra-large windows.
 *
 * Built on the single-product template (Product-page.php): the same
 * banner gallery, the same Door Options tabs, the same shared renderers
 * from common-sections/product-options.php.
 *
 * The Briarcrest gets its carriage look from a recessed panel design
 * with inlays rather than applied overlay boards, so unlike its Echo
 * Ridge siblings it has no Board Colours tab. Its windows are the same
 * XL Rectangle and Two-Piece Arch families the Grandview uses, because
 * both models share the enlarged 24" top section.
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
$page_title       = 'Briarcrest L200BC | Carriage House Garage Doors, 2″ R18 | Rivett Architectural Hardware';
$page_description = 'The Landmark™ Briarcrest L200BC is a 2″ Neufoam™ polyurethane insulated carriage house '
                  . 'garage door (R18) with a 24″ top section showcasing extra-large windows, supplied and '
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
        'src' => $img . 'briarcrest-slider-1.webp',
        'alt' => 'Briarcrest L200BC carriage house garage door in bronze with a Swing panel style',
    ],
    [
        'src' => $img . 'briarcrest-slider-2.webp',
        'alt' => 'Briarcrest L200BC in black with an A-Buck panel style',
    ],
    [
        'src' => $img . 'briarcrest-slider-3.webp',
        'alt' => 'Briarcrest L200BC in black with a Bi-Fold panel style',
    ],
    [
        'src' => $img . 'briarcrest-slider-4.webp',
        'alt' => 'Briarcrest L200BC in white with an X-Buck panel style',
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
    'windows'      => 'Windows',
    'warranty'     => 'Warranty',
    'literature'   => 'Literature',
];


/* --- Tab content ------------------------------------------------------ */

/* Five carriage house panel styles, matching the "5 Panel Styles
   Available" claim above. */
$panel_styles = [
    ['name' => 'A-Buck',  'img' => $img . 'briarcrest-a-buck.webp'],
    ['name' => 'X-Buck',  'img' => $img . 'briarcrest-x-buck.webp'],
    ['name' => 'V-Buck',  'img' => $img . 'briarcrest-v-buck.webp'],
    ['name' => 'Swing',   'img' => $img . 'briarcrest-swing.webp'],
    ['name' => 'Bi-Fold', 'img' => $img . 'briarcrest-bi-fold.jpg'],
];

/* The hex values are sampled from the manufacturer's finish swatches —
   see the note under the tab. */
$door_colours = [
    ['name' => 'Almond',     'hex' => '#D2CAB4'],
    ['name' => 'Black',      'hex' => '#21201E'],
    ['name' => 'Bronze',     'hex' => '#665C50'],
    ['name' => 'Brown',      'hex' => '#463A2F'],
    ['name' => 'Café',       'hex' => '#3B3933'],
    ['name' => 'Desert Tan', 'hex' => '#BFB6A4'],
    ['name' => 'Iron Ore',   'hex' => '#303531'],
    ['name' => 'Sandstone',  'hex' => '#91887C'],
    ['name' => 'Slate Grey', 'hex' => '#626260'],
    ['name' => 'White',      'hex' => '#FDF6EF'],
];

/* The XL window families carried by the 24" top section — the same two
   shapes offered on the Grandview. */
$door_windows = [

    [
        'heading' => 'Rectangle',
        'items'   => [
            ['name' => 'WROUGHT IRON',  'img' => $img . 'rectangle-wrought-iron.webp'],
            ['name' => '4-OVER-4 PANE', 'img' => $img . 'rectangle-4-over-4.webp'],
            ['name' => '4 PANE',        'img' => $img . 'rectangle-4-pane.webp'],
            ['name' => 'CLEAR',         'img' => $img . 'rectangle-clear.webp'],
        ],
    ],

    [
        'heading' => 'Two-Piece Arch',
        'items'   => [
            ['name' => 'WROUGHT IRON',  'img' => $img . 'two-piece-arch-wrought-iron.webp'],
            ['name' => '4-OVER-4 PANE', 'img' => $img . 'two-piece-arch-4-over-4.webp'],
            ['name' => '4 PANE',        'img' => $img . 'two-piece-arch-4-pane.webp'],
            ['name' => 'CLEAR',         'img' => $img . 'two-piece-arch-clear.webp'],
        ],
    ],

];

$door_literature = [
    [
        'name' => 'Briarcrest Brochure',
        'img'  => $img . 'briarcrest-slider-1.webp',
        'pdf'  => $img . 'briarcrest-brochure.pdf',
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
                    <h1 class="desktop-heading">Landmark&trade; Briarcrest L200BC</h1>

                    <h2>Extra Large Windows With Carriage House Style</h2>

                    <p>A 24&Prime; (610mm) top section showcases exquisite window options in a wide selection of
                        carriage house panel styles. Whether you choose the old-world craftsmanship of the Wrought
                        Iron or the classic simplicity of 4-Over-4 Pane, 4 Pane or Clear, the view has just
                        improved. The perfect balance between exceptional beauty and enduring quality, a Briarcrest
                        garage door will transform your home from ordinary, to extraordinary.</p>

                    <ul class="product-intro-list">
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>2&Prime; Neufoam&trade; Polyurethane Insulated Carriage House
                                <a href="residential-doors/Residential-Garage-Doors.php">Garage Door</a>
                                (R18).</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Recessed Panel Design With Inlays to Provide a Carriage House Look.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>9 Colour Options and 5 Panel Styles Available.</span>
                        </li>
                    </ul>

                    <a href="contact-us.php" class="cmn-btn">Get a Free Estimate</a>
                </div>

            </div>
            <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 right-side">
                <h1 class="mobile-heading">Landmark&trade; Briarcrest L200BC</h1>

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
        aria-label="Briarcrest L200BC image gallery" tabindex="-1">

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
                    <p class="door-options-note">*The carriage look comes from a recessed panel design with inlays,
                        so there are no applied boards to maintain.</p>
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

                    <p class="door-options-note">*Windows sit in the enlarged 24&Prime; top section and are
                        dual-pane insulated glass. Not all window styles are available in all door sizes &mdash;
                        ask our team for details.</p>
                </div>

                <!-- Warranty -->
                <div class="rv-tab-panel" id="door-opt-warranty" role="tabpanel"
                    aria-labelledby="door-tab-warranty" tabindex="0" hidden>
                    <h3>Limited Lifetimer&trade; Warranty</h3>
                    <p>There are enough worries in life &ndash; your garage door shouldn&rsquo;t be one of them.
                        When you choose the Landmark&trade; Briarcrest L200BC, you&rsquo;ve chosen the best garage
                        door you can buy, and that is backed up in writing with the Limited Lifetimer&trade;
                        Warranty.</p>
                    <p>A door is only as good as its installation, so every Briarcrest we supply is fitted by
                        Rivett&rsquo;s own factory-trained technicians.</p>
                    <a href="contact-us.php" class="cmn-btn">Ask About Coverage</a>
                    <p class="door-options-note">*Warranty terms vary by panel style and finish. Full details are
                        supplied with your quote.</p>
                </div>

                <!-- Literature -->
                <div class="rv-tab-panel" id="door-opt-literature" role="tabpanel"
                    aria-labelledby="door-tab-literature" tabindex="0" hidden>
                    <h3>Literature</h3>
                    <p>Download the product literature for the Landmark&trade; Briarcrest L200BC, or ask us to walk
                        you through it in our showroom.</p>
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
