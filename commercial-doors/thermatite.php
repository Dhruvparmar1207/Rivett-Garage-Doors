<?php
/**
 * Thermatite™ — the insulated steel series page under Commercial Overhead
 * Doors, and the largest of the four: six models and seven specification
 * tabs.
 *
 * Built on the commercial listing template (commercial-overhead-doors.php):
 * the same hero slider and the same .all-garage-doors-card-sec model grid.
 * The specification tabs reuse the .door-options component from
 * Product-page.php.
 *
 * The reference nests a second tab strip inside its Section Details tab,
 * one per section profile. That is flattened here: the four profiles are
 * shown as a single option-card grid and the specification is grouped by
 * attribute, which is how the data actually reads and avoids nesting one
 * .rv-tabs group inside another.
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
$page_title       = 'Thermatite™ Insulated Overhead Doors | Commercial | Rivett Architectural Hardware';
$page_description = 'Thermatite Neufoam insulated polyurethane sectional overhead doors from Rivett — cavity-free '
                  . 'sections up to R24.54, T150 through T300. Call 1 (905) 668-4455';

$page_scripts = ['src/js/product.js'];

require __DIR__ . '/../header.php';

require_once __DIR__ . '/../common-sections/product-options.php';
require_once __DIR__ . '/../common-sections/commercial-hardware.php';


/* =====================================================================
   HERO SLIDER — see commercial-doors/alumatite.php for the key reference.
   Only the first slide carries the page <h1> and the #hero-title the
   section is labelled by.
   ===================================================================== */

$hero_label = 'Thermatite insulated overhead doors';

$hero_slides = [
    [
        'eyebrow'   => 'Commercial Overhead Doors',
        'heading'   => 'Thermatite™ Insulated Overhead Doors',
        'text'      => 'Neufoam™ insulated polyurethane sectional overhead doors, built stronger with a continuous foaming process that renders cavity-free sections — supplied, installed, and serviced by Rivett across Ontario.',
        'cta_label' => 'Get a Free Estimate',
        'cta_url'   => 'contact-us.php',
        'image'     => 'src/images/commercial-banner-img.webp',
        'alt'       => 'Commercial building with Rivett insulated overhead doors installed',
    ],
    [
        'eyebrow'   => 'Neufoam™ Technology',
        'heading'   => 'No Air Pockets, No Delamination',
        'text'      => 'No air pockets inside the panel ensures superior adhesion of our CFC/HCFC-free polyurethane insulation to the steel skin, preventing delamination and providing exceptional structural integrity.',
        'cta_label' => 'Talk To Our Team',
        'cta_url'   => 'contact-us.php',
        'image'     => 'src/images/commercial-banner-img.webp',
        'alt'       => '',
    ],
    [
        'eyebrow'   => 'Up To R24.54',
        'heading'   => 'A Better Thermal Barrier',
        'text'      => 'A higher strength-to-weight ratio, a better thermal barrier, and resistance to deflection. Sections feature thermal breaks and two continuous replaceable seals to minimize air flow.',
        'cta_label' => 'Request Specifications',
        'cta_url'   => 'contact-us.php',
        'image'     => 'src/images/commercial-banner-img.webp',
        'alt'       => '',
    ],
    [
        'eyebrow'   => 'Six Models',
        'heading'   => 'T150 Through T300',
        'text'      => 'Installed with our highest quality hardware components, Thermatite Doors are engineered to provide many years of worry-free operation and are suitable for a wide range of applications.',
        'cta_label' => 'Book a Service Call',
        'cta_url'   => 'contact-us.php',
        'image'     => 'src/images/commercial-banner-img.webp',
        'alt'       => '',
    ],
];


/**
 * The six Thermatite models, in the order the range is presented. The
 * copy matches the cards on commercial-overhead-doors.php so the listing
 * page and this page cannot drift apart.
 */
