<?php
/**
 * Rolltite™ — the rolling steel page under Commercial Overhead Doors.
 *
 * Built on the commercial listing template (commercial-overhead-doors.php):
 * the same hero slider and the same .all-garage-doors-card-sec model grid.
 * The specification tabs reuse the .door-options component from
 * Product-page.php.
 *
 * Rolltite is a rolling range rather than a sectional one, so it carries no
 * Standard Hardware tab — common-sections/commercial-hardware.php describes
 * the sectional package and is deliberately not included here.
 *
 * This file sits one level under the project root, so every include is
 * resolved from __DIR__. Asset and link paths in the markup stay
 * root-relative because header.php declares <base href="/rivett/">.
 *
 * NOTE ON THE DATA ARRAYS: every string is plain text with real characters
 * (™, ″, —), never HTML entities. rv_attr() is htmlspecialchars(), so an
 * entity written here would be escaped a second time and render literally.
 */

/* Overrides the sitewide defaults in header.php. */
$page_title       = 'Rolltite™ Rolling Steel Doors, Shutters & Grilles | Commercial | Rivett Architectural Hardware';
$page_description = 'Rolltite rolling steel doors, shutters and grilles from Rivett — aluminum, steel and stainless '
                  . 'steel, R300 through R800, including fire doors. Call 1 (905) 668-4455';

$page_scripts = ['src/js/product.js'];

require __DIR__ . '/../header.php';

require_once __DIR__ . '/../common-sections/product-options.php';


/* =====================================================================
   HERO SLIDER — see commercial-doors/alumatite.php for the key reference.
   Only the first slide carries the page <h1> and the #hero-title the
   section is labelled by.
   ===================================================================== */

$hero_label = 'Rolltite rolling steel doors, shutters and grilles';

$hero_slides = [
    [
        'eyebrow'   => 'Commercial Overhead Doors',
        'heading'   => 'Rolltite™ Rolling Steel Doors, Shutters and Grilles',
        'text'      => 'Made from aluminum, steel, or stainless steel available in a variety of gauges, with a proven track record for durability — supplied, installed, and serviced by Rivett across Ontario.',
        'cta_label' => 'Get a Free Estimate',
        'cta_url'   => 'contact-us.php',
        'image'     => 'src/images/commercial-banner-img.webp',
        'alt'       => 'Commercial building with a Rivett rolling steel door installed',
    ],
    [
        'eyebrow'   => 'Where They Fit',
        'heading'   => 'Ideal For Every Application',
        'text'      => 'Ideal for all types of applications, including industrial, agricultural, commercial, warehouses, retail stores, pharmacies, and schools.',
        'cta_label' => 'Talk To Our Team',
        'cta_url'   => 'contact-us.php',
        'image'     => 'src/images/commercial-banner-img.webp',
        'alt'       => '',
    ],
    [
        'eyebrow'   => 'Safe And Secure',
        'heading'   => 'Built For Demanding Environments',
        'text'      => 'They will perform in the most demanding environments, and are safe and secure enough to protect against theft or vandalism.',
        'cta_label' => 'Request Specifications',
        'cta_url'   => 'contact-us.php',
        'image'     => 'src/images/commercial-banner-img.webp',
        'alt'       => '',
    ],
    [
        'eyebrow'   => 'Seven Models',
        'heading'   => 'R300 Through R800',
        'text'      => 'Rolling steel doors, fire doors, shutters and grilles requiring minimal maintenance, easy to install, and built to last.',
        'cta_label' => 'Book a Service Call',
        'cta_url'   => 'contact-us.php',
        'image'     => 'src/images/commercial-banner-img.webp',
        'alt'       => '',
    ],
];


