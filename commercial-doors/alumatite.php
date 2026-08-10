<?php
/**
 * Alumatite™ — the aluminium series page under Commercial Overhead Doors.
 *
 * Built on the commercial listing template (commercial-overhead-doors.php):
 * the same hero slider, the same .all-garage-doors-card-sec model grid and
 * the same closing sections. The specification tabs reuse the .door-options
 * component from Product-page.php, so the series detail reads as one system
 * with the residential product pages rather than a second layout.
 *
 * This file sits one level under the project root, so every include is
 * resolved from __DIR__ — PHP would otherwise look for common-sections/
 * inside this folder. Asset and link paths in the markup stay root-relative
 * because header.php declares <base href="/rivett/">.
 *
 * NOTE ON THE DATA ARRAYS: every string is plain text with real characters
 * (™, ″, —), never HTML entities. rv_attr() is htmlspecialchars(), so an
 * entity written here would be escaped a second time and render literally.
 */

/* Overrides the sitewide defaults in header.php. */
$page_title       = 'Alumatite™ Aluminium Overhead Doors | Commercial | Rivett Architectural Hardware';
$page_description = 'Alumatite sectional aluminium overhead doors from Rivett — maximum light and visibility, '
                  . 'extruded aluminum rails and stiles, A175, A200 and A300 models. Call 1 (905) 668-4455';

/* The Door Options tabs collapse to an accordion below 992px; the handler
   lives in product.js and is guarded, so it is inert on the sections this
   page does not have. */
$page_scripts = ['src/js/product.js'];

require __DIR__ . '/../header.php';

require_once __DIR__ . '/../common-sections/product-options.php';
require_once __DIR__ . '/../common-sections/commercial-hardware.php';


/* =====================================================================
   HERO SLIDER

   One entry per slide, in display order. Add or remove an entry and the
   carousel, the "1 of 4" slide labels and the loading hints all follow.
   Only the first slide carries the page <h1> and the #hero-title the
   section is labelled by; the rest render as <h2.banner-heading>, which
   is styled identically.
   ===================================================================== */

$hero_label = 'Alumatite aluminium overhead doors';

$hero_slides = [
    [
        'eyebrow'   => 'Commercial Overhead Doors',
        'heading'   => 'Alumatite™ Aluminium Overhead Doors',
        'text'      => 'Sectional aluminium overhead doors designed to provide an attractive and practical solution when maximum light and/or visibility is required — supplied, installed, and serviced by Rivett across Ontario.',
        'cta_label' => 'Get a Free Estimate',
        'cta_url'   => 'contact-us.php',
        'image'     => 'src/images/commercial-banner-img.webp',
        'alt'       => 'Commercial building with Rivett aluminium overhead doors installed',
    ],
    [
        'eyebrow'   => 'Built For Heavy Use',
        'heading'   => 'Extruded Aluminum Construction',
        'text'      => 'Built to withstand heavy use and high traffic using extruded aluminum alloy rails and stiles with a full width integral horizontal reinforcing truss at each pair of meeting rails.',
        'cta_label' => 'Talk To Our Team',
        'cta_url'   => 'contact-us.php',
        'image'     => 'src/images/commercial-banner-img.webp',
        'alt'       => '',
    ],
    [
        'eyebrow'   => 'Finish & Glazing',
        'heading'   => 'Configured Around Your Light',
        'text'      => 'Choose from a variety of finish and glazing options, or configure your door with Thermatite panels for extra strength and additional energy savings.',
        'cta_label' => 'Request Specifications',
        'cta_url'   => 'contact-us.php',
        'image'     => 'src/images/commercial-banner-img.webp',
        'alt'       => '',
    ],
    [
        'eyebrow'   => 'Three Models',
        'heading'   => 'A175, A200 and A300',
        'text'      => 'Highest quality hardware components provide years of dependable operation, backed by Rivett service across Durham Region, the GTA, Kingston, and Eastern Ontario.',
        'cta_label' => 'Book a Service Call',
        'cta_url'   => 'contact-us.php',
        'image'     => 'src/images/commercial-banner-img.webp',
        'alt'       => '',
    ],
];


/** The three Alumatite models, in the order the range is presented. */
$alumatite_models = [
    [
        'name' => 'A175',
        'img'  => 'src/images/commercial/alumatite-a175.webp',
        'alt'  => 'Alumatite A175 sectional aluminium overhead door',
        'url'  => 'contact-us.php',
    ],
    [
        'name' => 'A200',
        'img'  => 'src/images/commercial/alumatite-a200.webp',
        'alt'  => 'Alumatite A200 sectional aluminium overhead door',
        'url'  => 'contact-us.php',
    ],
    [
        'name' => 'A300',
        'img'  => 'src/images/commercial/alumatite-a300.webp',
        'alt'  => 'Alumatite A300 sectional aluminium overhead door',
        'url'  => 'contact-us.php',
    ],
];


