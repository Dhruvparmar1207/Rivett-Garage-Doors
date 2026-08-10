<?php
/* =====================================================================
   PRODUCT PAGE TEMPLATE — ONE LAYOUT FOR EVERY DOOR MODEL

   Every model page under residential-doors/by-door-type/ is the same
   page: a banner with an intro and a gallery, a Door Options tab block,
   and the shared closing sections. Only the CONTENT differs. That layout
   lives here once, so a change to the markup reaches all of them and a
   new model is a data file, not a copy of 200 lines of HTML.

   ---------------------------------------------------------------------
   USING IT

   A model page sets $product and requires this file. Nothing else:

       <?php
       $product = [ ... ];
       require __DIR__ . '/../../../common-sections/product-page.php';

   This file pulls in header.php, the shared renderers, the closing
   sections and footer.php itself, and resolves every one of them from
   its OWN directory (dirname(__DIR__) is the project root). A model page
   can therefore sit at any depth — only the path to this file changes.

   ---------------------------------------------------------------------
   $product KEYS

     title          required. <title> text.
     description    required. Meta description.
     name           required. Product name for the <h1>s. May contain
                    entities, e.g. 'Landmark&trade; Classic L138'.
     gallery_label  optional. Plain-text name for the lightbox's
                    aria-label. Defaults to `name` with tags and
                    entities stripped.
     subtitle       required. The <h2> under the heading.
     intro          optional. Array of paragraph strings.
     bullets        optional. Array of strings for the spec list.
     intro_note     optional. Small print under the bullets.
     cta            optional. ['label' => ..., 'url' => ...] for the
                    banner button. Defaults to a free estimate.
     gallery        required. Array of ['src' => ..., 'alt' => ...].
     tabs           required. Ordered map of tab key => panel definition;
                    see rv_render_product_panel() below for the keys a
                    panel may carry. The first tab is the open one.

   ---------------------------------------------------------------------
   ESCAPING

   Copy fields — name, subtitle, intro, bullets, notes, headings,
   paragraphs, list — are echoed AS HTML, because the real copy contains
   entities (&trade;, &Prime;, &rsquo;) and inline <a> links. They are
   author-written, never user input. Everything machine-ish — image
   paths, URLs, tab keys, alt text — goes through rv_attr().
   ===================================================================== */

if (!isset($product) || !is_array($product)) {
    trigger_error('product-page.php included without a $product array.', E_USER_WARNING);
    return;
}

/* header.php reads these two, so they must be set before it loads. */
$page_title       = $product['title'];
$page_description = $product['description'];

require dirname(__DIR__) . '/header.php';

/* Drives the gallery lightbox and the Door Options tabs/accordion.
   footer.php picks this up at the bottom of the page. */
$page_scripts = ['src/js/product.js'];

/* The card, thumbnail and literature renderers shared with Product-page.php. */
require_once __DIR__ . '/product-options.php';


/* --- Local helpers ---------------------------------------------------- */

if (!function_exists('rv_product_gallery_label')) {

    /** Lightbox aria-label: the product name as plain text. */
    function rv_product_gallery_label(array $product)
    {
        if (!empty($product['gallery_label'])) {
            return $product['gallery_label'];
        }

        return trim(html_entity_decode(strip_tags($product['name']), ENT_QUOTES, 'UTF-8'));
    }

    /**
     * One Door Options panel. Every key is optional, and they render in
     * this fixed order — which is enough to express every panel across
     * the range, from a plain card grid to the warranty's prose:
     *
     *   heading      <h3>. Omit it where the content carries its own
     *                headings, the way the grouped Windows tab does.
     *   paragraphs   array of <p> strings, above the artwork.
     *   groups       grouped card data  -> rv_render_option_groups()
     *   items        flat card data     -> rv_render_option_cards()
     *   modifier     extra grid class for either of the two above.
     *   literature   download cards     -> rv_render_literature_cards()
     *   list         array of strings for a .door-options-list.
     *   cta          ['label' => ..., 'url' => ...] button.
     *   note         small print, always last.
     */
    function rv_render_product_panel(array $panel)
    {
        $modifier = isset($panel['modifier']) ? $panel['modifier'] : '';

        if (!empty($panel['heading'])) : ?>
                    <h3><?php echo $panel['heading']; ?></h3>
        <?php endif;

        if (!empty($panel['paragraphs'])) :
            foreach ((array) $panel['paragraphs'] as $paragraph) : ?>
                    <p><?php echo $paragraph; ?></p>
            <?php endforeach;
        endif;

        if (!empty($panel['groups'])) {
            rv_render_option_groups($panel['groups'], $modifier);
        } elseif (!empty($panel['items'])) {
            rv_render_option_cards($panel['items'], $modifier);
        }

        if (!empty($panel['literature'])) {
            rv_render_literature_cards($panel['literature']);
        }

        if (!empty($panel['list'])) : ?>
                    <ul class="door-options-list">
                        <?php foreach ((array) $panel['list'] as $line) : ?>
                            <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                                <span><?php echo $line; ?></span></li>
                        <?php endforeach; ?>
                    </ul>
        <?php endif;

        if (!empty($panel['cta'])) : ?>
                    <a href="<?php echo rv_attr($panel['cta']['url']); ?>"
                        class="cmn-btn"><?php echo $panel['cta']['label']; ?></a>
        <?php endif;

        if (!empty($panel['note'])) : ?>
                    <p class="door-options-note"><?php echo $panel['note']; ?></p>
        <?php endif;
    }
}


