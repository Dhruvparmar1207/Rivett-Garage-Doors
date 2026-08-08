<?php
/* =====================================================================
   BRAND PAGE RENDERERS

   Three sections, one per band of the approved design, each driven
   entirely by an entry of $RIVETT_BRANDS (common-sections/brand-data.php):

     rivett_brand_intro()     heading + copy + badges, dealer logo card
     rivett_brand_partner()   image band with copy and a CTA
     rivett_brand_featured()  the product card grid

   They are plain functions rather than includes so brand-page.php stays
   readable and so any other template can drop a single band in on its
   own — the featured grid works just as well on a category page.

   Nothing here echoes an unescaped value: every string from the data
   file goes through rivett_brand_e().
   ===================================================================== */

if (!function_exists('rivett_brand_e')) {

    /** Escape for HTML text and attribute values. */
    function rivett_brand_e($value)
    {
        return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
    }

    /**
     * Look a brand up by slug.
     *
     * The slug may come from a URL, so it is only ever used as an array
     * key against the known set — never interpolated anywhere.
     *
     * @return array|null
     */
    function rivett_brand_get($slug, array $brands)
    {
        $slug = strtolower(trim((string) $slug));
        return isset($brands[$slug]) ? $brands[$slug] + ['slug' => $slug] : null;
    }

    /**
     * True when a project-relative image path actually exists on disk.
     *
     * Product photography is added over time; this lets a card fall back
     * to a correctly-sized placeholder instead of a broken image, and
     * start rendering the real photo the moment the file lands.
     */
    function rivett_brand_has_asset($src)
    {
        if (empty($src)) {
            return false;
        }
        return is_file(dirname(__DIR__) . '/' . ltrim((string) $src, '/'));
    }

    /** Shorthand for reading an optional key out of the data array. */
    function rivett_brand_val(array $source, $key, $default = '')
    {
        return isset($source[$key]) && $source[$key] !== '' ? $source[$key] : $default;
    }


    /* ---------------------------------------------------------------
       SECTION 1 — INTRO
       Brand heading and copy on the left, the dealer logo card on the
       right. Carries the page's only <h1>.
       --------------------------------------------------------------- */
    function rivett_brand_intro(array $brand)
    {
        $intro = isset($brand['intro']) ? $brand['intro'] : [];
        if (empty($intro['heading'])) {
            return;
        }

        $logo   = isset($brand['logo']) ? $brand['logo'] : [];
        $badges = isset($intro['badges']) ? $intro['badges'] : [];
        ?>
    <!-- ============================= BRAND INTRO ============================= -->
    <section class="rivett-cmn rivett-padding brand-intro-sec" aria-labelledby="brand-intro-title">
      <div class="container-md">
        <div class="row">

          <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 brand-intro-copy">
            <h1 id="brand-intro-title"><?php echo rivett_brand_e($intro['heading']); ?></h1>

            <?php foreach (rivett_brand_val($intro, 'paragraphs', []) as $paragraph): ?>
              <p><?php echo rivett_brand_e($paragraph); ?></p>
            <?php endforeach; ?>

            <?php if ($badges): ?>
              <ul class="brand-badges">
                <?php foreach ($badges as $badge): ?>
                  <li class="brand-badge">
                    <?php
                    // Real partner logo when we have the asset, otherwise a
                    // typographic mark in the site's own type — never a
                    // broken image and never a fake of someone's logo.
                    $badgeLogo = isset($badge['logo']) ? $badge['logo'] : [];
                    if (rivett_brand_has_asset(rivett_brand_val($badgeLogo, 'src'))):
                        ?>
                      <img src="<?php echo rivett_brand_e($badgeLogo['src']); ?>"
                           alt="<?php echo rivett_brand_e(rivett_brand_val($badgeLogo, 'alt', rivett_brand_val($badge, 'mark'))); ?>"
                           class="brand-badge-logo img-fluid" loading="lazy" decoding="async">
                    <?php elseif (rivett_brand_val($badge, 'mark') !== ''): ?>
                      <span class="brand-badge-mark" aria-hidden="true"><?php echo rivett_brand_e($badge['mark']); ?></span>
                    <?php endif; ?>

                    <span class="brand-badge-text">
                      <?php if (rivett_brand_val($badge, 'title') !== ''): ?>
                        <span class="brand-badge-title"><?php echo rivett_brand_e($badge['title']); ?></span>
                      <?php endif; ?>
                      <?php if (rivett_brand_val($badge, 'text') !== ''): ?>
                        <span class="brand-badge-sub"><?php echo rivett_brand_e($badge['text']); ?></span>
                      <?php endif; ?>
                    </span>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>

          <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 brand-intro-aside">
            <?php if (rivett_brand_val($logo, 'src') !== ''): ?>
              <div class="brand-dealer-card">
                <img src="<?php echo rivett_brand_e($logo['src']); ?>"
                     alt="<?php echo rivett_brand_e(rivett_brand_val($logo, 'alt', $brand['name'])); ?>"
                     width="<?php echo rivett_brand_e(rivett_brand_val($logo, 'width', 292)); ?>"
                     height="<?php echo rivett_brand_e(rivett_brand_val($logo, 'height', 35)); ?>"
                     class="brand-dealer-logo img-fluid" decoding="async">
                <p class="brand-dealer-label"><?php echo rivett_brand_e(rivett_brand_val($brand, 'dealer_label', 'Authorized Dealer')); ?></p>
              </div>
            <?php endif; ?>
          </div>

        </div>
      </div>
    </section>
        <?php
    }


    /* ---------------------------------------------------------------
       SECTION 2 — PARTNER BAND
       Photograph on the left, "what Rivett adds" on the right.
       --------------------------------------------------------------- */
    function rivett_brand_partner(array $brand)
    {
        $partner = isset($brand['partner']) ? $brand['partner'] : [];
        if (empty($partner['heading'])) {
            return;
        }

        $image = isset($partner['image']) ? $partner['image'] : [];
        $cta   = isset($partner['cta']) ? $partner['cta'] : [];
        ?>
    <!-- ============================= BRAND PARTNER ============================= -->
    <section class="rivett-cmn rivett-padding brand-partner-sec" aria-labelledby="brand-partner-title">
      <div class="container-md">
        <div class="row align-items-center">

          <?php if (rivett_brand_val($image, 'src') !== ''): ?>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 brand-partner-media-col">
              <figure class="brand-partner-media">
                <img src="<?php echo rivett_brand_e($image['src']); ?>"
                     alt="<?php echo rivett_brand_e(rivett_brand_val($image, 'alt')); ?>"
                     width="<?php echo rivett_brand_e(rivett_brand_val($image, 'width', 800)); ?>"
                     height="<?php echo rivett_brand_e(rivett_brand_val($image, 'height', 530)); ?>"
                     class="img-fluid" loading="lazy" decoding="async">
              </figure>
            </div>
          <?php endif; ?>

          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 brand-partner-copy">
            <h2 id="brand-partner-title"><?php echo rivett_brand_e($partner['heading']); ?></h2>

            <?php foreach (rivett_brand_val($partner, 'paragraphs', []) as $paragraph): ?>
              <p><?php echo rivett_brand_e($paragraph); ?></p>
            <?php endforeach; ?>

            <?php if (rivett_brand_val($cta, 'label') !== ''): ?>
              <a href="<?php echo rivett_brand_e(rivett_brand_val($cta, 'url', 'contact-us.php')); ?>"
                 class="cmn-btn brand-partner-cta"><?php echo rivett_brand_e($cta['label']); ?></a>
            <?php endif; ?>
          </div>

        </div>
      </div>
    </section>
        <?php
    }


    /* ---------------------------------------------------------------
       SECTION 3 — FEATURED PRODUCTS
       Two-up card grid. A card links out only when its entry carries a
       'url'; the reference design shows them flat, so the default is no
       link and no stray focus stop.
       --------------------------------------------------------------- */
    function rivett_brand_featured(array $brand)
    {
        $featured = isset($brand['featured']) ? $brand['featured'] : [];
        $items    = rivett_brand_val($featured, 'items', []);
        if (!$items) {
            return;
        }
        ?>
    <!-- ============================= FEATURED PRODUCTS ============================= -->
    <section class="rivett-cmn rivett-padding brand-featured-sec" aria-labelledby="brand-featured-title">
      <div class="container-md">

        <div class="row">
          <div class="col-xxl-8 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 top-heading">
            <h2 id="brand-featured-title"><?php echo rivett_brand_e(rivett_brand_val($featured, 'heading', 'Featured Products')); ?></h2>
            <?php if (rivett_brand_val($featured, 'intro') !== ''): ?>
              <p><?php echo rivett_brand_e($featured['intro']); ?></p>
            <?php endif; ?>
          </div>
        </div>

        <div class="row brand-featured-grid">
          <?php foreach ($items as $item): ?>
            <?php
            $image = isset($item['image']) ? $item['image'] : [];
            $url   = rivett_brand_val($item, 'url');

            // 'contain' (default) suits an isolated product on white, the
            // way the reference design shows the openers. 'cover' lets a
            // photograph fill the card edge to edge instead.
            $mediaClass = rivett_brand_val($item, 'fit') === 'cover'
                ? 'brand-card-media brand-card-media--cover'
                : 'brand-card-media';
            ?>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec">
              <article class="brand-card">

                <?php if (rivett_brand_has_asset(rivett_brand_val($image, 'src'))): ?>
                  <div class="<?php echo rivett_brand_e($mediaClass); ?>">
                    <img src="<?php echo rivett_brand_e($image['src']); ?>"
                         alt="<?php echo rivett_brand_e(rivett_brand_val($image, 'alt', $item['title'])); ?>"
                         class="img-fluid" loading="lazy" decoding="async">
                  </div>
                <?php else: ?>
                  <!-- Photo not supplied yet. The box keeps the card's exact
                       height, so dropping the .webp in at the path named in
                       brand-data.php changes nothing but the picture. -->
                  <div class="brand-card-media brand-card-media--empty" role="img"
                       aria-label="<?php echo rivett_brand_e($item['title']); ?> — product photo coming soon">
                    <i class="fa-regular fa-image" aria-hidden="true"></i>
                    <span aria-hidden="true"><?php echo rivett_brand_e($item['title']); ?></span>
                  </div>
                <?php endif; ?>

                <div class="brand-card-body">
                  <h3><?php echo rivett_brand_e($item['title']); ?></h3>
                  <?php if (rivett_brand_val($item, 'text') !== ''): ?>
                    <p><?php echo rivett_brand_e($item['text']); ?></p>
                  <?php endif; ?>

                  <?php if ($url !== ''): ?>
                    <a href="<?php echo rivett_brand_e($url); ?>" class="link-arrow">
                      <?php echo rivett_brand_e(rivett_brand_val($item, 'link_label', 'View More')); ?>
                      <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                      <span class="visually-hidden"> about <?php echo rivett_brand_e($item['title']); ?></span>
                    </a>
                  <?php endif; ?>
                </div>

              </article>
            </div>
          <?php endforeach; ?>
        </div>

      </div>
    </section>
        <?php
    }
}
