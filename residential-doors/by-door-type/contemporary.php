<?php
/**
 * Contemporary Garage Doors — the "By Door Type" category page.
 *
 * Built on the residential listing template
 * (residential-doors/Residential-Garage-Doors.php): the same data-driven
 * hero slider, the same .all-garage-doors-card-sec model grid, the same
 * closing sections. Only the copy and the model cards change.
 *
 * This file sits two levels under the project root, so every include is
 * resolved from __DIR__ rather than relatively — PHP would otherwise look
 * for common-sections/ inside this folder. Asset and link paths in the
 * markup stay root-relative because header.php declares
 * <base href="/rivett/">.
 *
 * NOTE ON THE HERO DATA: every string below is plain text with real
 * characters (™, ″, —), never HTML entities. rivett_nav_e() is
 * htmlspecialchars(), so an entity written here would be escaped a second
 * time and render literally as "&trade;" on the page.
 */

/* Overrides the sitewide defaults in header.php. */
$page_title       = 'Contemporary Garage Doors | Stronger & Reliable | Rivett Architectural Hardware';
$page_description = 'Rivett supplies and installs the highest quality Canadian-made contemporary garage doors, '
                  . 'with exceptional customer service across Ontario since 1977. Call 1 (905) 668-4455';

require __DIR__ . '/../../header.php';


/* =====================================================================
   HERO SLIDER — CONTENT SOURCE

   One entry per slide, in display order. Add or remove an entry and the
   carousel, the "1 of 3" slide labels and the loading hints all follow.

   Keys
     eyebrow    small caps line above the heading.
     heading    slide headline. 
     text       supporting paragraph.
     cta_label  button text.
     cta_url    button link.
     image      background image path.
     alt        image alt text. Leave '' for a purely decorative slide.
   ===================================================================== */

$hero_label = 'Contemporary garage doors';

$hero_slides = [
    [
        'eyebrow'   => 'By Door Type',
        'heading'   => 'Contemporary Garage Doors',
        'text'      => 'Arrange windows in a variety of configurations for a clean, modern face — supplied, installed, and serviced by Rivett across Ontario.',
        'cta_label' => 'Get a Free Estimate',
        'cta_url'   => 'contact-us.php',
        'image'     => 'src/images/Residental-banner-img.webp',
        'alt'       => 'Home with contemporary-style Rivett garage doors installed',
    ],
    [
        'eyebrow'   => 'Landmark™',
        'heading'   => 'Premium Contemporary Garage Doors',
        'text'      => 'A 2″ Neufoam™ polyurethane insulated garage door (R18) with customizable window placement for a modern look.',
        'cta_label' => 'View Product',
        'cta_url'   => 'residential-doors/by-door-type/contemporary-modern/premium-contemporary.php',
        'image'     => 'src/images/Residental-banner-img.webp',
        'alt'       => '',
    ],
    [
        'eyebrow'   => 'Landmark™',
        'heading'   => 'Classic Contemporary Garage Doors',
        'text'      => 'The 1 3/8″ Classic panel (R12) with the option to configure the door with creative and modern window layouts.',
        'cta_label' => 'View Product',
        'cta_url'   => 'residential-doors/by-door-type/contemporary-modern/classic-contemporary.php',
        'image'     => 'src/images/Residental-banner-img.webp',
        'alt'       => '',
    ],
];


/**
 * The Contemporary models. The reference presents Classic and Premium
 * Contemporary as one combined card with two "see details" buttons; they
 * are split here because the residential listing page already shows them
 * as separate cards, and because a card in this design system carries one
 * link — splitting gives each model its own working entry point.
 */
$contemporary_models = [
    [
        'name'  => 'Classic Contemporary (L138C)',
        'img'   => 'src/images/classic-contemporary-l138c.webp',
        'alt'   => 'Landmark Classic Contemporary L138C garage door with a modern window layout',
        'url'   => 'residential-doors/by-door-type/contemporary-modern/classic-contemporary.php',
        'specs' => [
            '1 3/8″ (R12) Neufoam™ Polyurethane Insulated Garage Door.',
            'Features Customizable Window Placement for a Modern Look.',
            '12 Colour Options and 2 Panel Styles Available.',
        ],
    ],
    [
        'name'  => 'Premium Contemporary (L200C)',
        'img'   => 'src/images/premium-contemporary-l200c.webp',
        'alt'   => 'Landmark Premium Contemporary L200C garage door with full-width windows',
        'url'   => 'residential-doors/by-door-type/contemporary-modern/premium-contemporary.php',
        'specs' => [
            '2″ (R18) Neufoam™ Polyurethane Insulated Garage Door.',
            'Features Customizable Window Placement for a Modern Look.',
            '12 Colour Options and 2 Panel Styles Available.',
        ],
    ],
    [
        'name'  => 'Rockwood Contemporary (L200RWC)',
        'img'   => 'src/images/contemporary-rockwood-l200rw.webp',
        'alt'   => 'Landmark Contemporary Rockwood L200RW cedar garage door',
        'url'   => 'residential-doors/by-door-type/custom-wood-door/contemporary-rockwood.php',
        'specs' => [
            '2″ Neufoam™ Polyurethane Garage Door (R19).',
            'Features 1″ Cedar Board Applied to 2″ Landmark Panel.',
            'Customizable Colours and Designs Available.',
        ],
    ],
];
?>

<!-- ============================= HERO ============================= -->

<section class="hero banner-sec sevice-page-banner residental-page-banner" aria-labelledby="hero-title">
      <div id="bannerSlider" class="owl-carousel banner-Slider" role="region"
            aria-roledescription="carousel" aria-label="<?php echo rivett_nav_e($hero_label); ?>">

            <?php
            $hero_total = count($hero_slides);
            foreach ($hero_slides as $hero_index => $slide) :
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


<!-- ============================= INTRO ============================= -->
<section class="rivett-padding rivett-cmn">
    <div class="container-md">
        <div class="row justify-content-center text-center">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 top-heading">
                <h2>Contemporary Garage Doors</h2>
            </div>
            <div class="col-xxl-8 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                <p>Rivett&rsquo;s Contemporary garage door models allow the homeowner to arrange windows in a
                    variety of configurations.</p>

                <p>We offer the
                    <a href="residential-doors/by-door-type/contemporary-modern/classic-contemporary.php">Classic
                    Contemporary</a> (1 3/8&Prime; &ndash; R12) and
                    <a href="residential-doors/by-door-type/contemporary-modern/premium-contemporary.php">Premium
                    Contemporary</a> (2&Prime; &ndash; R18) collections. Both doors are insulated with
                    Neufoam&trade; polyurethane.</p>
            </div>
        </div>
    </div>
</section>


<!-- ============================= MODELS ============================= -->
<section class="rivett-padding rivett-cmn all-garage-doors-card-sec bg-grey-light">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-8 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 top-heading">
                <h2>Contemporary Models Include</h2>
            </div>
        </div>
        <div class="row card-list-row-grid">
            <?php foreach ($contemporary_models as $model) : ?>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec">
                    <div class="garage-card">
                        <div class="garage-card-img">
                            <img src="<?php echo rivett_nav_e($model['img']); ?>" width="810" height="398"
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
                                <a href="<?php echo rivett_nav_e($model['url']); ?>" class="link-arrow">View More
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




<?php include __DIR__ . '/../../common-sections/testimonial-section.php'; ?>

<?php include __DIR__ . '/../../common-sections/location-mapping-sec.php'; ?>

<?php include __DIR__ . '/../../common-sections/footer-cta.php'; ?>

<?php include __DIR__ . '/../../footer.php'; ?>
