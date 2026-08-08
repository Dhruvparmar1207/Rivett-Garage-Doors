<?php
/* =====================================================================
   BRAND PAGE TEMPLATE

   One template for every brand. It is never linked to directly — the
   thin page files next to it (liftmaster.php, richards-wilcox.php, …)
   each set a slug and hand over:

      <?php
       $rivett_brand_slug = 'liftmaster';
       require __DIR__ . '/brand-page.php';

   That keeps the URLs clean and SEO-friendly while the markup lives in
   exactly one place. Opened directly it also accepts ?brand=<slug>,
   which is handy while previewing new entries.

   To add a brand: add an entry to common-sections/brand-data.php and
   copy one of the thin page files. Nothing here needs to change.
   ===================================================================== */

require_once __DIR__ . '/common-sections/brand-data.php';
require_once __DIR__ . '/common-sections/brand-render.php';

$rivett_brand_requested = isset($rivett_brand_slug)
    ? $rivett_brand_slug
    : (isset($_GET['brand']) ? $_GET['brand'] : '');

// Only ever used as an array key against the known set, so an unknown or
// hostile value simply misses and falls through to the not-found branch.
$brand = rivett_brand_get($rivett_brand_requested, $RIVETT_BRANDS);

if ($brand === null) {
    http_response_code(404);

    $page_title       = 'Brand Not Found | Rivett Architectural Hardware Ltd.';
    $page_description = 'The brand page you are looking for is not available.';
    $page_body_class  = 'brand-page brand-page-missing';

    include __DIR__ . '/header.php';
    ?>

    <section class="rivett-cmn rivett-padding brand-missing-sec">
      <div class="container-md">
        <div class="row">
          <div class="col-12 top-heading">
            <h2>We could not find that brand</h2>
            <p>The page may have moved. Browse the brands we carry from the menu, or get in touch and we will point you
              at the right product.</p>
            <a href="contact-us.php" class="cmn-btn">Get in Touch</a>
          </div>
        </div>
      </div>
    </section>

    <?php
    include __DIR__ . '/footer.php';
    return;
}

/* Consumed by header.php. Falls back to the brand name so a new entry
   is never published with the wrong <title>. */
$rivett_brand_meta = isset($brand['meta']) ? $brand['meta'] : [];

$page_title       = rivett_brand_val($rivett_brand_meta, 'title', $brand['name'] . ' | Rivett Architectural Hardware Ltd.');
$page_description = rivett_brand_val($rivett_brand_meta, 'description', '');
$page_body_class  = 'brand-page brand-page-' . $brand['slug'];

include __DIR__ . '/header.php';

rivett_brand_intro($brand);
rivett_brand_partner($brand);
rivett_brand_featured($brand);

include __DIR__ . '/common-sections/testimonial-section.php';

/* The banner and the services row are a pair: the banner's negative
   margin pulls the card grid up under it, so they render together and in
   this order. Each still no-ops on its own when a brand has no data. */
rivett_brand_cta_banner($brand);
rivett_brand_services($brand);


include __DIR__ . '/common-sections/location-mapping-sec.php';

include __DIR__ . '/footer.php';
