<nav class="navbar navbar-expand-lg navbar-dark sticky-top custom-navbar" style="z-index: 5000;">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand" href="<?= base_url() ?>">
      <img src="<?= base_url('assets/front/images/ahs-logo.png') ?>" alt="AHS Logo" class="d-inline-block align-text-top">
    </a>

    <!-- Toggler for Offcanvas -->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
      aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

   

    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-end primaryBgClr" tabindex="-1" id="offcanvasNavbar"
      aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <!-- Home -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
          </li>
          <!-- About -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('about') ?>">About</a>
          </li>
          <!-- Services Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= base_url('website-design') ?>">Website Design</a></li>
              <li><a class="dropdown-item" href="<?= base_url('digital-marketing') ?>">Digital Marketing</a></li>
              <li><a class="dropdown-item" href="<?= base_url('mobile-application') ?>">Mobile Application</a></li>
              <li><a class="dropdown-item" href="<?= base_url('ecommerce-application-development') ?>">eCommerce Application</a></li>
              <li><a class="dropdown-item" href="<?= base_url('video-production') ?>">Video Production</a></li>
              <li><a class="dropdown-item" href="<?= base_url('software-development') ?>">Software Development</a></li>
            </ul>
          </li>
          <!-- Contact -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('contact') ?>">Contact Us</a>
          </li>
        </ul>

        <!-- CTA Button -->
        <div class="d-flex mt-3 mt-lg-0">
          <a href="<?= base_url("ananya-hi-solutions-package") ?>" class="btn btn-primary ms-lg-3">
            <i class="bi bi-calendar-check me-2"></i> Choose Package
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>