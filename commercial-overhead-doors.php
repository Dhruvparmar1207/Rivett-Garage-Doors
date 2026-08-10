<?php
$page_meta = [
    'title'       => 'Commercial Overhead Doors, Rolling Steel & Operators | Rivett',
    'description' => 'Sectional overhead doors, rolling steel, high-speed specialty doors and commercial operators — supplied, installed and serviced by Rivett across Durham Region and Eastern Ontario.',
    'keywords'    => 'commercial overhead doors, rolling steel doors, high speed doors Ontario, commercial door operators, commercial door service',
    'canonical'   => 'commercial-overhead-doors.php',
    'index'       => true,
    'follow'      => true,
];

/* =====================================================================
   HERO SLIDER — CONTENT SOURCE

   One entry per slide, in display order. Add or remove an entry and the
   carousel, the "1 of 4" slide labels and the loading hints all follow.

   Keys
     eyebrow    small caps line above the heading.
     heading    slide headline. The FIRST slide is rendered as the page
                <h1> (and carries id="hero-title"); every later slide is
                an <h2> with the same .banner-heading styling, so the page
                keeps a single top-level heading.
     text       supporting paragraph.
     cta_label  button text.
     cta_url    button link.
     image      background image path.
     alt        image alt text. Leave '' for a purely decorative slide.
   ===================================================================== */

$hero_label = 'Commercial overhead doors';

$hero_slides = [
    [
        'eyebrow'   => 'COMMERCIAL OVERHEAD DOORS',
        'heading'   => 'Reliable Doors For Every Business',
        'text'      => 'From warehouses and manufacturing facilities to retail and agricultural buildings, Rivett supplies, installs, and services durable commercial overhead doors across Durham Region, Kingston, and Ontario.',
        'cta_label' => 'Get a Free Estimate',
        'cta_url'   => 'contact-us.php',
        'image'     => './src/images/commercial-banner-img.webp',
        'alt'       => 'Commercial building with a Rivett overhead door installed',
    ],
    [
        'eyebrow'   => 'By Series',
        'heading'   => 'Four Series. One Perfect Fit.',
        'text'      => 'Landmark, Echo Ridge, Rockwood, and Grandview — insulated steel and custom wood doors in a full range of colours, panel profiles, and window options.',
        'cta_label' => 'Book a Showroom Visit',
        'cta_url'   => 'contact-us.php',
        'image'     => './src/images/commercial-banner-img.webp',
        'alt'       => '',
    ],
    [
        'eyebrow'   => 'Openers',
        'heading'   => 'Openers That Just Work.',
        'text'      => 'LiftMaster and Guardian openers supplied, installed, and backed by our own technicians — quiet belt drives, smartphone control, and battery backup.',
        'cta_label' => 'Get Opener Pricing',
        'cta_url'   => 'contact-us.php',
        'image'     => './src/images/commercial-banner-img.webp',
        'alt'       => '',
    ],
    [
        'eyebrow'   => 'Parts & Service',
        'heading'   => "Broken Spring? We're On It.",
        'text'      => 'Factory-trained technicians and genuine replacement parts, with residential service calls across Durham Region, the GTA, Kingston, and Eastern Ontario.',
        'cta_label' => 'Book a Service Call',
        'cta_url'   => 'contact-us.php',
        'image'     => './src/images/commercial-banner-img.webp',
        'alt'       => '',
    ],
];

/* =====================================================================
   DOOR SECTIONS — CONTENT SOURCE

   One entry per product section, in display order. Everything the page
   shows below the hero comes from here, so a new door line is a new
   entry — no markup to copy.

   Section keys
     heading        section <h2>, e.g. 'Thermatite™'.
     subtitle       intro paragraph under the heading.
     layout         'grid'  cards side by side (default), or
                    'split' one full-width row per product: image on the
                            left, name + description on the right.
     section_class  extra classes on <section>, e.g. 'bg-grey-light'.
     row_class      extra classes on the card row.
     img_width      intrinsic image width  (grid 810, split 767).
     img_height     intrinsic image height (grid 398, split 484).
     video          optional YouTube embed shown directly after the
                    section: ['src' => '…', 'title' => '…'].
     products       list of products, keys below.

   Product keys
     name           product <h3>, e.g. 'T150'.
     image          product image path.
     alt            product image alt text.
     url            "View More" link. '#' until the detail page exists.
     description    paragraph of body copy. Optional.
     points         bullet list of specs. Optional.
   ===================================================================== */

