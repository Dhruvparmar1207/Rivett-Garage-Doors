<?php
/**
 * Polytite™ — the polycarbonate series page under Commercial Overhead Doors.
 *
 * Built on the commercial listing template (commercial-overhead-doors.php).
 * The range is a single model, so the model block reuses that template's
 * .grey-row-garage-doors-card-sec split layout — photo on the left, copy on
 * the right — rather than a one-card grid. The specification tabs reuse the
 * .door-options component from Product-page.php.
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
$page_title       = 'Polytite™ Polycarbonate Overhead Doors | Commercial | Rivett Architectural Hardware';
$page_description = 'Polytite sectional polycarbonate overhead doors from Rivett — triple-walled translucent '
                  . 'panels, strong, lightweight and impact-resistant. Call 1 (905) 668-4455';

$page_scripts = ['src/js/product.js'];

require __DIR__ . '/../header.php';

require_once __DIR__ . '/../common-sections/product-options.php';
require_once __DIR__ . '/../common-sections/commercial-hardware.php';


/* =====================================================================
   HERO SLIDER — see commercial-doors/alumatite.php for the key reference.
   Only the first slide carries the page <h1> and the #hero-title the
   section is labelled by.
   ===================================================================== */

$hero_label = 'Polytite polycarbonate overhead doors';

$hero_slides = [
    [
        'eyebrow'   => 'Commercial Overhead Doors',
        'heading'   => 'Polytite™ Polycarbonate Overhead Doors',
        'text'      => 'Triple-walled polycarbonate panels that are strong yet lightweight, providing easy operation with minimum stress on hardware components — supplied, installed, and serviced by Rivett across Ontario.',
        'cta_label' => 'Get a Free Estimate',
        'cta_url'   => 'contact-us.php',
        'image'     => 'src/images/commercial-banner-img.webp',
        'alt'       => 'Commercial building with Rivett polycarbonate overhead doors installed',
    ],
    [
        'eyebrow'   => 'Natural Light',
        'heading'   => 'A Naturally-Lit Work Environment',
        'text'      => 'The translucent panels provide a naturally-lit, inviting work environment and help reduce winter heating costs through the effects of solar heat gain.',
        'cta_label' => 'Talk To Our Team',
        'cta_url'   => 'contact-us.php',
        'image'     => 'src/images/commercial-banner-img.webp',
        'alt'       => '',
    ],
    [
        'eyebrow'   => 'Built To Last',
        'heading'   => 'Impact And Weather Resistant',
        'text'      => 'The panels are extremely impact-resistant and can withstand long-term exposure to extreme elements such as sun, wind, rain and snow without cracking or splitting.',
        'cta_label' => 'Request Specifications',
        'cta_url'   => 'contact-us.php',
        'image'     => 'src/images/commercial-banner-img.webp',
        'alt'       => '',
    ],
    [
        'eyebrow'   => 'Where It Fits',
        'heading'   => 'Service Garages And Beyond',
        'text'      => 'Particularly suited for service garage doors but ideal for all types of industrial, agricultural, commercial, institutional and residential overhead door installations.',
        'cta_label' => 'Book a Service Call',
        'cta_url'   => 'contact-us.php',
        'image'     => 'src/images/commercial-banner-img.webp',
        'alt'       => '',
    ],
];


/**
 * Specification tabs. The keys drive the tab/panel ids, so a tab and its
 * panel can never point at each other incorrectly.
 */
$spec_tabs = [
    'section-details' => 'Section Details',
    'hardware'        => 'Standard / Optional Hardware',
    'additional'      => 'Additional Information',
    'warranty'        => 'Warranty',
];

/**
 * The Section Details panel, as the reference specifies it.
 *
 * Keys
 *   heading  subsection title, rendered as the panel's <h3>.
 *   intro    optional lead paragraph above the list.
 *   items    the specification lines.
 */