/**
 * Specification tabs. The keys drive the tab/panel ids, so a tab and its
 * panel can never point at each other incorrectly.
 */
$spec_tabs = [
    'specifications' => 'Product Specifications',
    'finish-glazing' => 'Finish & Glazing',
    'hardware'       => 'Standard / Optional Hardware',
    'additional'     => 'Additional Information',
    'warranty'       => 'Warranty',
];

/** Optional hardware available on the Alumatite series. */
$alumatite_optional_hardware = [
    'Exhaust port: 3″ (76 mm) / 4″ (102mm) / 5″ (127mm) diameter',
    'Plywood Kick Panel: 3/8″ (9.5mm) thick plywood covered on both sides with 0.032″ (0.8mm) aluminum or 0.037″ (0.94mm) embossed steel sheets',
];

/* Alumatite carries the full hardware package including the step plate. */
$alumatite_hardware_media = rv_hardware_media(
    $RIVETT_COMMERCIAL_HARDWARE_MEDIA,
    ['hinge', 'track', 'rollers', 'counter-balance', 'step-plate', 'exhaust-port']
);
?>

<!-- ============================= HERO ============================= -->

<section class="hero banner-sec sevice-page-banner residental-page-banner" aria-labelledby="hero-title">
    <div id="bannerSlider" class="owl-carousel banner-Slider" role="region"
        aria-roledescription="carousel" aria-label="<?php echo rv_attr($hero_label); ?>">

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
                    <img src="<?php echo rv_attr($slide['image']); ?>" width="1514" height="900"
                        alt="<?php echo rv_attr($slide['alt']); ?>" class="img-fluid"
                        <?php echo $is_first_slide ? 'fetchpriority="high"' : 'loading="lazy"'; ?> decoding="async" />
                    <span class="banner-overlay" aria-hidden="true"></span>
                </div>
                <div class="content-sec">
                    <div class="container-md">
                        <div class="banner-text">
                            <p class="banner-eyebrow"><span><?php echo rv_attr($slide['eyebrow']); ?></span></p>

                            <?php if ($is_first_slide) : ?>
                                <h1 id="hero-title" class="banner-heading"><?php
                                    echo rv_attr($slide['heading']); ?></h1>
                            <?php else : ?>
                                <h2 class="banner-heading"><?php echo rv_attr($slide['heading']); ?></h2>
                            <?php endif; ?>

                            <p><?php echo rv_attr($slide['text']); ?></p>

                            <a href="<?php echo rv_attr($slide['cta_url']); ?>"
                                class="cmn-btn banner-cta"><?php echo rv_attr($slide['cta_label']); ?></a>
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
                <h2>Alumatite&trade;</h2>
                <p class="rivett-p section-intro">Sectional Aluminium Overhead Doors</p>
            </div>
            <div class="col-xxl-8 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                <p>Available through Rivett, Alumatite Door Systems are designed to provide an attractive and
                    practical solution when maximum light and/or visibility is required. These garage doors are
                    built to withstand heavy use and high traffic using extruded aluminum alloy rails and stiles
                    with a full width integral horizontal reinforcing truss at each pair of meeting rails. Highest
                    quality hardware components provide years of dependable operation. Choose from a variety of
                    finish and glazing options or configure your door with
                    <a href="commercial-doors/thermatite.php">Thermatite</a> panels for extra strength and
                    additional energy savings.</p>
            </div>
        </div>
    </div>
</section>


<!-- ============================= MODELS ============================= -->
<section class="rivett-padding rivett-cmn all-garage-doors-card-sec bg-grey-light">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-8 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 top-heading">
                <h2>Alumatite Models Include</h2>
            </div>
        </div>
        <div class="row card-list-row-grid">
            <?php foreach ($alumatite_models as $model) : ?>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec">
                    <div class="garage-card">
                        <div class="garage-card-img">
                            <img src="<?php echo rv_attr($model['img']); ?>" width="810" height="398"
                                alt="<?php echo rv_attr($model['alt']); ?>"
                                class="img-fluid" loading="lazy" decoding="async" />
                        </div>
                        <div class="garage-card-content">
                            <h3><?php echo rv_attr($model['name']); ?></h3>
                            <a href="<?php echo rv_attr($model['url']); ?>" class="link-arrow">Request Specifications
                                <span class="visually-hidden">for the Alumatite
                                    <?php echo rv_attr($model['name']); ?></span>
                                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ============================= SPECIFICATIONS ============================= -->
