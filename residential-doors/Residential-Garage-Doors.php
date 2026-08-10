<?php

include(__DIR__ . '/../header.php');




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

$hero_label = 'residental garage doors';

$hero_slides = [
[
    'eyebrow'   => 'Residential Garage Doors',
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
    'eyebrow'   => 'Parts &amp; Service',
    'heading'   => "Broken Spring? We're On It.",
    'text'      => 'Factory-trained technicians and genuine replacement parts, with residential service calls across Durham Region, the GTA, Kingston, and Eastern Ontario.',
    'cta_label' => 'Book a Service Call',
    'cta_url'   => 'contact-us.php',
    'image'     => './src/images/Residental-banner-img.webp',
    'alt'       => '',
],

]


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


<section class="rivett-padding rivett-cmn all-garage-doors-card-sec">
    <div class="container-md">
        <div class="row">
        <div class="col-xxl-8 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 top-heading">
          <h2>Traditional Garage Doors</h2>
          <p >Rivett's Traditional garage doors feature up to 8 panel styles and 12 colour options. Traditional panel styles include Raised Ranch, Raised Colonial, Recessed Grooved Ranch, Recessed Grooved Colonial, Recessed Smooth, and Mixed Panel.</p>
        </div>
        </div>
        <div class="row card-list-row-grid">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec">
                <div class="garage-card">
                    <div class="garage-card-img">
                        <img src="./src/images/classic-l138.webp" width="810" height="398" class="img-fluid"
                             />
                    </div>
                    <div class="garage-card-content">
                        <h3>Classic (L138)</h3>
                        <ul>
                            <li><i class="fa-solid fa-angle-right"></i>1 3/8″ Neufoam™ Polyurethane Insulated Garage Door (R12).</li>
                            <li><i class="fa-solid fa-angle-right"></i>12 Colour Options and 7 Panel Styles Available.</li>
                        </ul>
                        <a href="residential-doors/by-door-type/traditional/classic-l138.php" class="link-arrow">View More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec">
                <div class="garage-card">
                    <div class="garage-card-img">
                        <img src="./src/images/premium-l200.webp" width="810" height="398" class="img-fluid"/>
                    </div>
                    <div class="garage-card-content">
                        <h3>Premium (L200)</h3>
                        <ul>
                            <li><i class="fa-solid fa-angle-right"></i>2” Neufoam™ Polyurethane Insulated Garage Door (R18).</li>
                            <li><i class="fa-solid fa-angle-right"></i>12 Colour Options and 8 Panel Styles Available.</li>
                        </ul>
                        <a href="residential-doors/by-door-type/traditional/premium-l200.php" class="link-arrow">View More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec">
                <div class="garage-card">
                    <div class="garage-card-img">
                        <img src="./src/images/grandview-l200gv.webp" width="810" height="398"
                             class="img-fluid"
                             />
                    </div>
                    <div class="garage-card-content">
                        <h3>Grandview (L200GV)</h3>
                        <ul>
                            <li><i class="fa-solid fa-angle-right"></i>2” Neufoam™ Polyurethane Insulated Garage Door (R18).</li>
                            <li><i class="fa-solid fa-angle-right"></i>Featuring Large Dual-pane Insulated Windows Providing Elegance to Your Home.</li>
                            <li><i class="fa-solid fa-angle-right"></i>12 Colour Options and 7 Panel Styles Available.</li>

                        </ul>
                        <a href="residential-doors/by-door-type/traditional/grandview-l200gv.php" class="link-arrow">View More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec">
                <div class="garage-card">
                    <div class="garage-card-img">
                        <img src="./src/images/milestone-series.webp" width="810" height="398"
                             class="img-fluid"
                             />
                    </div>
                    <div class="garage-card-content">
                        <h3>Milestone Series</h3>
                        <ul>
                            <li><i class="fa-solid fa-angle-right"></i>2-Sided Steel With 2″ Polystyrene Insulation (R10).</li>
                            <li><i class="fa-solid fa-angle-right"></i>7 Panel Styles and 11 Colour Options Available.</li>
                        </ul>
                        <a href="residential-doors/by-door-type/traditional/milestone-series.php" class="link-arrow">View More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>

             <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec">
                <div class="garage-card">
                    <div class="garage-card-img">
                        <img src="./src/images/canton.webp" width="810" height="398"
                             class="img-fluid"
                             />
                    </div>
                    <div class="garage-card-content">
                        <h3>Canton</h3>
                        <ul>
                            <li><i class="fa-solid fa-angle-right"></i>Polystyrene Insulated Garage Door (R6.6)</li>
                            <li><i class="fa-solid fa-angle-right"></i>Single or Double-Sided Steel Non-Insulated Garage Doors Also Available.</li>
                            <li><i class="fa-solid fa-angle-right"></i>2 Panel Style and 4 Colours Available.</li>


                        </ul>
                        <a href="residential-doors/by-door-type/traditional/canton.php" class="link-arrow">View More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>



        </div>
    </div>