$polytite_section_details = [
    [
        'heading' => 'P175/P175T Section Dimensions',
        'items'   => [
            'Section Thickness: 1 3/4″ (45mm)',
            'Section Height: 21″ & 24″ (533mm & 610mm)',
        ],
    ],
    [
        'heading' => 'Opening Widths',
        'items'   => [
            'Basic Windload: 8′-0″ – 16′-2″ (2438mm – 4877mm)',
            '15 psf Design: 8′-0″ – 24′-2″ (2438mm – 7366mm)',
            'Custom Door Width: Up to 30′-2″ (9195mm)',
        ],
    ],
    [
        'heading' => 'Polycarbonate Paneling',
        'intro'   => 'The external side of the Polycarbonate is protected with a coextruded layer warranting resistance to atmospheric agents and U.V. rays.',
        'items'   => [
            'Thickness: 5/8″ (16mm)',
            'Structure: Triple-walled',
            'Weight: 0.553lbs/sq ft (2.69 kg/sq m)',
            'R-Factor: 2.500 ft2 hF/Btu',
            'U-Factor: 2.271 W/m2K',
            'Fire Reaction: ASTM E84-01 Flame spread and smoke. Developed: Class A.',
            'Solar Heat Gain Coefficient: Clear: 75; Bronze: 57; White: 63',
            'Stock Colours: Clear, Dark Bronze, Western Bronze',
            'Optional Colours: Green, Blue, White',
        ],
    ],
    [
        'heading' => 'Section Framing',
        'intro'   => 'Fabricated from 6063-T6 aluminum alloy extrusions, extrusion thickness 0.063″ (1.6mm) thick, and 0.090″ (2.18mm) thick at hardware mounting locations.',
        'items'   => [
            'End stiles: 2 1/2″ (64mm) wide aluminum; Double end stiles for doors over 16′-2″ (4928mm) wide',
            'Centre stiles: 3″ (76mm) wide aluminum',
            'Pair of meeting rails: 4 1/2″ (114mm) high aluminum',
            'Top rail: 2 3/16″ (56mm) high aluminum',
            'Top rail: 2 9/16″ (65mm) high aluminum',
            'Stock Colours: Clear Anodized, Bronze, White',
        ],
    ],
    [
        'heading' => 'Optional Thermatite Multi-Ribbed (MR) Bottom Section (P175T)',
        'intro'   => 'Insulated sections fabricated from pre-painted, hot dipped galvanized, steel sheet; with rigid polyurethane insulation core, CFC and HCFC free, face sheet stucco embossed and rib reinforced.',
        'items'   => [
            'R-Factor: 16.000 ft2 hF/Btu',
            'U-Factor: 0.355 W/m2K',
        ],
    ],
    [
        'heading' => 'Warranty',
        'items'   => [
            'Polytite Panels: 10 years against breakage, excessive yellowing and loss of light transmission',
            'Materials and workmanship: 1 year',
        ],
    ],
];

/** Optional hardware available on the Polytite series. */
$polytite_optional_hardware = [
    'Exhaust port: 3″ (76 mm) / 4″ (102mm) / 5″ (127mm) diameter',
];

