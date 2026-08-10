<?php
/**
 * Traditional Garage Doors — the "By Door Type" category page.
 *
 * Built on the residential listing template
 * (Residential-Garage-Doors.php): the same hero slider,
 * the same .all-garage-doors-card-sec model grid, the same closing
 * sections. Only the copy and the five model cards change.
 *
 * This file sits three levels under the project root, so every include is
 * resolved from __DIR__ rather than relatively — PHP would otherwise look
 * for common-sections/ inside this folder. Asset and link paths in the
 * markup stay root-relative because header.php declares
 * <base href="/rivett/">.
 */

/* Overrides the sitewide defaults in header.php. */
$page_title       = 'Traditional Garage Doors | Stronger & Reliable | Rivett Architectural Hardware';
$page_description = 'Rivett supplies and installs the highest quality Canadian-made traditional garage doors, '
                  . 'with exceptional customer service across Ontario since 1977. Call 1 (905) 668-4455';

require __DIR__ . '/../../header.php';



/* =====================================================================
   HERO SLIDER — CONTENT SOURCE

   One entry per slide, in display order. Add or remove an entry and the
   carousel, the "1 of 4" slide labels and the loading hints all follow.

   Keys
     eyebrow    small caps line above the heading.
     heading    slide headline. 
     cta_label  button text.
     cta_url    button link.
     image      background image path.
     alt        image alt text. Leave '' for a purely decorative slide.
   ===================================================================== */

$hero_label = 'Traditional garage doors';

$hero_slides = [
    [
        'eyebrow'   => 'By Door Type',
        'heading'   => 'Traditional Garage Doors',
        'text'      => 'Stamped Ranch (long) or Colonial (short) patterns, in eight panel styles and a full range of colours — supplied, installed, and serviced by Rivett across Ontario.',
        'cta_label' => 'Get a Free Estimate',
        'cta_url'   => 'contact-us.php',
        'image'     => './src/images/Residental-banner-img.webp',
        'alt'       => 'Home with traditional-style Rivett garage doors installed',
    ],
    [
        'eyebrow'   => 'Landmark™',
        'heading'   => 'Premium Garage Doors',
        'text'      => 'A 2″ Neufoam™ polyurethane insulated garage door (R18), with 12 colour options and 8 panel styles available.',
        'cta_label' => 'View Product',
        'cta_url'   => 'residential-doors/by-door-type/traditional/premium-l200.php',
        'image'     => './src/images/Residental-banner-img.webp',
        'alt'       => '',
    ],
    [
        'eyebrow'   => 'Landmark™',
        'heading'   => 'Milestone™ Series',
        'text'      => 'Two-sided steel with 2″ polystyrene insulation (R10), in 7 panel styles and 11 colour options.',
        'cta_label' => 'View Product',
        'cta_url'   => 'residential-doors/by-door-type/traditional/milestone-series.php',
        'image'     => './src/images/Residental-banner-img.webp',
        'alt'       => '',
    ],
    [
        'eyebrow'   => 'Landmark™',
        'heading'   => "Grandview Garage Doors",
        'text'      => 'A 2″ door featuring an enlarged top section with exquisite XL windows, on the same Neufoam™ insulated panel (R18).',
        'cta_label' => 'View Product',
        'cta_url'   => 'residential-doors/by-door-type/traditional/grandview-l200gv.php',
        'image'     => './src/images/Residental-banner-img.webp',
        'alt'       => '',
    ],
];


/**
 * The five Traditional models, in the order the range is normally
 * presented. 'url' is omitted for the models that have no detail page
 * yet, and the card simply drops its "View More" link rather than
 * shipping a dead one — add the key when the page lands.
 */