</section>



<section class="rivett-padding rivett-cmn all-garage-doors-card-sec bg-grey-light">
    <div class="container-md">
        <div class="row">
        <div class="col-xxl-8 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 top-heading">
          <h2>Contemporary Garage Doors</h2>
          <p >Rivett's Contemporary doors allow for customizable window placement. Your imagination is the limit in how you can design these modern-looking garage doors.</p>
        </div>
        </div>
        <div class="row card-list-row-grid">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec">
                <div class="garage-card">
                    <div class="garage-card-img">
                        <img src="./src/images/classic-contemporary-l138c.webp" width="810" height="398"
                             class="img-fluid"
                             />
                    </div>
                    <div class="garage-card-content">
                        <h3>Classic Contemporary L138C</h3>
                        <ul>
                            <li><i class="fa-solid fa-angle-right"></i>1 3/8 (R12) Neufoam™ Polyurethane Insulated Garage Door.</li>
                            <li><i class="fa-solid fa-angle-right"></i>Features Customizable Window Placement for a Modern Look.</li>
                            <li><i class="fa-solid fa-angle-right"></i>12 Colour Options and 2 Panel Styles Available.</li>


                        </ul>
                        <a href="residential-doors/by-door-type/contemporary-modern/classic-contemporary.php" class="link-arrow">View More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec">
                <div class="garage-card">
                    <div class="garage-card-img">
                        <img src="./src/images/premium-contemporary-l200c.webp" width="810" height="398"
                             class="img-fluid"
                             />
                    </div>
                    <div class="garage-card-content">
                        <h3>Premium Contemporary L200C</h3>
                        <ul>
                            <li><i class="fa-solid fa-angle-right"></i>2”(R18) Neufoam™ Polyurethane Insulated Garage Door.</li>
                            <li><i class="fa-solid fa-angle-right"></i>Features Customizable Window Placement For a Modern Look.</li>
                            <li><i class="fa-solid fa-angle-right"></i>12 Colour Options and 8 Panel Styles Available.</li>
                        </ul>
                        <a href="residential-doors/by-door-type/contemporary-modern/premium-contemporary.php" class="link-arrow">View More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec">
                <div class="garage-card">
                    <div class="garage-card-img">
                        <img src="./src/images/contemporary-rockwood-l200rw.webp" width="810" height="398"
                             class="img-fluid"
                             />
                    </div>
                    <div class="garage-card-content">
                        <h3>Contemporary Rockwood L200RW</h3>
                        <ul>
                            <li><i class="fa-solid fa-angle-right"></i>2” Neufoam™ Polyurethane Garage Door (R19).</li>
                            <li><i class="fa-solid fa-angle-right"></i>Features 1” Cedar Board Applied To 2” Landmark Panel.</li>
                            <li><i class="fa-solid fa-angle-right"></i>Customizable Colours and Designs Available.</li>

                        </ul>
                        <a href="residential-doors/by-door-type/custom-wood-door/contemporary-rockwood.php" class="link-arrow">View More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>

           



        </div>
    </div>
</section>



