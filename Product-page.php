<?php include 'header.php'; ?>

<?php
/**
 * Banner gallery source of truth.
 *
 * The stage image, the page thumbnails and the popup thumbnails are all
 * rendered from this one array, so adding or reordering a photo is a
 * single-line change and the three views can never drift apart.
 */
$product_gallery = [
    [
        'src' => 'src/images/premium-l200.webp',
        'alt' => 'Landmark Premium L200 garage doors in dark woodgrain on a brick home',
    ],
    [
        'src' => 'src/images/premium-contemporary-l200c.webp',
        'alt' => 'Landmark Premium Contemporary L200C garage door with full-width windows',
    ],
    [
        'src' => 'src/images/briarcrest-l200bc.webp',
        'alt' => 'Landmark Briarcrest L200BC carriage-house style garage door',
    ],
    [
        'src' => 'src/images/grandview-l200gv.webp',
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
 * Thumbnail strip. Rendered twice (page + popup) from the same data;
 * $context only varies the ids/labels so both strips stay unique.
 */
function rv_render_gallery_thumbs($gallery, $context)
{
    $total = count($gallery);
    ?>
    <div class="product-gallery-thumbs product-<?php echo rv_attr($context); ?>-thumbs" role="group"
        aria-label="Product images">
        <?php foreach ($gallery as $index => $image) : ?>
            <button type="button"
                class="product-thumb<?php echo $index === 0 ? ' is-active' : ''; ?>"
                data-gallery-index="<?php echo (int) $index; ?>"
                data-gallery-src="<?php echo rv_attr($image['src']); ?>"
                data-gallery-alt="<?php echo rv_attr($image['alt']); ?>"
                aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                aria-label="Show image <?php echo (int) ($index + 1); ?> of <?php echo (int) $total; ?>: <?php echo rv_attr($image['alt']); ?>">
                <img src="<?php echo rv_attr($image['src']); ?>" alt="" width="810" height="398"
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
 * Draws a garage-door face as inline SVG — four stacked sections, each
 * split into $cols panels rendered in $style. Line art rather than photos
 * keeps the panel thumbnails crisp at any size and needs no image assets.
 * $top_cols / $top_style override the first section (used by Mixed Panel).
 *
 * Styles: raised | recessed | grooved | flush | plank.
 */
function rv_panel_svg($cols, $style, $top_cols = null, $top_style = null)
{
    $width = 200;
    $height = 120;
    $sections = 4;
    $section_h = $height / $sections;
    $pad = 5;
    $gap = 5;

    $svg = '<svg class="door-face" viewBox="0 0 ' . $width . ' ' . $height . '"'
         . ' aria-hidden="true" focusable="false">';
    $svg .= '<rect class="door-face-bg" x="0.5" y="0.5" width="' . ($width - 1)
          . '" height="' . ($height - 1) . '"/>';

    for ($s = 0; $s < $sections; $s++) {
        $y = $s * $section_h;

        if ($s > 0) {
            $svg .= '<line class="door-face-line" x1="0" y1="' . $y . '" x2="' . $width . '" y2="' . $y . '"/>';
        }

        $s_style = ($s === 0 && $top_style) ? $top_style : $style;
        $s_cols  = ($s === 0 && $top_cols) ? $top_cols : $cols;

        if ($s_style === 'flush') {
            continue;
        }

        if ($s_style === 'plank') {
            for ($p = 1; $p < 3; $p++) {
                $py = round($y + ($section_h / 3) * $p, 2);
                $svg .= '<line class="door-face-line" x1="0" y1="' . $py . '" x2="' . $width . '" y2="' . $py . '"/>';
            }
            continue;
        }

        $panel_w = ($width - ($pad * 2) - ($gap * ($s_cols - 1))) / $s_cols;
        $panel_h = $section_h - ($pad * 2);

        for ($c = 0; $c < $s_cols; $c++) {
            $x = round($pad + $c * ($panel_w + $gap), 2);
            $py = round($y + $pad, 2);
            $pw = round($panel_w, 2);

            $svg .= '<rect class="door-face-panel" x="' . $x . '" y="' . $py
                  . '" width="' . $pw . '" height="' . $panel_h . '"/>';

            if ($s_style === 'raised') {
                $svg .= '<rect class="door-face-panel-inner" x="' . ($x + 3) . '" y="' . ($py + 3)
                      . '" width="' . ($pw - 6) . '" height="' . ($panel_h - 6) . '"/>';
            } elseif ($s_style === 'grooved') {
                $gy = round($py + $panel_h / 2, 2);
                $svg .= '<line class="door-face-line" x1="' . ($x + 3) . '" y1="' . $gy
                      . '" x2="' . round($x + $pw - 3, 2) . '" y2="' . $gy . '"/>';
            }
        }
    }

    return $svg . '</svg>';
}

/**
 * Draws a window insert as inline SVG. Same reasoning as rv_panel_svg —
 * the muntin patterns are geometry, so they are drawn rather than shipped.
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
 * Card grid used by every visual tab. $items each carry a 'name' plus
 * either 'svg' (pre-rendered line art) or 'hex' (a finish swatch).
 */
function rv_render_option_cards($items, $modifier = '')
{
    ?>
    <div class="door-options-grid<?php echo $modifier ? ' ' . rv_attr($modifier) : ''; ?>">
        <?php foreach ($items as $item) : ?>
            <figure class="door-option-card">
                <?php if (isset($item['hex'])) : ?>
                    <span class="door-option-swatch" style="background-color:<?php echo rv_attr($item['hex']); ?>"></span>
                <?php else : ?>
                    <span class="door-option-media"><?php echo $item['svg']; // built by rv_panel_svg / rv_window_svg ?></span>
                <?php endif; ?>
                <figcaption><?php echo rv_attr($item['name']); ?></figcaption>
            </figure>
        <?php endforeach; ?>
    </div>
    <?php
}

/* --- Tab content ------------------------------------------------------ */

/* Eight panel styles, matching the "8 Panel Styles Available" claim above. */
$panel_styles = [
    ['name' => 'Raised Ranch',              'svg' => rv_panel_svg(3, 'raised')],
    ['name' => 'Raised Colonial',           'svg' => rv_panel_svg(4, 'raised')],
    ['name' => 'Flush',                     'svg' => rv_panel_svg(0, 'flush')],
    ['name' => 'Plank',                     'svg' => rv_panel_svg(0, 'plank')],
    ['name' => 'Mixed Panel',               'svg' => rv_panel_svg(3, 'raised', 4)],
    ['name' => 'Recessed Grooved Colonial', 'svg' => rv_panel_svg(4, 'grooved')],
    ['name' => 'Recessed Grooved Ranch',    'svg' => rv_panel_svg(3, 'grooved')],
    ['name' => 'Recessed Ranch',            'svg' => rv_panel_svg(3, 'recessed')],
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
    ['name' => 'Golden Oak', 'hex' => '#B5793A'],
    ['name' => 'Medium Oak', 'hex' => '#8E5A2B'],
    ['name' => 'Dark Oak',   'hex' => '#6A421F'],
    ['name' => 'Walnut',     'hex' => '#5C3A1E'],
    ['name' => 'Mahogany',   'hex' => '#6B2E20'],
    ['name' => 'Driftwood',  'hex' => '#8A8177'],
];

$door_windows = [
    ['name' => 'Plain',     'svg' => rv_window_svg('plain')],
    ['name' => 'Stockton',  'svg' => rv_window_svg('stockton')],
    ['name' => 'Madison',   'svg' => rv_window_svg('madison')],
    ['name' => 'Prairie',   'svg' => rv_window_svg('prairie')],
    ['name' => 'Cathedral', 'svg' => rv_window_svg('cathedral')],
    ['name' => 'Sunburst',  'svg' => rv_window_svg('sunburst')],
];
?>

<section class="product-page-banner rivett-padding rivett-cmn">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 left-side">

                <div class="product-intro">
                    <h1>Landmark&trade; Premium L200</h1>

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
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 right-side">

                <div class="product-gallery" id="productGallery">

                    <!-- Stage. Kept as a real link to the photo so it still opens
                         without JavaScript; the popup is the enhancement. -->
                    <a href="<?php echo rv_attr($product_gallery_first['src']); ?>"
                        class="product-gallery-stage js-product-gallery-open"
                        aria-haspopup="dialog" aria-controls="productGalleryPopup">
                        <img src="<?php echo rv_attr($product_gallery_first['src']); ?>"
                            alt="<?php echo rv_attr($product_gallery_first['alt']); ?>" width="810" height="398"
                            class="img-fluid js-product-gallery-image" fetchpriority="high" decoding="async">
                        <span class="visually-hidden"> &mdash; open larger view</span>
                    </a>

                    <?php rv_render_gallery_thumbs($product_gallery, 'gallery'); ?>

                </div>

            </div>

        </div>
    </div>

    <!-- Lightbox content. Hidden until Magnific Popup pulls it in. -->
    <div class="product-gallery-popup mfp-hide" id="productGalleryPopup" role="dialog" aria-modal="true"
        aria-label="Landmark Premium L200 image gallery" tabindex="-1">
        <div class="product-popup-stage">
            <img src="<?php echo rv_attr($product_gallery_first['src']); ?>"
                alt="<?php echo rv_attr($product_gallery_first['alt']); ?>" width="810" height="398"
                class="img-fluid js-product-popup-image" decoding="async">
        </div>

        <?php rv_render_gallery_thumbs($product_gallery, 'popup'); ?>
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
                            <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
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
                    <h3>Windows</h3>
                    <?php rv_render_option_cards($door_windows, 'door-options-grid-window'); ?>
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
                    <ul class="door-options-list door-options-downloads">
                        <li><a href="#"><i class="fa-solid fa-file-pdf" aria-hidden="true"></i>
                            <span>Landmark&trade; Premium L200 brochure</span></a></li>
                        <li><a href="#"><i class="fa-solid fa-file-pdf" aria-hidden="true"></i>
                            <span>Panel style and colour chart</span></a></li>
                        <li><a href="#"><i class="fa-solid fa-file-pdf" aria-hidden="true"></i>
                            <span>Technical specification sheet</span></a></li>
                        <li><a href="#"><i class="fa-solid fa-file-pdf" aria-hidden="true"></i>
                            <span>Warranty statement</span></a></li>
                    </ul>
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
