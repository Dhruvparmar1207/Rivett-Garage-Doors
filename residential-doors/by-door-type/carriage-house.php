<?php
/**
 * Carriage House Garage Doors — the "By Door Type" category page.
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
 * It sits alongside the carriage-house/ FOLDER that holds the four model
 * pages; a file and a directory of the same stem coexist happily, and the
 * .php extension keeps the URLs unambiguous.
 *
 * NOTE ON THE HERO DATA: every string below is plain text with real
 * characters (™, ″, —), never HTML entities. rivett_nav_e() is
 * htmlspecialchars(), so an entity written here would be escaped a second
 * time and render literally as "&trade;" on the page.
 */

/* Overrides the sitewide defaults in header.php. */
$page_title       = 'Carriage House Garage Doors | Stronger & Reliable | Rivett Architectural Hardware';
$page_description = 'Rivett supplies and installs the highest quality Canadian-made carriage house garage doors, '
                  . 'with exceptional customer service across Ontario since 1977. Call 1 (905) 668-4455';

require __DIR__ . '/../../header.php';


/* =====================================================================
   HERO SLIDER — CONTENT SOURCE

   One entry per slide, in display order. Add or remove an entry and the
   carousel, the "1 of 4" slide labels and the loading hints all follow.

   Keys
     eyebrow    small caps line above the heading.
     heading    slide headline. 
     text       supporting paragraph.
     cta_label  button text.
     cta_url    button link.
     image      background image path.
     alt        image alt text. Leave '' for a purely decorative slide.
   ===================================================================== */

$hero_label = 'Carriage house garage doors';

$hero_slides = [
    [
        'eyebrow'   => 'By Door Type',
        'heading'   => 'Carriage House Garage Doors',
        'text'      => 'A unique rural aesthetic in overlay boards, recessed inlays or custom cedar — supplied, installed, and serviced by Rivett across Ontario.',
        'cta_label' => 'Get a Free Estimate',
        'cta_url'   => 'contact-us.php',
        'image'     => 'src/images/Residental-banner-img.webp',
        'alt'       => 'Home with carriage house style Rivett garage doors installed',
    ],
    [
        'eyebrow'   => 'Landmark™',
        'heading'   => 'Briarcrest Garage Doors',
        'text'      => 'A 2″ (R18) door using a Recessed Smooth Ranch panel and inlays to create a variety of Carriage House patterns.',
        'cta_label' => 'View Product',
        'cta_url'   => 'residential-doors/by-door-type/carriage-house/briarcrest.php',
        'image'     => 'src/images/Residental-banner-img.webp',
        'alt'       => '',
    ],
    [
        'eyebrow'   => 'Landmark™',
        'heading'   => 'Echo Ridge Garage Doors',
        'text'      => 'Fibrex® overlay boards on a Neufoam™ polyurethane insulated panel, in a four-section 1 3/8″ door or the three-section 2″ XL.',
        'cta_label' => 'View Product',
        'cta_url'   => 'residential-doors/by-door-type/carriage-house/echo-ridge.php',
        'image'     => 'src/images/Residental-banner-img.webp',
        'alt'       => '',
    ],
    [
        'eyebrow'   => 'Landmark™',
        'heading'   => 'Rockwood Garage Doors',
        'text'      => 'Customizable cedar overlays creating sophisticated style and extraordinary craftsmanship.',
        'cta_label' => 'View Product',
        'cta_url'   => 'residential-doors/by-door-type/custom-wood-door/rockwood.php',
        'image'     => 'src/images/Residental-banner-img.webp',
        'alt'       => '',
    ],
];


/** The four Carriage House models, in the order the range is presented. */
$carriage_models = [
    [
        'name'  => 'Echo Ridge (L138ER)',
        'img'   => 'src/images/echo-ridge-l138er.webp',
        'alt'   => 'Landmark Echo Ridge L138ER carriage house garage door',
        'url'   => 'residential-doors/by-door-type/carriage-house/echo-ridge.php',
        'specs' => [
            '1 3/8″ Neufoam™ Polyurethane Insulated Carriage House Garage Door (R12).',
            'Four-Section Door With Carriage House With Fibrex® Overlay Boards.',
            '9 Colour Options, 2 Overlay Colour Options and 5 Panel Styles Available.',
        ],
    ],
    [
        'name'  => 'Briarcrest (L200BC)',
        'img'   => 'src/images/briarcrest-l200bc.webp',
        'alt'   => 'Landmark Briarcrest L200BC carriage house garage door',
        'url'   => 'residential-doors/by-door-type/carriage-house/briarcrest.php',
        'specs' => [
            '2″ Neufoam™ Polyurethane Insulated Carriage House Garage Door (R18).',
            'Recessed Panel Design With Inlays to Provide a Carriage House Look.',
            '9 Colour Options and 5 Panel Styles Available.',
        ],
    ],
    [
        'name'  => 'Echo Ridge XL (L200ERX)',
        'img'   => 'src/images/echo-ridge-xl-l200erx.webp',
        'alt'   => 'Landmark Echo Ridge XL L200ERX three-section carriage house garage door',
        'url'   => 'residential-doors/by-door-type/carriage-house/echo-ridge-xl.php',
        'specs' => [
            '2″ Neufoam™ Polyurethane Insulated Carriage House Garage Door (R18).',
            'Three-Section Door With Carriage House With Fibrex® Overlay Boards.',
            '6 Panel Styles Available.',
        ],
    ],
    [
        'name'  => 'Rockwood (L200RW)',
        'img'   => 'src/images/rockwood-l200rw.webp',
        'alt'   => 'Landmark Rockwood L200RW cedar carriage house garage door',
        'url'   => 'residential-doors/by-door-type/custom-wood-door/rockwood.php',
        'specs' => [
            '2″ Neufoam™ Polyurethane Insulated Carriage House Garage Door (R19).',
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
                <h2>Carriage House Garage Doors</h2>
            </div>
            <div class="col-xxl-8 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                <p>Rivett&rsquo;s Carriage House models all feature a unique rural aesthetic.</p>

                <p>The 2&Prime; (R18)
                    <a href="residential-doors/by-door-type/carriage-house/briarcrest.php">Briarcrest</a> features
                    a Recessed Smooth Ranch panel and inlays to create a variety of Carriage House patterns.</p>

                <p>Our <a href="residential-doors/by-door-type/carriage-house/echo-ridge.php">Echo Ridge</a>
                    (1 3/8&Prime; &ndash; R12) and our Three-Section
                    <a href="residential-doors/by-door-type/carriage-house/echo-ridge-xl.php">Echo Ridge XL</a>
                    (2&Prime; &ndash; R18) feature Fibrex&reg; Overlay boards on our Neufoam&trade; Polyurethane
                    insulated Garage Door panel.</p>

                <p>The elegant
                    <a href="residential-doors/by-door-type/custom-wood-door/rockwood.php">Rockwood</a>
                    (R19) Collection features customizable Cedar Overlay creating Sophisticated Style and
                    Extraordinary Craftsmanship.</p>
            </div>
        </div>
    </div>
</section>


<!-- ============================= MODELS ============================= -->
<section class="rivett-padding rivett-cmn all-garage-doors-card-sec bg-grey-light">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-8 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 top-heading">
                <h2>Carriage House Models Include</h2>
            </div>
        </div>
        <div class="row card-list-row-grid">
            <?php foreach ($carriage_models as $model) : ?>
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
