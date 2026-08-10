<?php
/* =====================================================================
   PRODUCT PAGE RENDERERS — SINGLE SOURCE OF TRUTH

   Every door-model page (Product-page.php and the model pages under
   residential-doors/) draws the same two things: a banner gallery and
   the Door Options tab grid. The markup lives here once so a change to
   a card, a thumbnail or a group heading reaches every model page.

   A page supplies only data — $product_gallery, $panel_styles,
   $door_colours, $door_woodtones, $door_windows, $door_literature —
   and calls the functions below.

   Include it with an absolute path, because a model page can sit at any
   depth under the project root:

    
   require_once __DIR__ . '/../../../common-sections/product-options.php';

   The function_exists() guard keeps the file safe to include more than
   once in a single request.
   ===================================================================== */

if (!function_exists('rv_attr')) :

    /** Escape helper — every value below is echoed into markup. */
    function rv_attr($value)
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }

    /**
     * Page thumbnail strip, under the stage image. The data attributes are
     * the gallery's contract with product.js: they carry the photo each
     * thumbnail selects, so the stage and the popup can be driven from one
     * index. The popup has its own carousel markup in the page template.
     */
 function rv_render_gallery_thumbs($gallery)
{
    $total = count($gallery);
    ?>
    <div class="product-gallery-thumbs" role="group" aria-label="Product images">
        <?php foreach ($gallery as $index => $image) :
            $position = 'image ' . ($index + 1) . ' of ' . $total . ': ' . $image['alt'];
            $select_label = 'Show ' . $position;
            $open_label = 'Open larger view of ' . $position;
            $is_active = ($index === 0);
        ?>
            <button type="button"
                class="product-thumb<?php echo $is_active ? ' is-active' : ''; ?>"
                data-gallery-index="<?php echo (int) $index; ?>"
                data-gallery-src="<?php echo rv_attr($image['src']); ?>"
                data-gallery-alt="<?php echo rv_attr($image['alt']); ?>"
                data-select-label="<?php echo rv_attr($select_label); ?>"
                data-open-label="<?php echo rv_attr($open_label); ?>"
                aria-current="<?php echo $is_active ? 'true' : 'false'; ?>"
                <?php if ($is_active) : ?>aria-haspopup="dialog" aria-controls="productGalleryPopup"<?php endif; ?>
                aria-label="<?php echo rv_attr($is_active ? $open_label : $select_label); ?>">
                <img src="<?php echo rv_attr($image['src']); ?>" alt=""
                    class="img-fluid" loading="lazy" decoding="async">
            </button>
        <?php endforeach; ?>
    </div>
    <?php
}

    /**
     * Draws a window insert as inline SVG. The muntin patterns are geometry,
     * so they are drawn rather than shipped: line art stays crisp at any size
     * and needs no image asset. Kept as the fallback for any option that has
     * no photograph yet — every tab that does ships an 'img' instead.
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
     *   'hex' — a flat finish swatch      (colours)
     *   'img' — a path to a photo         (panel styles, woodtones, windows)
     *   'svg' — pre-rendered line art     (fallback, see rv_window_svg)
     *
     * Adding artwork for a tab is therefore a data change: swap an item's
     * 'svg' for an 'img' and this renderer needs no edit.
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


endif;