/** The seven Rolltite models, in the order the range is presented. */
$rolltite_models = [
    [
        'name'  => 'R300 Rolling Steel Doors',
        'img'   => 'src/images/commercial/rolltite-r300.webp',
        'alt'   => 'Rolltite R300 rolling steel door',
        'url'   => 'contact-us.php',
        'specs' => [
            'Gauges: 24 and 22 gauge',
            'Profile: Flat or Curved',
            'Max door size: 12 feet by 12 feet',
            'Finishes: 5 Standard',
        ],
    ],
    [
        'name'  => 'R400 Rolling Steel Doors',
        'img'   => 'src/images/commercial/rolltite-r400.webp',
        'alt'   => 'Rolltite R400 rolling steel door',
        'url'   => 'contact-us.php',
        'specs' => [
            'Gauges: 24, 22, 20 and 18 gauge',
            'Profile: Flat or Curved',
            'Max door size: 40 feet by 30 feet',
            'Finishes: 6 Standard',
        ],
    ],
    [
        'name'  => 'R500 Rolling Steel Fire Doors',
        'img'   => 'src/images/commercial/rolltite-r500.webp',
        'alt'   => 'Rolltite R500 rolling steel fire door',
        'url'   => 'contact-us.php',
        'specs' => [
            'Gauges: 22, 20, 18',
            'Features 165° fusible links for safe emergency closing.',
            'Max door size: 30′ x 24′',
            'Finishes: 4 Standard',
        ],
    ],
    [
        'name'  => 'R550 Rolling Fire Shutters',
        'img'   => 'src/images/commercial/rolltite-r550.webp',
        'alt'   => 'Rolltite R550 rolling fire shutter',
        'url'   => 'contact-us.php',
        'specs' => [
            'Gauges: 22 gauge',
            'Slates: Galvanized steel or stainless steel',
            'Max door size: 12’ x 8’',
            'Finishes: 4 Standard',
        ],
    ],
    [
        'name'  => 'R600 Insulated Rolling Steel Doors',
        'img'   => 'src/images/commercial/rolltite-r600.webp',
        'alt'   => 'Rolltite R600 insulated rolling steel door',
        'url'   => 'contact-us.php',
        'specs' => [
            'Gauges: 24, 22, 20 and 18 gauge',
            'Insulation: 5/8” polystyrene insulation',
            'Max door size: 40’ x 16’ to 28’ x 26’ (varies by model)',
            'Finishes: 5 Standard',
        ],
    ],
    [
        'name'  => 'R700 Rolling Shutters',
        'img'   => 'src/images/commercial/rolltite-r700.webp',
        'alt'   => 'Rolltite R700 rolling shutter',
        'url'   => 'contact-us.php',
        'specs' => [
            'Gauges: 24 and 22 gauge',
            'Slats: Stainless Steel or Aluminum',
            'Max door size: 14’-4” x 10’-4”',
            'Finishes: 5 Standard',
        ],
    ],
    [
        'name'  => 'R800 Rolling Grilles',
        'img'   => 'src/images/commercial/rolltite-r800.webp',
        'alt'   => 'Rolltite R800 rolling grille',
        'url'   => 'contact-us.php',
        'specs' => [
            '5 Grille styles available',
            'Extruded Aluminum bottom bars and guides.',
            'Max door size: 24′ x 12′-6″',
        ],
    ],
];


/**
 * Specification tabs. The keys drive the tab/panel ids, so a tab and its
 * panel can never point at each other incorrectly.
 */
$spec_tabs = [
    'finish'     => 'Finish',
    'additional' => 'Additional Information',
    'warranty'   => 'Warranty',
];

/** The six standard finishes. ArmorBrite is a coating programme, so it
    is described below the grid rather than shown as a swatch. */
$rolltite_finishes = [
    ['name' => 'White Topcoat',   'img' => 'src/images/commercial/rolltite-finish-white-topcoat.webp'],
    ['name' => 'Gray Topcoat',    'img' => 'src/images/commercial/rolltite-finish-gray-topcoat.webp'],
    ['name' => 'Tan Topcoat',     'img' => 'src/images/commercial/rolltite-finish-tan-topcoat.webp'],
    ['name' => 'Galvanized',      'img' => 'src/images/commercial/rolltite-finish-galvanized.webp'],
    ['name' => 'Stainless Steel', 'img' => 'src/images/commercial/rolltite-finish-stainless-steel.webp'],
    ['name' => 'Aluminum',        'img' => 'src/images/commercial/rolltite-finish-aluminum.webp'],
];
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
                <h2>Rolltite&trade;</h2>
                <p class="rivett-p section-intro">Rolling Steel Doors, Shutters and Grilles</p>
            </div>
            <div class="col-xxl-8 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                <p>Available through Rivett, Rolltite Door Systems are made from aluminum, steel, or stainless steel
                    available in a variety of gauges. With a proven track record for durability, these garage doors
                    are ideal for all types of applications, including industrial, agricultural, commercial,
                    warehouses, retail stores, pharmacies, and schools. They will perform in the most demanding
                    environments, and are safe and secure enough to protect against theft or vandalism. Our rolling
                    steel doors, shutters and grilles require minimal maintenance, are easy to install, and are a
                    perfect fit for your needs. Rolltite doors are built to last.</p>
            </div>
        </div>
    </div>