$door_sections = [

    [
        'heading'    => 'Thermatite™',
        'subtitle'   => 'Available through Rivett, Thermatite Door Systems use Neufoam™ technology for cavity-free, fully insulated panels that deliver a higher strength-to-weight ratio, superior R-Value, and resistance to deflection while preventing delamination.',
        'layout'     => 'grid',
        'img_width'  => 810,
        'img_height' => 398,
        'video'      => [
            'src'   => 'https://www.youtube.com/embed/ZErrHqIeVGo?si=MNMRWUjkmqY8tPF7',
            'title' => 'YouTube video player',
        ],
        'products'   => [
            [
                'name'   => 'T150',
                'image'  => './src/images/thermatite-t150.webp',
                'alt'    => 'Thermatite T150 insulated commercial overhead door',
                'url'    => 'commercial-doors/thermatite.php',
                'points' => [
                    '1.5″ Neufoam™ Insulated Polyurethane Door.',
                    'Shiplap Section Joint.',
                    'Available in 3 Colours and Two Panel Styles.',
                ],
            ],
            [
                'name'   => 'T175',
                'image'  => './src/images/thermatite-t175.webp',
                'alt'    => 'Thermatite T175 insulated commercial overhead door',
                'url'    => 'commercial-doors/thermatite.php',
                'points' => [
                    '1 3/4″ Neufoam™ Insulated Polyurethane Door.',
                    'Shiplap Section Joint.',
                    'Available in 3 Colours and Two Panel Styles.',
                ],
            ],
            [
                'name'   => 'T200',
                'image'  => './src/images/thermatite-t200.webp',
                'alt'    => 'Thermatite T200 insulated commercial overhead door',
                'url'    => 'commercial-doors/thermatite.php',
                'points' => [
                    '2″ Neufoam™ Insulated Polyurethane Door.',
                    'Shiplap Section Joint.',
                    'Available in 1 Colour and Two Panel Styles.',
                ],
            ],
            [
                'name'   => 'T200C',
                'image'  => './src/images/thermatite-t200c.webp',
                'alt'    => 'Thermatite T200C insulated commercial overhead door',
                'url'    => 'commercial-doors/thermatite.php',
                'points' => [
                    '2″ Neufoam™ Insulated Polyurethane Door.',
                    'Tongue and Groove Section Joint.',
                    'Available in 9 Colours and Two Panel Styles.',
                ],
            ],
            [
                'name'   => 'T200-20',
                'image'  => './src/images/thermatite-t200-20.webp',
                'alt'    => 'Thermatite T200-20 insulated commercial overhead door with 20 gauge steel',
                'url'    => 'commercial-doors/thermatite.php',
                'points' => [
                    '2″ Neufoam™ Insulated Polyurethane Door.',
                    'Featuring 20 Gauge Exterior Steel Sheet.',
                    'Shiplap Section Joint.',
                ],
            ],
            [
                'name'   => 'T300',
                'image'  => './src/images/thermatite-t300.webp',
                'alt'    => 'Thermatite T300 insulated commercial overhead door',
                'url'    => 'commercial-doors/thermatite.php',
                'points' => [
                    '3″ Neufoam™ Insulated Polyurethane Door.',
                    'Tongue and Groove Section Joint.',
                    'Available in 1 Colour and Two Panel Styles.',
                ],
            ],
        ],
    ],

    [
        'heading'       => 'Alumatite™',
        'subtitle'      => 'Available through Rivett, Alumatite Door Systems deliver maximum light and visibility with extruded aluminum rails, stiles, and a full-width reinforcing truss for heavy use, and can be configured with Thermatite panels for added strength and energy savings.',
        'layout'        => 'grid',
        'section_class' => 'bg-grey-light',
        'img_width'     => 810,
        'img_height'    => 398,
        'products'      => [
            [
                'name'  => 'A175',
                'image' => './src/images/alumatite-a175.webp',
                'alt'   => 'Alumatite A175 full-view aluminum commercial overhead door',
                'url'   => 'commercial-doors/alumatite.php',
            ],
            [
                'name'  => 'A200',
                'image' => './src/images/alumatite-a200.webp',
                'alt'   => 'Alumatite A200 full-view aluminum commercial overhead door',
                'url'   => 'commercial-doors/alumatite.php',
            ],
            [
                'name'  => 'A300',
                'image' => './src/images/alumatite-a300.webp',
                'alt'   => 'Alumatite A300 full-view aluminum commercial overhead door',
                'url'   => 'commercial-doors/alumatite.php',
            ],
        ],
    ],

    [
        'heading'       => 'Polytite™',
        'subtitle'      => 'Available through Rivett, Polytite Door Systems use strong, lightweight triple-walled polycarbonate panels for easy operation, naturally-lit spaces, and reduced heating costs, while resisting impact and harsh weather across service, industrial, commercial, and residential installations.',
        'layout'        => 'split',
        'section_class' => 'grey-row-garage-doors-card-sec',
        'row_class'     => 'bg-grey-light',
        'img_width'     => 767,
        'img_height'    => 484,
        'products'      => [
            [
                'name'        => 'P175',
                'image'       => './src/images/polytite-p175.webp',
                'alt'         => 'Polytite P175 translucent polycarbonate overhead door',
                'url'         => 'commercial-doors/polytite.php',
                'description' => 'Polytite Door Systems are made with triple-walled polycarbonate panels that are strong yet lightweight, providing easy operation with minimum stress on hardware components. The translucent panels provide a naturally-lit, inviting work environment and help reduce winter heating costs through the effects of solar heat gain. The panels are also extremely impact-resistant and can withstand long-term exposure to extreme elements such as sun, wind, rain and snow without cracking or splitting. Particularly suited for service garages but ideal for all types of industrial, agricultural, commercial, institutional and residential overhead door installations where an attractive, light-transmitting, strong, lightweight door is desired.',
            ],
        ],
    ],

];