/* --- Derived values --------------------------------------------------- */

$gallery       = $product['gallery'];
$gallery_total = count($gallery);
$gallery_first = $gallery[0];
$gallery_label = rv_product_gallery_label($product);
$banner_cta    = isset($product['cta'])
    ? $product['cta']
    : ['label' => 'Get a Free Estimate', 'url' => 'contact-us.php'];
?>

<section class="product-page-banner rivett-padding rivett-cmn">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 left-side">

                <div class="product-intro">
                    <h1 class="desktop-heading"><?php echo $product['name']; ?></h1>

                    <h2><?php echo $product['subtitle']; ?></h2>

                    <?php foreach ((array) ($product['intro'] ?? []) as $paragraph) : ?>
                        <p><?php echo $paragraph; ?></p>
                    <?php endforeach; ?>

                    <?php if (!empty($product['bullets'])) : ?>
                        <ul class="product-intro-list">
                            <?php foreach ((array) $product['bullets'] as $bullet) : ?>
                                <li>
                                    <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                                    <span><?php echo $bullet; ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <?php if (!empty($product['intro_note'])) : ?>
                        <p class="door-options-note"><?php echo $product['intro_note']; ?></p>
                    <?php endif; ?>

                    <a href="<?php echo rv_attr($banner_cta['url']); ?>"
                        class="cmn-btn"><?php echo $banner_cta['label']; ?></a>
                </div>

            </div>
            <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 right-side">
                <h1 class="mobile-heading"><?php echo $product['name']; ?></h1>

                <div class="product-gallery" id="productGallery">

                    <!-- Stage. Kept as a real link to the photo so it still opens
                         without JavaScript; the popup is the enhancement. -->
                    <a href="<?php echo rv_attr($gallery_first['src']); ?>"
                        class="product-gallery-stage js-product-gallery-open"
                        aria-haspopup="dialog" aria-controls="productGalleryPopup">
                        <img src="<?php echo rv_attr($gallery_first['src']); ?>"
                            alt="<?php echo rv_attr($gallery_first['alt']); ?>" width="934" height="529"
                            class="img-fluid js-product-gallery-image" fetchpriority="high" decoding="async">
                        <span class="visually-hidden"> &mdash; open larger view</span>
                    </a>

                    <?php rv_render_gallery_thumbs($gallery); ?>

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
        aria-label="<?php echo rv_attr($gallery_label); ?> image gallery" tabindex="-1">

        <div class="popup-gallery">

            <button type="button" class="popup-close" aria-label="Close gallery">
                <img src="./src/images/popup-close-icon.webp" alt="" width="20" height="20"
                    class="img-fluid" aria-hidden="true">
            </button>

            <div class="popup-main">
                <?php foreach ($gallery as $image) : ?>
                    <div class="popup-main-item">
                        <img src="<?php echo rv_attr($image['src']); ?>"
                            alt="<?php echo rv_attr($image['alt']); ?>" class="img-fluid"
                            loading="lazy" decoding="async">
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="popup-thumbs" role="group" aria-label="Product images">
                <?php foreach ($gallery as $index => $image) : ?>
                    <button type="button"
                        class="thumb-wrap<?php echo $index === 0 ? ' is-active' : ''; ?>"
                        data-gallery-index="<?php echo (int) $index; ?>"
                        aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                        aria-label="Show image <?php echo (int) ($index + 1); ?> of <?php echo (int) $gallery_total; ?>: <?php echo rv_attr($image['alt']); ?>">
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
                    <?php $tab_index = 0; foreach ($product['tabs'] as $key => $panel) : $is_first = ($tab_index === 0); ?>
                        <button type="button"
                            class="rv-tab<?php echo $is_first ? ' active' : ''; ?>"
                            role="tab"
                            id="door-tab-<?php echo rv_attr($key); ?>"
                            data-tab="door-opt-<?php echo rv_attr($key); ?>"
                            aria-controls="door-opt-<?php echo rv_attr($key); ?>"
                            aria-selected="<?php echo $is_first ? 'true' : 'false'; ?>"
                            tabindex="<?php echo $is_first ? '0' : '-1'; ?>">
                            <span><?php echo rv_attr($panel['label']); ?></span>
                            <img src="./src/images/tabbing-sec-arrow.webp" alt="" class="img-fluid">
                        </button>
                    <?php $tab_index++; endforeach; ?>
                </div>
            </div>

            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12 right-side">

                <?php $tab_index = 0; foreach ($product['tabs'] as $key => $panel) : $is_first = ($tab_index === 0); ?>
                <!-- <?php echo $panel['label']; ?> -->
                <div class="rv-tab-panel<?php echo $is_first ? ' active' : ''; ?>" id="door-opt-<?php echo rv_attr($key); ?>"
                    role="tabpanel" aria-labelledby="door-tab-<?php echo rv_attr($key); ?>"
                    tabindex="0"<?php echo $is_first ? '' : ' hidden'; ?>>
                    <?php rv_render_product_panel($panel); ?>
                </div>
                <?php $tab_index++; endforeach; ?>

            </div>

        </div>
    </div>
</section>


<?php include __DIR__ . '/location-mapping-sec.php'; ?>

<?php include __DIR__ . '/footer-cta.php'; ?>

<?php include dirname(__DIR__) . '/footer.php'; ?>