$thermatite_models = [
    [
        'name'  => 'T150',
        'img'   => 'src/images/commercial/thermatite-t150.webp',
        'alt'   => 'Thermatite T150 insulated polyurethane overhead door',
        'url'   => 'contact-us.php',
        'specs' => [
            '1.5″ Neufoam™ Insulated Polyurethane Door.',
            'Shiplap Section Joint.',
            'Available in 3 Colours and Two Panel Styles.',
        ],
    ],
    [
        'name'  => 'T175',
        'img'   => 'src/images/commercial/thermatite-t175.webp',
        'alt'   => 'Thermatite T175 insulated polyurethane overhead door',
        'url'   => 'contact-us.php',
        'specs' => [
            '1 3/4″ Neufoam™ Insulated Polyurethane Door.',
            'Shiplap Section Joint.',
            'Available in 3 Colours and Two Panel Styles.',
        ],
    ],
    [
        'name'  => 'T200',
        'img'   => 'src/images/commercial/thermatite-t200.webp',
        'alt'   => 'Thermatite T200 insulated polyurethane overhead door',
        'url'   => 'contact-us.php',
        'specs' => [
            '2″ Neufoam™ Insulated Polyurethane Door.',
            'Shiplap Section Joint.',
            'Available in 1 Colour and Two Panel Styles.',
        ],
    ],
    [
        'name'  => 'T200C',
        'img'   => 'src/images/commercial/thermatite-t200c.webp',
        'alt'   => 'Thermatite T200C insulated polyurethane overhead door',
        'url'   => 'contact-us.php',
        'specs' => [
            '2″ Neufoam™ Insulated Polyurethane Door.',
            'Tongue and Groove Section Joint.',
            'Available in 9 Colours and Two Panel Styles.',
        ],
    ],
    [
        'name'  => 'T200-20',
        'img'   => 'src/images/commercial/thermatite-t200-20.webp',
        'alt'   => 'Thermatite T200-20 insulated polyurethane overhead door with 20 gauge exterior steel sheet',
        'url'   => 'contact-us.php',
        'specs' => [
            '2″ Neufoam™ Insulated Polyurethane Door.',
            'Featuring 20 Gauge Exterior Steel Sheet.',
            'Shiplap Section Joint.',
        ],
    ],
    [
        'name'  => 'T300',
        'img'   => 'src/images/commercial/thermatite-t300.webp',
        'alt'   => 'Thermatite T300 insulated polyurethane overhead door',
        'url'   => 'contact-us.php',
        'specs' => [
            '3″ Neufoam™ Insulated Polyurethane Door.',
            'Tongue and Groove Section Joint.',
            'Available in 1 Colour and Two Panel Styles.',
        ],
    ],
];


/**
 * Specification tabs. The keys drive the tab/panel ids, so a tab and its
 * panel can never point at each other incorrectly.
 */
$spec_tabs = [
    'section-details' => 'Section Details',
    'colours'         => 'Colours',
    'glazing'         => 'Optional Glazing',
    'hardware'        => 'Standard / Optional Hardware',
    'comparison'      => 'Comparison',
    'additional'      => 'Additional Information',
    'warranty'        => 'Warranty',
];

/** The four section profiles, drawn as cut-away diagrams. */
$thermatite_sections = [
    ['name' => 'T150 / T175 / T200', 'img' => 'src/images/commercial/thermatite-section-t150-t175-t200.webp'],
    ['name' => 'T200C',              'img' => 'src/images/commercial/thermatite-section-t200c.webp'],
    ['name' => 'T200-20',            'img' => 'src/images/commercial/thermatite-section-t200-20.webp'],
    ['name' => 'T300',               'img' => 'src/images/commercial/thermatite-section-t300.webp'],
];

/**
 * The section specification, grouped by attribute. Each line pairs the
 * model it applies to with its value, exactly as the reference states it —
 * where a model is absent from an attribute, it is absent here too.
 */