</section>


<!-- ============================= MODELS ============================= -->
<section class="rivett-padding rivett-cmn all-garage-doors-card-sec bg-grey-light">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-8 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 top-heading">
                <h2>Rolltite Models Include</h2>
            </div>
        </div>
        <div class="row card-list-row-grid">
            <?php foreach ($rolltite_models as $model) : ?>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec">
                    <div class="garage-card">
                        <div class="garage-card-img">
                            <img src="<?php echo rv_attr($model['img']); ?>" width="596" height="376"
                                alt="<?php echo rv_attr($model['alt']); ?>"
                                class="img-fluid" loading="lazy" decoding="async" />
                        </div>
                        <div class="garage-card-content">
                            <h3><?php echo rv_attr($model['name']); ?></h3>
                            <ul>
                                <?php foreach ($model['specs'] as $spec) : ?>
                                    <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i><?php
                                        echo rv_attr($spec); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="<?php echo rv_attr($model['url']); ?>" class="link-arrow">Request Specifications
                                <span class="visually-hidden">for the
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
                <h2>Rolltite Door Systems</h2>
            </div>
        </div>

        <div class="row door-options-row">

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 left-side">
                <div class="rv-tabs door-options-tabs" role="tablist" aria-orientation="vertical"
                    aria-label="Rolltite specifications">
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

                <!-- Finish -->
                <div class="rv-tab-panel active" id="spec-finish" role="tabpanel"
                    aria-labelledby="spec-tab-finish" tabindex="0">
                    <h3>Standard Finishes</h3>
                    <?php rv_render_option_cards($rolltite_finishes, 'door-options-grid-swatch'); ?>

                    <h3>ArmorBrite&trade;</h3>
                    <img src="src/images/commercial/rolltite-finish-armorbrite.webp" width="291" height="55"
                        alt="ArmorBrite powder coat finish" class="img-fluid" loading="lazy" decoding="async">
                    <p>Powder Coat Finish is available in a variety of color options. 40-year film integrity and a
                        35-year no-chalk/no-fade limited paint warranty.</p>

                    <p class="door-options-note">*Finishes shown here are for the R400 model. Ask us for the sell
                        sheet covering the exact offering on the model you are specifying.</p>
                </div>

                <!-- Additional Information -->
                <div class="rv-tab-panel" id="spec-additional" role="tabpanel"
                    aria-labelledby="spec-tab-additional" tabindex="0" hidden>
                    <h3>Additional Information</h3>
                    <p>Detailed specifications per model are available on request, along with the Rolltite quick
                        reference guide. Tell us the opening you are working to &mdash; and whether the door needs a
                        fire rating &mdash; and we will specify it and send the documentation across.</p>
                    <a href="contact-us.php" class="cmn-btn">Request Documentation</a>
                </div>

                <!-- Warranty -->
                <div class="rv-tab-panel" id="spec-warranty" role="tabpanel"
                    aria-labelledby="spec-tab-warranty" tabindex="0" hidden>
                    <h3>Warranty</h3>
                    <p>Every Rolltite door, shutter and grille supplied by Rivett is covered by the manufacturer's
                        written warranty and installed by our own factory-trained technicians.</p>
                    <img src="src/images/commercial/rolltite-warranty-cover.webp" width="241" height="304"
                        alt="Rolltite warranty document cover"
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
