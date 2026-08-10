<?php
/**
 * Landmark™ Grandview Series L200GV — traditional residential garage door.
 *
 * Built on the single-product template (Product-page.php): the same
 * banner gallery, the same Door Options tabs, the same shared renderers
 * from common-sections/product-options.php. Only the data below changes
 * from one door model to the next.
 *
 * The Grandview differs from its Classic/Premium siblings in two ways
 * that show up in the data: its panel styles are photographed on the
 * enlarged 24" top section, so they have their own artwork, and its
 * windows are the XL Rectangle and Two-Piece Arch families rather than
 * the shared decorative-insert range.
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
$page_title       = 'Grandview Series L200GV | 2″ Door, R-Value 18, XL Windows | Rivett Architectural Hardware';
$page_description = 'The Landmark™ Grandview L200GV is a 2″ Neufoam™ polyurethane insulated garage door (R18) '
                  . 'built with a 24″ top section to showcase extra-large dual-pane windows, supplied and '
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
        'src' => $img . 'grandview-l200gv-slider-1.webp',
        'alt' => 'Landmark Grandview L200GV garage door in white with extra-large top windows',
    ],
    [
        'src' => $img . 'grandview-l200gv-slider-2.webp',
        'alt' => 'Landmark Grandview L200GV garage doors on a two-car home',
    ],
    [
        'src' => $img . 'grandview-l200gv-slider-3.webp',
        'alt' => 'Landmark Grandview L200GV in black with a Raised Ranch panel',
    ],
    [
        'src' => $img . 'grandview-l200gv-slider-4.webp',
        'alt' => 'Landmark Grandview L200GV garage door with wrought iron window inserts',
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

/* Seven panel styles, matching the "7 Panel Styles Available" claim above.
   These are the Grandview's own photographs — each one shows the enlarged
   top section, so the shared panel artwork used by Classic and Premium
   would misrepresent the door. */
$panel_styles = [
    ['name' => 'Raised Ranch',              'img' => $img . 'grandview-raised-ranch.png'],
    ['name' => 'Raised Colonial',           'img' => $img . 'grandview-raised-colonial.jpg'],
    ['name' => 'Flush',                     'img' => $img . 'grandview-flush.webp'],
    ['name' => 'Plank',                     'img' => $img . 'grandview-plank.webp'],
    ['name' => 'Recessed Grooved Colonial', 'img' => $img . 'grandview-recessed-grooved-colonial.jpg'],
    ['name' => 'Recessed Grooved Ranch',    'img' => $img . 'grandview-recessed-grooved-ranch.webp'],
    ['name' => 'Recessed Ranch',            'img' => $img . 'grandview-recessed-ranch.webp'],
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

/* The XL window families that define this model. Both come in the same
   four designs, so the group heading carries the shape and the cards
   carry the design. */
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
        'name' => 'Landmark Product Catalogue',
        'img'  => $img . 'LandmarkProductCatalogueOct2024web.png',
        'pdf'  => $img . 'LandmarkProductCatalogue_April-2026.pdf',
    ],
    [
        'name' => 'Grandview Brochure',
        'img'  => $img . 'grandview-brochure.jpg',
        'pdf'  => $img . 'grandview-brochure.pdf',
    ],
];

?>

<section class="product-page-banner rivett-padding rivett-cmn">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 left-side">

                <div class="product-intro">
                    <h1 class="desktop-heading">Landmark&trade; Grandview Series L200GV</h1>

                    <h2>Not Your Average Window, Not Your Average Door.</h2>

                    <p>The Grandview is built with a 24&Prime; (610mm) top section to showcase our beautiful
                        selection of extra-large windows. Choose Wrought Iron, 4-Over-4 Pane, 4 Pane or Clear to
                        compliment your home&rsquo;s exterior and enhance its curb appeal. Exceptional quality and
                        the opportunity to create many different looks with a wide variety of panel styles makes
                        the Grandview a perfect choice for the discerning homeowner.</p>

                    <ul class="product-intro-list">
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>2&Prime; Neufoam&trade; Polyurethane Insulated
                                <a href="residential-doors/by-door-type/traditional.php">Garage Door</a>
                                (R18).</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Featuring Large Dual-Pane Insulated Windows Providing Elegance to Your Home.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>12 Colour Options and 7 Panel Styles Available.</span>
                        </li>
                    </ul>

                    <a href="contact-us.php" class="cmn-btn">Get a Free Estimate</a>
                </div>

            </div>
            <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 right-side">
                <h1 class="mobile-heading">Landmark&trade; Grandview Series L200GV</h1>

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
        aria-label="Landmark Grandview L200GV image gallery" tabindex="-1">

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
                    <p class="door-options-note">*Every panel style is shown on the Grandview&rsquo;s enlarged
                        24&Prime; top section, so you can see how each one carries the XL windows.</p>
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
                        available on the Grandview L200GV.</p>
                </div>

                <!-- Windows -->
                <div class="rv-tab-panel" id="door-opt-windows" role="tabpanel"
                    aria-labelledby="door-tab-windows" tabindex="0" hidden>
                    <?php rv_render_option_groups($door_windows, 'door-options-grid-window'); ?>

                    <p class="door-options-note">*Windows are dual-pane insulated glass. Not all window styles are
                        available in all door sizes &mdash; ask our team for details.</p>
                </div>

                <!-- Warranty -->
                <div class="rv-tab-panel" id="door-opt-warranty" role="tabpanel"
                    aria-labelledby="door-tab-warranty" tabindex="0" hidden>
                    <h3>Limited Lifetimer&trade; Warranty</h3>
                    <p>There are enough worries in life &ndash; your garage door shouldn&rsquo;t be one of them.
                        When you choose the Landmark&trade; Grandview L200GV, you&rsquo;ve chosen the best garage
                        door you can buy, and that is backed up in writing with the Limited Lifetimer&trade;
                        Warranty.</p>
                    <p>A door is only as good as its installation, so every Grandview L200GV we supply is fitted by
                        Rivett&rsquo;s own factory-trained technicians.</p>
                    <a href="contact-us.php" class="cmn-btn">Ask About Coverage</a>
                    <p class="door-options-note">*Warranty terms vary by panel style and finish. Full details are
                        supplied with your quote.</p>
                </div>

                <!-- Literature -->
                <div class="rv-tab-panel" id="door-opt-literature" role="tabpanel"
                    aria-labelledby="door-tab-literature" tabindex="0" hidden>
                    <h3>Literature</h3>
                    <p>Download the product literature for the Landmark&trade; Grandview L200GV, or ask us to walk
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