/* Polytite's optional list has no step plate, so its photograph is left out. */
$polytite_hardware_media = rv_hardware_media(
    $RIVETT_COMMERCIAL_HARDWARE_MEDIA,
    ['hinge', 'track', 'rollers', 'counter-balance', 'exhaust-port']
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
                <h2>Polytite&trade;</h2>
                <p class="rivett-p section-intro">Sectional Polycarbonate Overhead Doors</p>
            </div>
            <div class="col-xxl-8 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                <p>Available through Rivett, Polytite Door Systems are made with triple-walled polycarbonate panels
                    that are strong yet lightweight, providing easy operation with minimum stress on hardware
                    components. The translucent panels provide a naturally-lit, inviting work environment and help
                    reduce winter heating costs through the effects of solar heat gain. The panels are also
                    extremely impact-resistant and can withstand long-term exposure to extreme elements such as sun,
                    wind, rain and snow without cracking or splitting. Particularly suited for service garage doors
                    but ideal for all types of industrial, agricultural, commercial, institutional and residential
                    overhead door installations where an attractive, light-transmitting, strong, lightweight door is
                    desired.</p>
            </div>
        </div>
    </div>
</section>


<!-- ============================= MODEL ============================= -->
<section class="rivett-padding rivett-cmn all-garage-doors-card-sec grey-row-garage-doors-card-sec">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-8 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 top-heading">
                <h2>Polytite Models Include</h2>
            </div>
        </div>
        <div class="row card-list-row-grid bg-grey-light">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 main-card-sec left-side">
                <div class="garage-card">
                    <div class="garage-card-img">
                        <img src="src/images/commercial/polytite-p175.webp" width="767" height="484"
                            alt="Polytite P175 sectional polycarbonate overhead door"
                            class="img-fluid" loading="lazy" decoding="async" />
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 main-card-sec right-side">
                <div class="garage-card">
                    <div class="garage-card-content">
                        <h3>P175</h3>
                        <p>Triple-walled polycarbonate panels in a 6063-T6 aluminum alloy frame, 1 3/4&Prime;
                            (45mm) thick, for openings up to 30&prime;-2&Prime; (9195mm) wide. Available with the
                            optional Thermatite Multi-Ribbed insulated bottom section as the P175T.</p>
                        <a href="contact-us.php" class="link-arrow">Request Specifications
                            <span class="visually-hidden">for the Polytite P175</span>
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= SPECIFICATIONS ============================= -->
<section class="door-options-sec rivett-padding rivett-cmn">
    <div class="container-md">

        <div class="row">
            <div class="col-12 top-heading">
                <h2>Polytite Door Systems</h2>
            </div>
        </div>

        <div class="row door-options-row">

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 left-side">
                <div class="rv-tabs door-options-tabs" role="tablist" aria-orientation="vertical"
                    aria-label="Polytite specifications">
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

                <!-- Section Details -->
                <div class="rv-tab-panel active" id="spec-section-details" role="tabpanel"
                    aria-labelledby="spec-tab-section-details" tabindex="0">

                    <?php foreach ($polytite_section_details as $group) : ?>
                        <h3><?php echo rv_attr($group['heading']); ?></h3>
                        <?php if (!empty($group['intro'])) : ?>
                            <p><?php echo rv_attr($group['intro']); ?></p>
                        <?php endif; ?>
                        <ul class="door-options-list">
                            <?php foreach ($group['items'] as $item) : ?>
                                <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                                    <span><?php echo rv_attr($item); ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endforeach; ?>

                    <img src="src/images/commercial/polytite-cross-section.webp" width="416" height="544"
                        alt="Cut-away view of a Polytite P175 triple-walled polycarbonate section"
                        class="img-fluid" loading="lazy" decoding="async">
                </div>

                <!-- Standard / Optional Hardware -->
                <div class="rv-tab-panel" id="spec-hardware" role="tabpanel"
                    aria-labelledby="spec-tab-hardware" tabindex="0" hidden>
                    <h3>Standard Hardware</h3>
                    <?php rv_render_option_cards($polytite_hardware_media); ?>
                    <?php rv_render_hardware_list($RIVETT_COMMERCIAL_HARDWARE); ?>

                    <h3>Optional Hardware</h3>
                    <ul class="door-options-list">
                        <?php foreach ($polytite_optional_hardware as $option) : ?>
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
                        credit information &mdash; are available on request. Tell us the opening you are working to
                        and we will send the documentation across.</p>
                    <a href="contact-us.php" class="cmn-btn">Request Documentation</a>
                </div>

                <!-- Warranty -->
                <div class="rv-tab-panel" id="spec-warranty" role="tabpanel"
                    aria-labelledby="spec-tab-warranty" tabindex="0" hidden>
                    <h3>Warranty</h3>
                    <p>Every Polytite door supplied by Rivett is covered by the manufacturer's written warranty and
                        installed by our own factory-trained technicians.</p>
                    <ul class="door-options-list">
                        <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Polytite Panels: 10 years against breakage, excessive yellowing and loss of light
                                transmission.</span></li>
                        <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                            <span>Materials and workmanship: 1 year.</span></li>
                    </ul>
                    <img src="src/images/commercial/polytite-warranty-cover.webp" width="241" height="304"
                        alt="Polytite warranty document cover"
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
