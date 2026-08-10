<?php
/* =====================================================================
   CATEGORY PAGE TEMPLATE — ONE LAYOUT FOR EVERY "BY DOOR TYPE" PAGE

 
   ---------------------------------------------------------------------
   USING IT

       <?php
       $category = [ ... ];
       require __DIR__ . '/../../common-sections/category-page.php';

   This file pulls in header.php, the closing sections and footer.php
   itself, resolving each from its OWN directory (dirname(__DIR__) is the
   project root). A category page can therefore sit at any depth — only
   the path to this file changes.

   ---------------------------------------------------------------------
   $category KEYS

     title        required. <title> text.
     description  required. Meta description.
     hero_label   required. aria-label for the carousel region.
     hero         required. Array of slides, in display order:
                    eyebrow, heading, text, cta_label, cta_url,
                    image, alt ('' for a decorative slide).
     intro        optional. ['heading' => ..., 'paragraphs' => [...]].
     models       optional. ['heading' => ..., 'items' => [...]] where
                  each item is ['name','img','alt','specs'] plus an
                  optional 'url'. A card with no 'url' simply drops its
                  "View More" link rather than shipping a dead one.

   ---------------------------------------------------------------------
   ESCAPING — TWO DIFFERENT RULES, AND THEY MATTER

   HERO and MODEL fields are ESCAPED (rivett_nav_e). Write them as plain
   text with real characters — ™, ″, ® — never HTML entities. An entity
   written there is escaped a second time and renders literally as
   "&trade;" on the page.

   INTRO heading and paragraphs are echoed AS HTML, because that copy
   carries entities and inline <a> links to the model pages.
   ===================================================================== */

if (!isset($category) || !is_array($category)) {
    trigger_error('category-page.php included without a $category array.', E_USER_WARNING);
    return;
}

/* header.php reads these two, so they must be set before it loads. */
$page_title       = $category['title'];
$page_description = $category['description'];

require dirname(__DIR__) . '/header.php';

$hero_slides = $category['hero'];
$hero_total  = count($hero_slides);
?>

<!-- ============================= HERO ============================= -->

<section class="hero banner-sec sevice-page-banner residental-page-banner" aria-labelledby="hero-title">
      <div id="bannerSlider" class="owl-carousel banner-Slider" role="region"
            aria-roledescription="carousel" aria-label="<?php echo rivett_nav_e($category['hero_label']); ?>">

            <?php foreach ($hero_slides as $hero_index => $slide) :
                $is_first_slide = ($hero_index === 0);
            ?>
            <!-- Slide <?php echo $hero_index + 1; ?> -->
            <div class="banner-item">
                <article aria-roledescription="slide"
                    aria-label="<?php echo $hero_index + 1; ?> of <?php echo $hero_total; ?>">
                    <div class="cover-img">
                        <img src="<?php echo rivett_nav_e($slide['image']); ?>" width="1514" height="900"
                            alt="<?php echo rivett_nav_e($slide['alt'] ?? ''); ?>" class="img-fluid"
                            <?php echo $is_first_slide ? 'fetchpriority="high"' : 'loading="lazy"'; ?> decoding="async" />
                        <span class="banner-overlay" aria-hidden="true"></span>
                    </div>
                    <div class="content-sec">
                        <div class="container-md">
                            <div class="banner-text">
                                <p class="banner-eyebrow"><span><?php echo rivett_nav_e($slide['eyebrow']); ?></span></p>

                                <?php /* Every slide is an <h1> carrying id="hero-title", which is how the
                                   three category pages have always rendered. That means duplicate
                                   <h1>s and duplicate ids on a multi-slide hero. To give the page a
                                   single top-level heading, replace the line below with:

                                       <?php if ($is_first_slide) : ?>
                                       <h1 id="hero-title" class="banner-heading">...</h1>
                                       <?php else : ?>
                                       <h2 class="banner-heading">...</h2>
                                       <?php endif; ?>

                                   home.css styles .banner-heading identically for h1 and h2, so the
                                   design does not move. One edit here changes all category pages. */ ?>
                                <h1 id="hero-title" class="banner-heading"><?php echo rivett_nav_e($slide['heading']); ?></h1>

                                <p><?php echo rivett_nav_e($slide['text']); ?></p>

                                <a href="<?php echo rivett_nav_e($slide['cta_url']); ?>"
                                    class="cmn-btn banner-cta"><?php echo rivett_nav_e($slide['cta_label']); ?></a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <?php endforeach; ?>

      </div>

</section>


<?php if (!empty($category['intro'])) : $intro = $category['intro']; ?>
<!-- ============================= INTRO ============================= -->
<section class="rivett-padding rivett-cmn">
    <div class="container-md">
        <div class="row justify-content-center text-center">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 top-heading">
                <h2><?php echo $intro['heading']; ?></h2>
            </div>
            <div class="col-xxl-8 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                <?php foreach ((array) $intro['paragraphs'] as $paragraph) : ?>
                <p><?php echo $paragraph; ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<?php if (!empty($category['models'])) : $models = $category['models']; ?>
<!-- ============================= MODELS ============================= -->
<section class="rivett-padding rivett-cmn all-garage-doors-card-sec bg-grey-light">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-8 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 top-heading">
                <h2><?php echo $models['heading']; ?></h2>
            </div>
        </div>
        <div class="row card-list-row-grid">
            <?php foreach ($models['items'] as $model) : ?>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec">
                    <div class="garage-card">
                        <div class="garage-card-img">
                            <img src="<?php echo rivett_nav_e($model['img']); ?>"
                                width="810" height="398"
                                alt="<?php echo rivett_nav_e($model['alt']); ?>"
                                class="img-fluid" loading="lazy" decoding="async" />
                        </div>
                        <div class="garage-card-content">
                            <h3><?php echo rivett_nav_e($model['name']); ?></h3>
                            <ul>
                                <?php foreach ($model['specs'] as $spec) : ?>
                                    <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i><?php
                                        echo rivett_nav_e($spec); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php if (!empty($model['url'])) : ?>
                                <a href="<?php echo rivett_nav_e($model['url']); ?>"
                                    class="link-arrow">View More
                                    <span class="visually-hidden">about the
                                        <?php echo rivett_nav_e($model['name']); ?></span>
                                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>


<?php include __DIR__ . '/testimonial-section.php'; ?>

<?php include __DIR__ . '/location-mapping-sec.php'; ?>

<?php include __DIR__ . '/footer-cta.php'; ?>

<?php include dirname(__DIR__) . '/footer.php'; ?>
