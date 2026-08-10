<?php
/**
 * Landmark™ Rockwood L200RW — custom red cedar carriage house door.
 *
 * Built on the single-product template (Product-page.php): the same
 * banner gallery, the same Door Options tabs, the same shared renderers
 * from common-sections/product-options.php.
 *
 * The Rockwood is a custom wood door, so the reference page offers no
 * colour, woodtone or window tabs at all — the cedar overlay design IS
 * the choice, and colours and designs are quoted per project. The tab
 * list below is therefore three entries, not six; the keys drive both
 * the tab and its panel, so a shorter list simply renders a shorter set.
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
$page_title       = 'Rockwood L200RW | Custom Red Cedar Carriage House Garage Doors | Rivett Architectural Hardware';
$page_description = 'Custom carriage house cedar overlay doors. The Landmark™ Rockwood L200RW pairs hand-crafted '
                  . 'red cedar overlays with a 2″ Neufoam™ polyurethane insulated steel panel (R19), supplied and '
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
        'src' => $img . 'rockwood-slider-1.webp',
        'alt' => 'Rockwood L200RW carriage house garage door with red cedar overlays',
    ],
    [
        'src' => $img . 'rockwood-slider-2.webp',
        'alt' => 'Rockwood L200RW garage doors in a black oak stain',
    ],
    [
        'src' => $img . 'rockwood-slider-3.webp',
        'alt' => 'Rockwood L200RW cedar carriage house doors on a stone-fronted home',
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
    'warranty'     => 'Warranty',
    'literature'   => 'Literature',
];


/* --- Tab content ------------------------------------------------------ */

/* The eight named cedar overlay designs. Unlike the steel models these
   are not panel profiles but overlay patterns applied to the Landmark
   panel, and any of them can be customised — hence the note under the
   grid rather than a colours tab. */
$panel_styles = [
    ['name' => 'Bentley',     'img' => $img . 'rockwood-bentley.webp'],
    ['name' => 'Bracebridge', 'img' => $img . 'rockwood-bracebridge.webp'],
    ['name' => 'Crosshill',   'img' => $img . 'rockwood-crosshill.webp'],
    ['name' => 'Linwood',     'img' => $img . 'rockwood-linwood.webp'],
    ['name' => 'Oxford',      'img' => $img . 'rockwood-oxford.webp'],
    ['name' => 'Shakespeare', 'img' => $img . 'rockwood-shakespeare.webp'],
    ['name' => 'Stratford',   'img' => $img . 'rockwood-stratford.webp'],
    ['name' => 'Waterloo',    'img' => $img . 'rockwood-waterloo.webp'],
];

$door_literature = [
    [
        'name' => 'Rockwood Brochure',
        'img'  => $img . 'rockwood-brochure.jpg',
        'pdf'  => $img . 'rockwood-brochure.pdf',
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
                    <h1 class="desktop-heading">Landmark&trade; Rockwood L200RW</h1>

                    <h2>Sophisticated Style, Unrivalled Craftsmanship.</h2>

                    <p>A Rockwood three-section Carriage House door brings unparalleled warmth and individuality
                        to your home. While designed for residential appeal, its construction reflects the same
                        craftsmanship found in
                        <a href="commercial-overhead-doors.php">commercial garage doors</a>. Custom-crafted red
                        cedar overlays covering our technologically advanced, foam-insulated steel panels offer
                        vintage style with unsurpassed structural integrity.</p>

                    <ul class="product-intro-list">
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>2&Prime; Neufoam&trade; Polyurethane Insulated Carriage House
                                <a href="residential-doors/Residential-Garage-Doors.php">Garage Door</a>
                                (R19).</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Features 1&Prime; Cedar Board Applied to 2&Prime; Landmark Panel.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Customizable Colours and Designs Available.</span>
                        </li>
                    </ul>

                    <a href="contact-us.php" class="cmn-btn">Get a Free Estimate</a>
                </div>

            </div>
            <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 right-side">
                <h1 class="mobile-heading">Landmark&trade; Rockwood L200RW</h1>

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
        aria-label="Rockwood L200RW image gallery" tabindex="-1">

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
                    <p class="door-options-note">*Each design is a 1&Prime; cedar overlay applied to the 2&Prime;
                        Landmark panel. Colours and designs are customizable &mdash; talk to us about building
                        something to your own drawing.</p>
                </div>

                <!-- Warranty -->
                <div class="rv-tab-panel" id="door-opt-warranty" role="tabpanel"
                    aria-labelledby="door-tab-warranty" tabindex="0" hidden>
                    <h3>Limited Lifetimer&trade; Warranty</h3>
                    <p>There are enough worries in life &ndash; your garage door shouldn&rsquo;t be one of them.
                        When you choose the Landmark&trade; Rockwood L200RW, you&rsquo;ve chosen the best garage
                        door you can buy, and that is backed up in writing with the Limited Lifetimer&trade;
                        Warranty.</p>
                    <p>A door is only as good as its installation, so every Rockwood we supply is fitted by
                        Rivett&rsquo;s own factory-trained technicians.</p>
                    <ul class="door-options-list">
                        <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span><a href="<?php echo rv_attr($img); ?>landmark-rockwood-warranty.pdf"
                                target="_blank" rel="noopener">Download the full Rockwood warranty (PDF)</a></span>
                        </li>
                    </ul>
                    <a href="contact-us.php" class="cmn-btn">Ask About Coverage</a>
                    <p class="door-options-note">*Warranty terms vary by design and finish. Full details are
                        supplied with your quote.</p>
                </div>

                <!-- Literature -->
                <div class="rv-tab-panel" id="door-opt-literature" role="tabpanel"
                    aria-labelledby="door-tab-literature" tabindex="0" hidden>
                    <h3>Literature</h3>
                    <p>Download the product literature for the Landmark&trade; Rockwood L200RW, or ask us to walk
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
