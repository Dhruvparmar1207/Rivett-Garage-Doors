<!DOCTYPE html>

<html lang="en">



<?php
/* A page may set $page_title / $page_description before including this
   file to override the sitewide defaults below — the brand pages do.
   Every other template is unaffected and keeps the defaults. */
$rivett_default_title = 'Rivett Architectural Hardware | Garage Doors, Overhead Doors & Hardware Since 1977';
$rivett_default_desc  = 'Rivett Architectural Hardware Ltd. — residential garage doors, commercial overhead doors, loading dock equipment, hollow metal doors and architectural hardware. Family-owned across Ontario since 1977.';

$rivett_head_title = isset($page_title) && $page_title !== '' ? $page_title : $rivett_default_title;
$rivett_head_desc  = isset($page_description) && $page_description !== '' ? $page_description : $rivett_default_desc;
?>
<head>

<base href="/rivett/">

  <meta charset="UTF-8">

  <meta name='robots' content='noindex, nofollow' />

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo htmlspecialchars($rivett_head_title, ENT_QUOTES, 'UTF-8'); ?></title>

  <meta name="description"

    content="<?php echo htmlspecialchars($rivett_head_desc, ENT_QUOTES, 'UTF-8'); ?>">



  <!-- Fonts (declared in common.css: Prompt, Onest, DM Sans) -->

  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link

    href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;500;600;700&family=Onest:wght@400;500;600;700&family=DM+Sans:wght@400;500;700&display=swap"

    rel="stylesheet">



  <!-- Icons (Font Awesome CDN) -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


  <link rel="icon" href="./src/images/favicon-icon.png" sizes="32x32" />



  <!-- Project styles (reuse existing architecture) -->

  <link rel="stylesheet" href="src/css/bootstrap.min.css">

  <link rel="stylesheet" href="src/css/owl.carousel.min.css">

  <link rel="stylesheet" href="src/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="src/css/magnific-popup.css">

  <link rel="stylesheet" href="src/css/custom_container.css">

  <link rel="stylesheet" href="src/css/common.css">

  <link rel="stylesheet" href="src/css/home.css">

  <link rel="stylesheet" href="src/css/about-us.css">

  <link rel="stylesheet" href="src/css/header-footer.css">
  
  <link rel="stylesheet" href="src/css/service-pages.css">

  <link rel="stylesheet" href="src/css/product-page.css">

  <link rel="stylesheet" href="src/css/brand-page.css">
</head>


<?php
$current_page = basename($_SERVER['PHP_SELF'], ".php");

// A page may add its own body class by setting $page_body_class before
// including this file — the brand pages tag themselves that way so one
// stylesheet can serve all of them.
$rivett_body_class = trim($current_page . ' ' . (isset($page_body_class) ? $page_body_class : ''));

// One tree, two renderers — edit common-sections/nav-menu.php only.
require_once __DIR__ . '\common-sections\nav-menu.php';
require_once __DIR__ . '\common-sections\nav-render.php';
?>

<body class="<?php echo htmlspecialchars($rivett_body_class, ENT_QUOTES, 'UTF-8'); ?>">



  <!-- ============================= HEADER ============================= -->


  <header class="site-header header rivett-cmn" id="my-header">

    <div class="container-md">

      <div class="row align-items-end desktop-header">



        <!-- Logo -->

        <div class="col-lg-2 col-md-3 col-6">

          <a href="index.php" class="header-logo" aria-label="Rivett Architectural Hardware home">

            <img src="src/images/header-logo.webp" alt="Rivett Architectural Hardware Ltd." class="img-fluid">

          </a>

        </div>




        <!-- Navigation -->

        <div class="col-lg-8 d-none d-lg-block">

          <nav class="main-nav" id="mainNav" aria-label="Primary">

            <!-- Rendered from common-sections/nav-menu.php — edit the tree
                 there and both this menu and the mobile drawer follow. The
                 markup stays depth-agnostic: any <li> carrying .has-sub
                 reveals its own > ul.nav-submenu, so a branch can nest as
                 deeply as the IA needs without extra CSS. -->
            <?php rivett_desktop_nav($RIVETT_NAV); ?>

          </nav>

        </div>



        <!-- Right Buttons -->

        <div class="col-lg-2 col-md-9 col-6 text-end">



          <div class="righ-side-btn-sec d-none d-lg-flex align-items-center">

            <div class="main-nav-cta">

              <a href="#" class="nav-plain">About</a>

              <a href="tel:19056684455" class="nav-plain nav-call" data-call-popup
                aria-haspopup="dialog" aria-controls="callPopup">

                <i class="fa-solid fa-phone"></i> Call Now

              </a>

            </div>



            <!-- <a href="#contact" class="cmn-btn ms-3">Get in Touch</a> -->
            <a href="contact-us.php" target="_blank" rel="noopener noreferrer"  class="cmn-btn ms-3">Get in Touch</a>

          </div>

        </div>



      </div>

      <div class="mobile-header">
                <div class="row mobile-header">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mobile-col">
                        <a href="/" aria-label="Header Logo" class="header-logo">
                                <img src="src/images/header-logo.webp" alt="Rivett Architectural Hardware Ltd." class="img-fluid">
                              </a>

                        <div class="mobile-toggle-sec">
                            <div class="menu-toggle">
                                <a href="tel:19056684455" class="nav-toggle-call" aria-label="Call now"
                                  data-call-popup aria-haspopup="dialog" aria-controls="callPopup">
                                  <img src="src/images/header-call.png" alt="Rivett Architectural Hardware Ltd." class="img-fluid">
                                 </a>

                                <button class="navbar-toggler" type="button" aria-label="nav-open-button">
                                    <img src="./src/images/toggler_new.svg" alt="" width="34" height="24"
                                        class="open-icon img-fluid" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="header-menu mobile-header-menu ">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mobile-col">
                            <a href="" aria-label="Header Logo" class="header-logo"> 
                              <img
                                    src="./src/images/header-logo.webp" alt="Rivett Architectural Hardware Ltd."
                                    class="img-fluid brand-logo-mobile" loading="lazy" /></a>

                            <div class="mobile-toggle-sec">
                                <div class="menu-toggle">
                                    <a href="tel:19056684455" aria-label="Call" data-call-popup
                                        aria-haspopup="dialog" aria-controls="callPopup"><img
                                            src="./src/images/header-call.png" alt="" width="36" height="36"
                                            class="mobile-tel img-fluid" /></a>
                                    <button class="navbar-toggler mobile-close-icon-new" type="button"
                                        aria-label="nav-open-button">
                                        <img src="./src/images/close-icon.svg" alt="" width="20" height="20"
                                            class="close-icon img-fluid" />
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-navigation-menu">
                            <!-- Same tree as the desktop menu, rendered as the
                                 drill-down drawer: every branch is a
                                 li.mobile-drop-list whose div.sub-menu panel
                                 slides in over the one before it, at any depth.
                                 custom.js injects the Back bar. -->
                            <?php rivett_mobile_nav($RIVETT_NAV); ?>
                            <div class="mobile-btn-nav header-btn">
                                <a href="<?php echo htmlspecialchars($RIVETT_NAV_CTA['url'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($RIVETT_NAV_CTA['label'], ENT_QUOTES, 'UTF-8'); ?></a>
                            </div>

                        </div>



                    </div>

                </div>

            </div>


      

    </div>

  </header>




  <main>