$traditional_models = [
    [
        'name'  => 'Classic (L138)',
        'img'   => 'src/images/classic-l138.webp',
        'alt'   => 'Landmark Classic L138 insulated steel garage door',
        'url'   => 'residential-doors/by-door-type/traditional/classic-l138.php',
        'specs' => [
            '1 3/8″ Neufoam™ Polyurethane Insulated Garage Door (R12).',
            '12 Colour Options and 7 Panel Styles Available.',
        ],
    ],
    [
        'name'  => 'Premium (L200)',
        'img'   => 'src/images/premium-l200.webp',
        'alt'   => 'Landmark Premium L200 insulated steel garage door',
        'url'   => 'residential-doors/by-door-type/traditional/premium-l200.php',
        'specs' => [
            '2” Neufoam™ Polyurethane Insulated Garage Door (R18).',
            '12 Colour Options and 8 Panel Styles Available.',
        ],
    ],
    [
        'name'  => 'Grandview (L200GV)',
        'img'   => 'src/images/grandview-l200gv.webp',
        'alt'   => 'Landmark Grandview L200GV garage door with large dual-pane windows',
        'url'   => 'residential-doors/by-door-type/traditional/grandview-l200gv.php',
        'specs' => [
            '2” Neufoam™ Polyurethane Insulated Garage Door (R18).',
            'Featuring Large Dual-Pane Insulated Windows Providing Elegance to Your Home.',
            '12 Colour Options and 7 Panel Styles Available.',
        ],
    ],
    [
        'name'  => 'Milestone Series',
        'img'   => 'src/images/milestone-series.webp',
        'alt'   => 'Landmark Milestone Series polystyrene insulated garage door',
        'url'   => 'residential-doors/by-door-type/traditional/milestone-series.php',
        'specs' => [
            '2-Sided Steel With 2″ Polystyrene Insulation (R10).',
            '7 Panel Styles and 11 Colour Options Available.',
        ],
    ],
    [
        'name'  => 'Canton',
        'img'   => 'src/images/canton.webp',
        'alt'   => 'Canton polystyrene insulated garage door',
        'url'   => 'residential-doors/by-door-type/traditional/canton.php',
        'specs' => [
            'Polystyrene Insulated Garage Door (R6.6).',
            'Single or Double-Sided Steel Non-Insulated Garage Doors Also Available.',
            '2 Panel Style and 4 Colours Available.',
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
            foreach ($hero_slides as $hero_index => $slide):
                $is_first_slide = ($hero_index === 0);
            ?>
            <!-- Slide <?php echo $hero_index + 1; ?> -->
            <div class="banner-item">
                <article aria-roledescription="slide" aria-label="<?php echo $hero_index + 1; ?> of <?php echo $hero_total; ?>">
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

                                <a href="<?php echo rivett_nav_e($slide['cta_url']); ?>" class="cmn-btn banner-cta"><?php echo rivett_nav_e($slide['cta_label']); ?></a>
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
        <div class="row justify-content-center">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 top-heading">
                <h2>Traditional Garage Doors</h2>
            </div>
            <div class="col-xxl-8 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 text-center">
                <p>Rivett&rsquo;s Traditional garage doors feature stamped Ranch (long) or Colonial (short)
                    patterns. Panel styles include Raised Ranch, Raised Colonial, Recessed Grooved Ranch, Recessed
                    Grooved Colonial, Recessed Smooth Ranch and Mixed Panel. Traditional doors also feature Plank
                    and Flush panel styles.</p>

                <p>Our Traditional models include the 1 3/8&Prime; (R12)
                    <a href="residential-doors/by-door-type/traditional/classic-l138.php">Classic collection</a>,
                    2&Prime; (R18) <a href="residential-doors/by-door-type/traditional/premium-l200.php">Premium collection</a> and Grandview collection. The
                    Grandview model is a 2&Prime; door featuring an enlarged top section with exquisite XL windows.
                    These models all feature advanced Neufoam&trade; polyurethane insulation.</p>

                <p>We also offer the Milestone and Canton collections which feature polystyrene-insulated (R10 and
                    R6.6) or non-insulated options.</p>
            </div>
        </div>
    </div>
</section>


<!-- ============================= MODELS ============================= -->
<section class="rivett-padding rivett-cmn all-garage-doors-card-sec bg-grey-light">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-8 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 top-heading">
                <h2>Traditional Models Include</h2>
            </div>
        </div>
        <div class="row card-list-row-grid">
            <?php foreach ($traditional_models as $model) : ?>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec">
                    <div class="garage-card">
                        <div class="garage-card-img">
                            <img src="<?php echo htmlspecialchars($model['img'], ENT_QUOTES, 'UTF-8'); ?>"
                                width="810" height="398"
                                alt="<?php echo htmlspecialchars($model['alt'], ENT_QUOTES, 'UTF-8'); ?>"
                                class="img-fluid" loading="lazy" decoding="async" />
                        </div>
                        <div class="garage-card-content">
                            <h3><?php echo htmlspecialchars($model['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <ul>
                                <?php foreach ($model['specs'] as $spec) : ?>
                                    <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i><?php
                                        echo htmlspecialchars($spec, ENT_QUOTES, 'UTF-8'); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php if (!empty($model['url'])) : ?>
                                <a href="<?php echo htmlspecialchars($model['url'], ENT_QUOTES, 'UTF-8'); ?>"
                                    class="link-arrow">View More
                                    <span class="visually-hidden">about the
                                        <?php echo htmlspecialchars($model['name'], ENT_QUOTES, 'UTF-8'); ?></span>
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