$thermatite_section_specs = [
    [
        'heading' => 'Section Thickness',
        'items'   => [
            'T150-MR / T150: 1 1/2″ (38mm)',
            'T175-MR / T175: 1 3/4″ (45mm)',
            'T200-20: 2” (51mm)',
            'T300-MR / T300 (Total Door Thickness): 3″ (76mm)',
        ],
    ],
    [
        'heading' => 'Thermal Value Of Sections',
        'items'   => [
            'T150-MR / T150: R 13.21 ft2 hF/Btu',
            'T175-MR / T175: R 16 ft2 hF/Btu',
            'T200MR / T200: R 18.28 ft2 hF/Btu',
            'T200-20: R 18.28 ft2 hF/Btu',
            'T300-MR / T300: R 24.54 ft2 hF/Btu',
        ],
    ],
    [
        'heading' => 'Face Sheet Profile',
        'items'   => [
            'T150-MR / T150: Multi-Ribbed / Ribbed',
            'T175-MR / T175: Multi-Ribbed / Ribbed',
            'T200MR / T200: Multi-Ribbed / Ribbed',
            'T200-20: Flush / White',
            'T300-MR / T300: Multi-Ribbed / Ribbed',
        ],
    ],
    [
        'heading' => 'Face Sheet Thickness',
        'items'   => [
            'T150-MR / T150: 0.016″ (0.41mm)',
            'T175-MR / T175: 0.019″ (0.48mm)',
            'T200MR / T200: 0.016″ (0.41mm)',
            'T200-20: 20 Gauge',
            'T300-MR / T300: 0.019″ (0.48″)',
        ],
    ],
    [
        'heading' => 'Maximum Opening Width',
        'items'   => [
            'T150-MR / T150: 29’-4″ (8941mm)',
            'T175-MR / T175: 36’-2″ (11024mm)',
            'T200MR / T200: 30’-2″ (9195mm)',
            'T200-20: 38’ 2” (11,633 mm)',
            'T300-MR / T300: 38′-2″ (11633mm)',
        ],
    ],
    [
        'heading' => 'Maximum Opening Height',
        'items'   => [
            'All models: 22′ (6706mm)',
        ],
    ],
];

/** Standard finishes, and the nine that are exclusive to the T200C. */
$thermatite_colour_groups = [
    [
        'heading' => 'Standard Colours',
        'items'   => [
            ['name' => 'White',  'img' => 'src/images/commercial/thermatite-colour-white.webp'],
            ['name' => 'Silver', 'img' => 'src/images/commercial/thermatite-colour-silver.webp'],
            ['name' => 'Brown',  'img' => 'src/images/commercial/thermatite-colour-brown.webp'],
        ],
    ],
    [
        'heading' => 'T200C Colour Options',
        'items'   => [
            ['name' => 'Almond',     'img' => 'src/images/commercial/thermatite-t200c-almond.webp'],
            ['name' => 'Bronze',     'img' => 'src/images/commercial/thermatite-t200c-bronze.webp'],
            ['name' => 'Brown',      'img' => 'src/images/commercial/thermatite-t200c-brown.webp'],
            ['name' => 'Slate Grey', 'img' => 'src/images/commercial/thermatite-t200c-slate-grey.webp'],
            ['name' => 'Desert Tan', 'img' => 'src/images/commercial/thermatite-t200c-desert-tan.webp'],
            ['name' => 'Iron Ore',   'img' => 'src/images/commercial/thermatite-t200c-iron-ore.webp'],
            ['name' => 'Sandstone',  'img' => 'src/images/commercial/thermatite-t200c-sandstone.webp'],
            ['name' => 'Cafe',       'img' => 'src/images/commercial/thermatite-t200c-cafe.webp'],
            ['name' => 'Black',      'img' => 'src/images/commercial/thermatite-t200c-black.webp'],
        ],
    ],
];

/** Which finishes each model can be ordered in. */
$thermatite_colour_availability = [
    'T150-MR / T150: White / Brown',
    'T175-MR / T175: White / Silver / Brown',
    'T200: White',
    'T300-MR / T300A: White',
    'T200-20: White',
];

/**
 * Optional glazing. Kept as a real table because the reference data is a
 * four-column matrix; .table-responsive is Bootstrap's own horizontal
 * scroller, so the page body never scrolls sideways on a phone.
 */