<section class="rivett-padding rivett-cmn all-garage-doors-card-sec">
    <div class="container-md">
        <div class="row">
        <div class="col-xxl-8 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 top-heading">
          <h2>Carriage House Garage Doors</h2>
          <p>Rivett's Carriage House doors all have a rural feel that would look great on any country home. All Carriage House models feature the same environmentally-friendly features that come standard across Rivett's garage door lineup.</p>
        </div>
        </div>
        <div class="row card-list-row-grid">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec">
                <div class="garage-card">
                    <div class="garage-card-img">
                        <img src="./src/images/echo-ridge-l138er.webp" width="810" height="398"
                             class="img-fluid"
                             />
                    </div>
                    <div class="garage-card-content">
                        <h3>Echo Ridge (L138ER)</h3>
                        <ul>
                            <li><i class="fa-solid fa-angle-right"></i>1 3/8” Neufoam™ Polyurethane Insulated Carriage House Garage Door (R12).</li>
                            <li><i class="fa-solid fa-angle-right"></i>Four-Section Door With Carriage House Fibrex® Overlay Boards.</li>
                            <li><i class="fa-solid fa-angle-right"></i>9 Colour Options, 2 Overlay Colour Options and 5 Panel Styles Available.</li>
                        </ul>
                        <a href="residential-doors/by-door-type/carriage-house/echo-ridge.php" class="link-arrow">View More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec">
                <div class="garage-card">
                    <div class="garage-card-img">
                        <img src="./src/images/briarcrest-l200bc.webp" width="810" height="398"
                             class="img-fluid"
                             />
                    </div>
                    <div class="garage-card-content">
                        <h3>Briarcrest (L200BC)</h3>
                        <ul>
                            <li><i class="fa-solid fa-angle-right"></i>2” Neufoam™ Polyurethane Insulated Carriage House Garage Door (R18).</li>
                            <li><i class="fa-solid fa-angle-right"></i>Recessed Panel Design With Inlays to Provide a Carriage House Look.</li>
                             <li><i class="fa-solid fa-angle-right"></i>9 Colour Options and 5 Panel Styles Available.</li>
                        </ul>
                        <a href="residential-doors/by-door-type/carriage-house/briarcrest.php" class="link-arrow">View More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec">
                <div class="garage-card">
                    <div class="garage-card-img">
                        <img src="./src/images/echo-ridge-xl-l200erx.webp" width="810" height="398"
                             class="img-fluid"
                             />
                    </div>
                    <div class="garage-card-content">
                        <h3>Echo Ridge XL (L200ERX)</h3>
                        <ul>
                            <li><i class="fa-solid fa-angle-right"></i>2” Neufoam™ Polyurethane Insulated Carriage House Garage Door (R18).</li>
                            <li><i class="fa-solid fa-angle-right"></i>Three-Section Door With Carriage House With Fibrex® Overlay Boards.</li>
                            <li><i class="fa-solid fa-angle-right"></i>6 Panel Styles Available.</li>

                        </ul>
                        <a href="residential-doors/by-door-type/carriage-house/echo-ridge-xl.php" class="link-arrow">View More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-card-sec">
                <div class="garage-card">
                    <div class="garage-card-img">
                        <img src="./src/images/rockwood-l200rw.webp" width="810" height="398"
                             class="img-fluid"
                             />
                    </div>
                    <div class="garage-card-content">
                        <h3>Rockwood (L200RW)</h3>
                        <ul>
                            <li><i class="fa-solid fa-angle-right"></i>2” Neufoam™ Polyurethane Insulated Carriage House Garage Door (R19).</li>
                            <li><i class="fa-solid fa-angle-right"></i>Features 1” Cedar Board Applied to 2” Landmark Panel.</li>
                            <li><i class="fa-solid fa-angle-right"></i>Customizable Colours and Designs Available.</li>
                        </ul>
                        <a href="residential-doors/by-door-type/custom-wood-door/rockwood.php" class="link-arrow">View More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>

           



        </div>
    </div>
</section>


<?php include(__DIR__ . '/../common-sections/testimonial-section.php'); ?>

<?php include(__DIR__ . '/../common-sections/location-mapping-sec.php'); ?>

<?php 

include(__DIR__ . '/../footer.php');
?>
