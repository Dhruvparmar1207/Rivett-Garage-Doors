<?php
$page_meta = [
    'title'       => 'Residential Garage Doors — Traditional, Contemporary & Carriage House | Rivett',
    'description' => 'Insulated steel and custom wood residential garage doors in traditional, contemporary and carriage house styles — supplied, installed and serviced by Rivett across Durham Region and Eastern Ontario.',
    'keywords'    => 'residential garage doors, insulated garage doors Ontario, carriage house garage doors, contemporary garage doors, garage door installation Durham Region',
    'canonical'   => 'Residential-Garage-Doors.php',
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

$hero_label = 'Residential garage doors';

$hero_slides = [
    [
        'eyebrow'   => 'RESIDENTIAL GARAGE DOORS',
        'heading'   => 'The Right Door For Every Home.',
        'text'      => 'From classic carriage house styles to sleek contemporary panels — Rivett supplies, installs, and services residential garage doors across Durham Region, Kingston, and Ontario.',
        'cta_label' => 'Get a Free Estimate',
        'cta_url'   => 'contact-us.php',
        'image'     => './src/images/Residental-banner-img.webp',
        'alt'       => 'Brick home with a Rivett residential garage door installed',
    ],
    [
        'eyebrow'   => 'By Series',
        'heading'   => 'Four Series. One Perfect Fit.',
        'text'      => 'Landmark, Echo Ridge, Rockwood, and Grandview — insulated steel and custom wood doors in a full range of colours, panel profiles, and window options.',
        'cta_label' => 'Book a Showroom Visit',
        'cta_url'   => 'contact-us.php',
        'image'     => './src/images/Residental-banner-img.webp',
        'alt'       => '',
    ],
    [
        'eyebrow'   => 'Openers',
        'heading'   => 'Openers That Just Work.',
        'text'      => 'LiftMaster and Guardian openers supplied, installed, and backed by our own technicians — quiet belt drives, smartphone control, and battery backup.',
        'cta_label' => 'Get Opener Pricing',
        'cta_url'   => 'contact-us.php',
        'image'     => './src/images/Residental-banner-img.webp',
        'alt'       => '',
    ],
    [
        'eyebrow'   => 'Parts & Service',
        'heading'   => "Broken Spring? We're On It.",
        'text'      => 'Factory-trained technicians and genuine replacement parts, with residential service calls across Durham Region, the GTA, Kingston, and Eastern Ontario.',
        'cta_label' => 'Book a Service Call',
        'cta_url'   => 'contact-us.php',
        'image'     => './src/images/Residental-banner-img.webp',
        'alt'       => '',
    ],
];

/* =====================================================================
   DOOR SECTIONS — CONTENT SOURCE

   One entry per product section, in display order. Everything the page
   shows below the hero comes from here, so a new door line is a new
   entry — no markup to copy.

   Section keys
     heading        section <h2>, e.g. 'Traditional Garage Doors'.
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
     name           product <h3>, e.g. 'Classic (L138)'.
     image          product image path.
     alt            product image alt text.
     url            "View More" link. '#' until the detail page exists.
     description    paragraph of body copy. Optional.
     points         bullet list of specs. Optional.
   ===================================================================== */

$door_sections = [

    [
        'heading'    => 'Traditional Garage Doors',
        'subtitle'   => "Rivett's Traditional garage doors feature up to 8 panel styles and 12 colour options. Traditional panel styles include Raised Ranch, Raised Colonial, Recessed Grooved Ranch, Recessed Grooved Colonial, Recessed Smooth, and Mixed Panel.",
        'layout'     => 'grid',
        'img_width'  => 810,
        'img_height' => 398,
        'products'   => [
            [
                'name'   => 'Classic (L138)',
                'image'  => './src/images/classic-l138.webp',
                'alt'    => 'Classic L138 insulated traditional residential garage door',
                'url'    => 'residential-doors/by-door-type/traditional/classic-l138.php',
                'points' => [
                    '1 3/8″ Neufoam™ Polyurethane Insulated Garage Door (R12).',
                    '12 Colour Options and 7 Panel Styles Available.',
                ],
            ],
            [
                'name'   => 'Premium (L200)',
                'image'  => './src/images/premium-l200.webp',
                'alt'    => 'Premium L200 insulated traditional residential garage door',
                'url'    => 'residential-doors/by-door-type/traditional/premium-l200.php',
                'points' => [
                    '2” Neufoam™ Polyurethane Insulated Garage Door (R18).',
                    '12 Colour Options and 8 Panel Styles Available.',
                ],
            ],
            [
                'name'   => 'Grandview (L200GV)',
                'image'  => './src/images/grandview-l200gv.webp',
                'alt'    => 'Grandview L200GV garage door with large dual-pane insulated windows',
                'url'    => 'residential-doors/by-door-type/traditional/grandview-l200gv.php',
                'points' => [
                    '2” Neufoam™ Polyurethane Insulated Garage Door (R18).',
                    'Featuring Large Dual-pane Insulated Windows Providing Elegance to Your Home.',
                    '12 Colour Options and 7 Panel Styles Available.',
                ],
            ],
            [
                'name'   => 'Milestone Series',
                'image'  => './src/images/milestone-series.webp',
                'alt'    => 'Milestone Series two-sided steel insulated residential garage door',
                'url'    => 'residential-doors/by-door-type/traditional/milestone-series.php',
                'points' => [
                    '2-Sided Steel With 2″ Polystyrene Insulation (R10).',
                    '7 Panel Styles and 11 Colour Options Available.',
                ],
            ],
            [
                'name'   => 'Canton',
                'image'  => './src/images/canton.webp',
                'alt'    => 'Canton polystyrene insulated residential garage door',
                'url'    => 'residential-doors/by-door-type/traditional/canton.php',
                'points' => [
                    'Polystyrene Insulated Garage Door (R6.6)',
                    'Single or Double-Sided Steel Non-Insulated Garage Doors Also Available.',
                    '2 Panel Style and 4 Colours Available.',
                ],
            ],
        ],
    ],

    [
        'heading'       => 'Contemporary Garage Doors',
        'subtitle'      => "Rivett's Contemporary doors allow for customizable window placement. Your imagination is the limit in how you can design these modern-looking garage doors.",
        'layout'        => 'grid',
        'section_class' => 'bg-grey-light',
        'img_width'     => 810,
        'img_height'    => 398,
        'products'      => [
            [
                'name'   => 'Classic Contemporary L138C',
                'image'  => './src/images/classic-contemporary-l138c.webp',
                'alt'    => 'Classic Contemporary L138C modern residential garage door',
                'url'    => 'residential-doors/by-door-type/contemporary-modern/classic-contemporary.php',
                'points' => [
                    '1 3/8 (R12) Neufoam™ Polyurethane Insulated Garage Door.',
                    'Features Customizable Window Placement for a Modern Look.',
                    '12 Colour Options and 2 Panel Styles Available.',
                ],
            ],
            [
                'name'   => 'Premium Contemporary L200C',
                'image'  => './src/images/premium-contemporary-l200c.webp',
                'alt'    => 'Premium Contemporary L200C modern residential garage door',
                'url'    => 'residential-doors/by-door-type/contemporary-modern/premium-contemporary.php',
                'points' => [
                    '2”(R18) Neufoam™ Polyurethane Insulated Garage Door.',
                    'Features Customizable Window Placement For a Modern Look.',
                    '12 Colour Options and 8 Panel Styles Available.',
                ],
            ],
            [
                'name'   => 'Contemporary Rockwood L200RW',
                'image'  => './src/images/contemporary-rockwood-l200rw.webp',
                'alt'    => 'Contemporary Rockwood L200RW cedar-clad modern garage door',
                'url'    => 'residential-doors/by-door-type/custom-wood-door/contemporary-rockwood.php',
                'points' => [
                    '2” Neufoam™ Polyurethane Garage Door (R19).',
                    'Features 1” Cedar Board Applied To 2” Landmark Panel.',
                    'Customizable Colours and Designs Available.',
                ],
            ],
        ],
    ],

    [
        'heading'    => 'Carriage House Garage Doors',
        'subtitle'   => "Rivett's Carriage House doors all have a rural feel that would look great on any country home. All Carriage House models feature the same environmentally-friendly features that come standard across Rivett's garage door lineup.",
        'layout'     => 'grid',
        'img_width'  => 810,
        'img_height' => 398,
        'products'   => [
            [
                'name'   => 'Echo Ridge (L138ER)',
                'image'  => './src/images/echo-ridge-l138er.webp',
                'alt'    => 'Echo Ridge L138ER carriage house style residential garage door',
                'url'    => 'residential-doors/by-door-type/carriage-house/echo-ridge.php',
                'points' => [
                    '1 3/8” Neufoam™ Polyurethane Insulated Carriage House Garage Door (R12).',
                    'Four-Section Door With Carriage House Fibrex® Overlay Boards.',
                    '9 Colour Options, 2 Overlay Colour Options and 5 Panel Styles Available.',
                ],
            ],
            [
                'name'   => 'Briarcrest (L200BC)',
                'image'  => './src/images/briarcrest-l200bc.webp',
                'alt'    => 'Briarcrest L200BC recessed panel carriage house garage door',
                'url'    => 'residential-doors/by-door-type/carriage-house/briarcrest.php',
                'points' => [
                    '2” Neufoam™ Polyurethane Insulated Carriage House Garage Door (R18).',
                    'Recessed Panel Design With Inlays to Provide a Carriage House Look.',
                    '9 Colour Options and 5 Panel Styles Available.',
                ],
            ],
            [
                'name'   => 'Echo Ridge XL (L200ERX)',
                'image'  => './src/images/echo-ridge-xl-l200erx.webp',
                'alt'    => 'Echo Ridge XL L200ERX three-section carriage house garage door',
                'url'    => 'residential-doors/by-door-type/carriage-house/echo-ridge-xl.php',
                'points' => [
                    '2” Neufoam™ Polyurethane Insulated Carriage House Garage Door (R18).',
                    'Three-Section Door With Carriage House With Fibrex® Overlay Boards.',
                    '6 Panel Styles Available.',
                ],
            ],
            [
                'name'   => 'Rockwood (L200RW)',
                'image'  => './src/images/rockwood-l200rw.webp',
                'alt'    => 'Rockwood L200RW cedar-clad carriage house garage door',
                'url'    => 'residential-doors/by-door-type/custom-wood-door/rockwood.php',
                'points' => [
                    '2” Neufoam™ Polyurethane Insulated Carriage House Garage Door (R19).',
                    'Features 1” Cedar Board Applied to 2” Landmark Panel.',
                    'Customizable Colours and Designs Available.',
                ],
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

                                <?php if ($is_first_slide): ?>
                                <h1 id="hero-title" class="banner-heading"><?php echo rivett_nav_e($slide['heading']); ?></h1>
                                <?php else: ?>
                                <h2 class="banner-heading"><?php echo rivett_nav_e($slide['heading']); ?></h2>
                                <?php endif; ?>

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
    