$thermatite_glazing = [
    ['type' => 'B',   'size' => '24″ x 6″ 610mm x 152mm',  'frame' => 'Black, White',        'desc' => 'Clear glass sealed unit set in moulded frame.'],
    ['type' => 'CPL', 'size' => '24″ x 8″ 610mm x 203mm',  'frame' => 'Black, White, Brown', 'desc' => 'Clear glass sealed unit set in moulded frame.'],
    ['type' => 'AA',  'size' => '26″ x 13″ 660mm x 330mm', 'frame' => 'Black, White',        'desc' => 'Dual acrylic unit set in moulded frame.'],
    ['type' => 'E',   'size' => '24″ x 12″ 610mm x 305mm', 'frame' => 'Black, White, Brown', 'desc' => 'Clear glass sealed unit set in moulded frame.'],
    ['type' => 'D',   'size' => '34″ x 16″ 864mm x 406mm', 'frame' => 'Black, White',        'desc' => 'Clear glass sealed unit set in moulded frame.'],
    ['type' => 'FV*', 'size' => 'Full Section Width',      'frame' => '—',                   'desc' => 'Full vision aluminum glass section – white, clear anodized* finish; 1/8″ (3mm), (6mm*) acrylic, polycarbonate, plain or tempered glass, or 1/2″ (13mm) sealed or tempered glass units.'],
];

/** Optional hardware available on the Thermatite series. */
$thermatite_optional_hardware = [
    'Combination PVC step plate and lift handle',
    'Exhaust port: 3″ (76 mm) / 4″ (102mm) / 5″ (127mm) diameter',
    'Flexible top weather strip for full width of door',
    'Full height thermal break and anti-friction strip for galvanized end caps',
    'Aluminum end stiles with full height jamb seal (Note: For T175-MR, and T175 only)',
    'Pass doors: 32″ x 80″ (813mm X 2032mm) four section pass door available in doors up to 16.2’ (4928mm) (Note: *14.2’ (4381mm) for T150 and T200A)',
];

