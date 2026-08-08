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

/** Escape helper — every value below is echoed into markup. */
function rv_attr($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/**
 * Page thumbnail strip, under the stage image. The data attributes are
 * the gallery's contract with product.js: they carry the photo each
 * thumbnail selects, so the stage and the popup can be driven from one
 * index. The popup has its own carousel markup further down.
 */
function rv_render_gallery_thumbs($gallery)
{
    $total = count($gallery);
    ?>
    <div class="product-gallery-thumbs" role="group" aria-label="Product images">
        <?php foreach ($gallery as $index => $image) : ?>
            <button type="button"
                class="product-thumb<?php echo $index === 0 ? ' is-active' : ''; ?>"
                data-gallery-index="<?php echo (int) $index; ?>"
                data-gallery-src="<?php echo rv_attr($image['src']); ?>"
                data-gallery-alt="<?php echo rv_attr($image['alt']); ?>"
                aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                aria-label="Show image <?php echo (int) ($index + 1); ?> of <?php echo (int) $total; ?>: <?php echo rv_attr($image['alt']); ?>">
                <img src="<?php echo rv_attr($image['src']); ?>" alt=""
                    class="img-fluid" loading="lazy" decoding="async">
            </button>
        <?php endforeach; ?>
    </div>
    <?php
}

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

/**
 * Draws a window insert as inline SVG. The muntin patterns are geometry,
 * so they are drawn rather than shipped: line art stays crisp at any size
 * and needs no image asset. The panel styles used to be drawn the same
 * way and now ship as photos instead (see $panel_styles); do the same
 * here the moment window artwork exists.
 */
function rv_window_svg($style)
{
    $width = 200;
    $height = 72;

    $svg = '<svg class="door-face door-face-window" viewBox="0 0 ' . $width . ' ' . $height . '"'
         . ' aria-hidden="true" focusable="false">';
    $svg .= '<rect class="door-face-bg" x="0.5" y="0.5" width="' . ($width - 1)
          . '" height="' . ($height - 1) . '"/>';

    switch ($style) {
        case 'stockton':
            for ($i = 1; $i < 4; $i++) {
                $x = round($width / 4 * $i, 2);
                $svg .= '<line class="door-face-line" x1="' . $x . '" y1="0" x2="' . $x . '" y2="' . $height . '"/>';
            }
            break;

        case 'madison':
            for ($i = 1; $i < 3; $i++) {
                $x = round($width / 3 * $i, 2);
                $svg .= '<line class="door-face-line" x1="' . $x . '" y1="0" x2="' . $x . '" y2="' . $height . '"/>';
            }
            $svg .= '<line class="door-face-line" x1="0" y1="' . ($height / 2) . '" x2="' . $width . '" y2="' . ($height / 2) . '"/>';
            break;

        case 'prairie':
            $svg .= '<rect class="door-face-panel" x="16" y="12" width="' . ($width - 32) . '" height="' . ($height - 24) . '"/>';
            break;

        case 'cathedral':
            $svg .= '<path class="door-face-stroke" d="M20 ' . $height . ' V34 Q100 -8 180 34 V' . $height . '"/>';
            $svg .= '<line class="door-face-line" x1="100" y1="14" x2="100" y2="' . $height . '"/>';
            break;

        case 'sunburst':
            $svg .= '<path class="door-face-stroke" d="M28 ' . $height . ' A72 72 0 0 1 172 ' . $height . '"/>';
            for ($i = 1; $i < 5; $i++) {
                $angle = M_PI - (M_PI / 5) * $i;
                $x = round(100 + cos($angle) * 72, 2);
                $y = round($height - sin($angle) * 68, 2);
                $svg .= '<line class="door-face-line" x1="100" y1="' . $height . '" x2="' . $x . '" y2="' . $y . '"/>';
            }
            break;

        case 'plain':
        default:
            break;
    }

    return $svg . '</svg>';
}

/**
 * Card grid used by every visual tab. Each $item carries a 'name' plus
 * exactly one piece of artwork:
 *
 *   'hex' — a flat finish swatch      (colours, woodtones)
 *   'img' — a path to a photo         (panel styles)
 *   'svg' — pre-rendered line art     (window inserts)
 *
 * Adding artwork for the remaining tabs is therefore a data change: swap
 * an item's 'svg' for an 'img' and this renderer needs no edit.
 */
function rv_render_option_cards($items, $modifier = '')
{
    ?>
    <div class="door-options-grid<?php echo $modifier ? ' ' . rv_attr($modifier) : ''; ?>">
        <?php foreach ($items as $item) : ?>
            <figure class="door-option-card">
                <?php if (isset($item['hex'])) : ?>
                    <span class="door-option-swatch" style="background-color:<?php echo rv_attr($item['hex']); ?>"></span>
                <?php elseif (isset($item['img'])) : ?>
                    <span class="door-option-media">
                        <!-- alt is empty by design, matching the aria-hidden the
                             inline SVG carried: the figcaption right below names
                             the option, so alt text here would only repeat it.
                             width/height reserve the box before the file lands;
                             the exact ratio is CSS's job. -->
                        <img src="<?php echo rv_attr($item['img']); ?>" alt=""
                            width="200" height="168" class="door-option-photo"
                            loading="lazy" decoding="async">
                    </span>
                <?php else : ?>
                    <span class="door-option-media"><?php echo $item['svg']; // built by rv_window_svg ?></span>
                <?php endif; ?>
                <figcaption><?php echo rv_attr($item['name']); ?></figcaption>
            </figure>
        <?php endforeach; ?>
    </div>
    <?php
}

function rv_render_literature_cards($items)
{
    ?>
    <div class="row">
        <?php foreach ($items as $item) : ?>
            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 pro-object-box">
                <a href="<?php echo rv_attr($item['pdf']); ?>" target="_blank" rel="noopener">
                    <img
                        decoding="async"
                        class="img-fluid"
                        src="<?php echo rv_attr($item['img']); ?>"
                        alt="<?php echo rv_attr($item['name'] ?? 'Product Catalogue'); ?>"
                    >
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <?php
}

function rv_render_option_groups($groups, $modifier = '')
{
    foreach ($groups as $group) :

        if (empty($group['items'])) {
            continue;
        }
        ?>

        <div class="door-option-group">

            <?php if (!empty($group['heading'])) : ?>
                <h3 class="door-option-group-heading">
                    <?php echo rv_attr($group['heading']); ?>
                </h3>
            <?php endif; ?>

            <?php
            rv_render_option_cards(
                $group['items'],
                $modifier
            );
            ?>

        </div>

        <?php
    endforeach;
}


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
                                <a href="Residential-Garage-Doors.php">Garage Door</a> (R18).</span>
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