<section class="door-options-sec rivett-padding rivett-cmn">
    <div class="container-md">

        <div class="row">
            <div class="col-12 top-heading">
                <h2>Alumatite Door Systems</h2>
            </div>
        </div>

        <div class="row door-options-row">

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 left-side">
                <div class="rv-tabs door-options-tabs" role="tablist" aria-orientation="vertical"
                    aria-label="Alumatite specifications">
                    <?php $tab_index = 0; foreach ($spec_tabs as $key => $label) : $is_first = ($tab_index === 0); ?>
                        <button type="button"
                            class="rv-tab<?php echo $is_first ? ' active' : ''; ?>"
                            role="tab"
                            id="spec-tab-<?php echo rv_attr($key); ?>"
                            data-tab="spec-<?php echo rv_attr($key); ?>"
                            aria-controls="spec-<?php echo rv_attr($key); ?>"
                            aria-selected="<?php echo $is_first ? 'true' : 'false'; ?>"
                            tabindex="<?php echo $is_first ? '0' : '-1'; ?>">
                            <span><?php echo rv_attr($label); ?></span>
                            <img src="./src/images/tabbing-sec-arrow.webp" alt="" class="img-fluid">
                        </button>
                    <?php $tab_index++; endforeach; ?>
                </div>
            </div>

            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12 right-side">

                <!-- Product Specifications -->
                <div class="rv-tab-panel active" id="spec-specifications" role="tabpanel"
                    aria-labelledby="spec-tab-specifications" tabindex="0">
                    <h3>A175, A200 &amp; A300 Product Specifications</h3>
                    <img src="src/images/commercial/alumatite-specifications-chart.webp" width="1534" height="713"
                        alt="Alumatite A175, A200 and A300 product specification chart covering section dimensions, opening widths, framing and finishes"
                        class="img-fluid" loading="lazy" decoding="async">
                    <p class="door-options-note">*Ask us for the full specification sheet for the model you are
                        specifying &mdash; we will send it with your quote.</p>
                </div>

                <!-- Finish & Glazing -->
                <div class="rv-tab-panel" id="spec-finish-glazing" role="tabpanel"
                    aria-labelledby="spec-tab-finish-glazing" tabindex="0" hidden>
                    <h3>Finish &amp; Glazing (A175, A200, A300)</h3>
                    <img src="src/images/commercial/alumatite-finish-glazing.webp" width="1242" height="845"
                        alt="Alumatite finish and glazing options for the A175, A200 and A300 models"
                        class="img-fluid" loading="lazy" decoding="async">
                    <p class="door-options-note">*Finishes shown are a guide only. Ask us for a physical sample
                        before you choose &mdash; screen colours vary.</p>
                </div>

                <!-- Standard / Optional Hardware -->
                <div class="rv-tab-panel" id="spec-hardware" role="tabpanel"
                    aria-labelledby="spec-tab-hardware" tabindex="0" hidden>
                    <h3>Standard Hardware</h3>
                    <?php rv_render_option_cards($alumatite_hardware_media); ?>
                    <?php rv_render_hardware_list($RIVETT_COMMERCIAL_HARDWARE); ?>

                    <h3>Optional Hardware</h3>
                    <ul class="door-options-list">
                        <?php foreach ($alumatite_optional_hardware as $option) : ?>
                            <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                                <span><?php echo rv_attr($option); ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Additional Information -->
                <div class="rv-tab-panel" id="spec-additional" role="tabpanel"
                    aria-labelledby="spec-tab-additional" tabindex="0" hidden>
                    <h3>Additional Information</h3>
                    <p>Detailed specifications per model &mdash; including CAD files, SpecWizards&reg; and LEED
                        credit information &mdash; are available on request. Tell us the model and the opening you
                        are working to and we will send the documentation across.</p>
                    <a href="contact-us.php" class="cmn-btn">Request Documentation</a>
                </div>

                <!-- Warranty -->
                <div class="rv-tab-panel" id="spec-warranty" role="tabpanel"
                    aria-labelledby="spec-tab-warranty" tabindex="0" hidden>
                    <h3>Warranty</h3>
                    <p>Every Alumatite door supplied by Rivett is covered by the manufacturer's written warranty
                        for the A175, A200 and A300 models, and installed by our own factory-trained technicians.</p>
                    <img src="src/images/commercial/alumatite-warranty-cover.webp" width="241" height="304"
                        alt="Alumatite A175, A200 and A300 warranty document cover"
                        class="img-fluid" loading="lazy" decoding="async">
                    <p class="door-options-note">*Full warranty terms are supplied with your quote. Get in touch if
                        you need them ahead of time.</p>
                </div>

            </div>

        </div>
    </div>
</section>


<?php include __DIR__ . '/../common-sections/testimonial-section.php'; ?>

<?php include __DIR__ . '/../common-sections/location-mapping-sec.php'; ?>

<?php include __DIR__ . '/../common-sections/footer-cta.php'; ?>

<?php include __DIR__ . '/../footer.php'; ?>