include 'header.php';
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


<!-- ======================= DOOR SECTIONS =======================
     Rendered from $door_sections at the top of this file. -->

<?php foreach ($door_sections as $section):
    $layout      = $section['layout'] ?? 'grid';
    $img_width   = $section['img_width'] ?? 810;
    $img_height  = $section['img_height'] ?? 398;
    $row_class   = trim('card-list-row-grid ' . ($section['row_class'] ?? ''));
    $sec_class   = trim('rivett-padding rivett-cmn all-garage-doors-card-sec ' . ($section['section_class'] ?? ''));
    $col_class   = $layout === 'split'
        ? 'col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 main-card-sec'
        : 'col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec';
?>
<section class="<?php echo rivett_nav_e($sec_class); ?>">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-8 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 top-heading">
                <h2><?php echo rivett_nav_e($section['heading']); ?></h2>
                <p><?php echo rivett_nav_e($section['subtitle']); ?></p>
            </div>
        </div>

        <?php if ($layout === 'split'): ?>

            <?php foreach ($section['products'] as $product): ?>
            <div class="row <?php echo rivett_nav_e($row_class); ?>">
                <div class="<?php echo rivett_nav_e($col_class); ?> left-side">
                    <div class="garage-card">
                        <div class="garage-card-img">
                            <img src="<?php echo rivett_nav_e($product['image']); ?>" width="<?php echo (int) $img_width; ?>" height="<?php echo (int) $img_height; ?>"
                                 alt="<?php echo rivett_nav_e($product['alt'] ?? $product['name']); ?>" class="img-fluid" loading="lazy" decoding="async" />
                        </div>
                    </div>
                </div>
                <div class="<?php echo rivett_nav_e($col_class); ?> right-side">
                    <div class="garage-card">
                        <div class="garage-card-content">
                            <h3><?php echo rivett_nav_e($product['name']); ?></h3>
                            <?php if (!empty($product['description'])): ?>
                            <p><?php echo rivett_nav_e($product['description']); ?></p>
                            <?php endif; ?>
                            <?php if (!empty($product['points'])): ?>
                            <ul>
                                <?php foreach ($product['points'] as $point): ?>
                                <li><i class="fa-solid fa-angle-right"></i><?php echo rivett_nav_e($point); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                            <a href="<?php echo rivett_nav_e($product['url'] ?? '#'); ?>" class="link-arrow">View More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        <?php else: ?>

            <div class="row <?php echo rivett_nav_e($row_class); ?>">
                <?php foreach ($section['products'] as $product): ?>
                <div class="<?php echo rivett_nav_e($col_class); ?>">
                    <div class="garage-card">
                        <div class="garage-card-img">
                            <img src="<?php echo rivett_nav_e($product['image']); ?>" width="<?php echo (int) $img_width; ?>" height="<?php echo (int) $img_height; ?>"
                                 alt="<?php echo rivett_nav_e($product['alt'] ?? $product['name']); ?>" class="img-fluid" loading="lazy" decoding="async" />
                        </div>
                        <div class="garage-card-content">
                            <h3><?php echo rivett_nav_e($product['name']); ?></h3>
                            <?php if (!empty($product['points'])): ?>
                            <ul>
                                <?php foreach ($product['points'] as $point): ?>
                                <li><i class="fa-solid fa-angle-right"></i><?php echo rivett_nav_e($point); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                            <?php if (!empty($product['description'])): ?>
                            <p><?php echo rivett_nav_e($product['description']); ?></p>
                            <?php endif; ?>
                            <a href="<?php echo rivett_nav_e($product['url'] ?? '#'); ?>" class="link-arrow">View More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        <?php endif; ?>
    </div>
</section>

<?php if (!empty($section['video']['src'])): ?>
<section class="big-iframe-sec rivett-padding">
    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <iframe width="100%" height="auto" src="<?php echo rivett_nav_e($section['video']['src']); ?>" title="<?php echo rivett_nav_e($section['video']['title'] ?? 'YouTube video player'); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php endforeach; ?>


<?php include 'common-sections/testimonial-section.php'; ?>

<?php include 'common-sections/location-mapping-sec.php'; ?>

<?php include 'footer.php'; ?>
