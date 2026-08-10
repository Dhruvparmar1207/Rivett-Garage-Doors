 </main>

  <!-- ============================= FOOTER ============================= -->
  <footer class="site-footer footer-sec">
    <div class="container-md">
      <div class="row footer-cols ">
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12 quick-links">
          <h4 class="footer-h">Quick Links</h4>
          <ul class="footer-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#">Terms &amp; Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12 resi-doors-links">
          <h4 class="footer-h">Residential Garage Doors</h4>
          <ul class="footer-links">
            <li><a href="#">By Series</a></li>
            <li><a href="#">By Door Type</a></li>
            <li><a href="#">Security Doors and Retractable Screens</a></li>
            <li><a href="#">Openers</a></li>
            <li><a href="#">Residential Parts &amp; Service</a></li>
          </ul>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12 como-doors-links">
          <h4 class="footer-h">Commercial Overhead Doors</h4>
          <ul class="footer-links">
            <li><a href="commercial-overhead-doors.php">Overhead Doors</a></li>
            <li><a href="commercial-doors/rolling-steel.php">Rolling Steel</a></li>
            <li><a href="#">High-Speed Specialty Doors</a></li>
            <li><a href="#">Operators</a></li>
            <li><a href="#">Commercial Parts &amp; Service</a></li>
          </ul>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12 loding-dock-links">
          <h4 class="footer-h">Loading Dock Equipment</h4>
          <ul class="footer-links">
            <li><a href="#">Dock Levelers</a></li>
            <li><a href="#">Dock Seal</a></li>
            <li><a href="#">Dock Shelters</a></li>
            <li><a href="#">Dock Enclosures</a></li>
            <li><a href="#">Bumpers</a></li>
            <li><a href="#">Accessories</a></li>
          </ul>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12 security-shutters-links">
          <h4 class="footer-h">Security Shutters</h4>
          <ul class="footer-links">
            <li><a href="#">Pentagon</a></li>
            <li><a href="#">Ultra Lite</a></li>
            <li><a href="#">Roll Pro</a></li>
            <li><a href="#">Retractable Screens</a></li>
          </ul>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12 doors-hardware-links">
          <h4 class="footer-h">Doors &amp; Hardware</h4>
          <ul class="footer-links">
            <li><a href="#">Hollow Metal &amp; Steel Doors</a></li>
            <li><a href="#">Wood Doors</a></li>
            <li><a href="#">Specialty Doors</a></li>
            <li><a href="#">Traffic &amp; Impact Doors</a></li>
            <li><a href="#">Hardware &amp; Parts</a></li>
            <li><a href="#">Commercial Parts &amp; Service</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-brand">
        <img src="src/images/footer-rivett-logo.webp" alt="Rivett Architectural Hardware Ltd." width="300" height="80"
          class="img-fluid">
        <div class="footer-social">
          <div class="social-item">
            <a href="#" aria-label="Facebook">
              <img src="./src/images/fb-icon.svg" alt="Facebook" width="36" height="36" class="img-fluid">
            </a>
          </div>

          <div class="social-item">
            <a href="#" aria-label="Instagram">
              <img src="./src/images/insta-icon.svg" alt="Instagram" width="36" height="36" class="img-fluid">
            </a>
          </div>

          <div class="social-item">
            <a href="#" aria-label="YouTube">
              <img src="./src/images/youtube-icon.svg" alt="YouTube" width="36" height="36" class="img-fluid">
            </a>
          </div>

          <div class="social-item">
            <a href="#" aria-label="Call">
              <img src="./src/images/location-icon.svg" alt="Call" width="36" height="36" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <section class="copy-right-sec">
    <div class="container-md">
      <div class="row">
        <div class="col-12">
          <p>© 2026 Rivett Architectural Hardware Ltd. All rights reserved.</p>
        </div>
      </div>
    </div>
  </section>















  <?php include 'common-sections/call-popup.php'; ?>

  <!-- Scripts (reuse existing project libraries) -->
  <script src="src/js/jquery-3.7.1.min.js"></script>
  <script src="src/js/bootstrap.bundle.min.js"></script>
  <script src="src/js/owl.carousel.min.js"></script>
  <script src="src/js/jquery.magnific-popup.min.js"></script>
  <script src="src/js/custom.js"></script>

  <?php
  /**
   * Page-specific scripts. A template sets $page_scripts before including
   * this file and only that page pays for the request — the same
   * convention as $page_body_class in header.php. These load after
   * custom.js, because page scripts build on the shared handlers it
   * registers (Product-page.php's Door Options accordion sits on top of
   * the .rv-tabs handler, for one).
   */
  if (!empty($page_scripts)) :
      foreach ((array) $page_scripts as $page_script) : ?>
  <script src="<?php echo htmlspecialchars($page_script, ENT_QUOTES, 'UTF-8'); ?>"></script>
  <?php endforeach;
  endif; ?>

</body>

</html>