/* Thermatite carries the full hardware package including the step plate. */
$thermatite_hardware_media = rv_hardware_media(
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
                <h2>Thermatite&trade;</h2>
                <p class="rivett-p section-intro">Neufoam&trade; Insulated Polyurethane Sectional Overhead Doors</p>
            </div>
            <div class="col-xxl-8 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                <p>Available through Rivett, Thermatite Door Systems are built stronger with Neufoam&trade;
                    technology &ndash; a continuous foaming process that renders cavity-free sections. No air
                    pockets inside the panel ensures superior adhesion of our CFC/HCFC-free polyurethane insulation
                    to the steel skin, preventing delamination and providing exceptional structural integrity.
                    These garage doors have a higher strength-to-weight ratio, offer a better thermal barrier
                    (higher R-Value) and resist deflection. Sections feature thermal breaks and two continuous
                    replaceable seals to minimize air flow.</p>

                <p>Thermatite panels can also be specified on an
                    <a href="commercial-doors/alumatite.php">Alumatite</a> door for extra strength and additional
                    energy savings, or as the optional insulated bottom section on a
                    <a href="commercial-doors/polytite.php">Polytite</a> P175T.</p>
            </div>
        </div>
    </div>
</section>


<!-- ============================= MODELS ============================= -->
<section class="rivett-padding rivett-cmn all-garage-doors-card-sec bg-grey-light">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-8 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 top-heading">
                <h2>Thermatite Models Include</h2>
            </div>
        </div>
        <div class="row card-list-row-grid">
            <?php foreach ($thermatite_models as $model) : ?>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec">
                    <div class="garage-card">
                        <div class="garage-card-img">
                            <img src="<?php echo rv_attr($model['img']); ?>" width="810" height="398"
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
                                <span class="visually-hidden">for the Thermatite
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
                <h2>Thermatite Door Systems</h2>
                <p class="rivett-p section-intro">Installed with our highest quality hardware components, Thermatite
                    Doors are engineered to provide many years of worry-free operation and are suitable for a wide
                    range of applications.</p>
            </div>
        </div>

        <div class="row door-options-row">

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 left-side">
                <div class="rv-tabs door-options-tabs" role="tablist" aria-orientation="vertical"
                    aria-label="Thermatite specifications">
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

                    <h3>Section Profiles</h3>
                    <?php rv_render_option_cards($thermatite_sections, 'door-options-grid-window'); ?>

                    <?php foreach ($thermatite_section_specs as $group) : ?>
                        <h3><?php echo rv_attr($group['heading']); ?></h3>
                        <ul class="door-options-list">
                            <?php foreach ($group['items'] as $item) : ?>
                                <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                                    <span><?php echo rv_attr($item); ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endforeach; ?>
                </div>

                <!-- Colours -->
                <div class="rv-tab-panel" id="spec-colours" role="tabpanel"
                    aria-labelledby="spec-tab-colours" tabindex="0" hidden>

                    <?php rv_render_option_groups($thermatite_colour_groups, 'door-options-grid-swatch'); ?>

                    <h3>Availability By Model</h3>
                    <p>Two coat, baked-on paint system on exterior side, primer and polyester finish coat.</p>
                    <ul class="door-options-list">
                        <?php foreach ($thermatite_colour_availability as $line) : ?>
                            <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                                <span><?php echo rv_attr($line); ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                    <p class="door-options-note">*Colours shown are a guide only. Ask us for a physical sample
                        before you choose &mdash; screen colours vary.</p>
                </div>

                <!-- Optional Glazing -->
                <div class="rv-tab-panel" id="spec-glazing" role="tabpanel"
                    aria-labelledby="spec-tab-glazing" tabindex="0" hidden>
                    <h3>Glazing Options</h3>

                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">Type</th>
                                    <th scope="col">Overall Dimensions</th>
                                    <th scope="col">Frame Colour</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($thermatite_glazing as $glazing) : ?>
                                    <tr>
                                        <th scope="row"><?php echo rv_attr($glazing['type']); ?></th>
                                        <td><?php echo rv_attr($glazing['size']); ?></td>
                                        <td><?php echo rv_attr($glazing['frame']); ?></td>
                                        <td><?php echo rv_attr($glazing['desc']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <img src="src/images/commercial/thermatite-glazing-options.webp" width="416" height="216"
                        alt="Thermatite window and glazing insert options"
                        class="img-fluid" loading="lazy" decoding="async">

                    <p class="door-options-note">*Full vision sections are not available for the T150.</p>
                </div>

                <!-- Standard / Optional Hardware -->
                <div class="rv-tab-panel" id="spec-hardware" role="tabpanel"
                    aria-labelledby="spec-tab-hardware" tabindex="0" hidden>
                    <h3>Standard Hardware</h3>
                    <?php rv_render_option_cards($thermatite_hardware_media); ?>
                    <?php rv_render_hardware_list($RIVETT_COMMERCIAL_HARDWARE); ?>

                    <h3>Optional Hardware</h3>
                    <ul class="door-options-list">
                        <?php foreach ($thermatite_optional_hardware as $option) : ?>
                            <li><i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                                <span><?php echo rv_attr($option); ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Comparison -->
                <div class="rv-tab-panel" id="spec-comparison" role="tabpanel"
                    aria-labelledby="spec-tab-comparison" tabindex="0" hidden>
                    <h3>Model Comparison</h3>
                    <img src="src/images/commercial/thermatite-comparison-chart.webp" width="1556" height="848"
                        alt="Side-by-side comparison of the Thermatite T150, T175, T200, T200C, T200-20 and T300 models"
                        class="img-fluid" loading="lazy" decoding="async">
                    <p class="door-options-note">*Not sure which model suits your opening? Tell us the size and the
                        duty cycle and we will specify it for you.</p>
                </div>

                <!-- Additional Information -->
                <div class="rv-tab-panel" id="spec-additional" role="tabpanel"
                    aria-labelledby="spec-tab-additional" tabindex="0" hidden>
                    <h3>Additional Information</h3>
                    <p>Detailed specifications per model &mdash; including CAD files, SpecWizards&reg; and LEED
                        credit information &mdash; are available on request, as is the full Thermatite product
                        catalogue. Tell us the model and the opening you are working to and we will send the
                        documentation across.</p>
                    <a href="contact-us.php" class="cmn-btn">Request Documentation</a>
                </div>

                <!-- Warranty -->
                <div class="rv-tab-panel" id="spec-warranty" role="tabpanel"
                    aria-labelledby="spec-tab-warranty" tabindex="0" hidden>
                    <h3>Warranty</h3>
                    <p>Every Thermatite door supplied by Rivett is covered by the manufacturer's written warranty
                        and installed by our own factory-trained technicians.</p>
                    <img src="src/images/commercial/thermatite-warranty-cover.webp" width="241" height="304"
                        alt="Thermatite warranty document cover"
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
