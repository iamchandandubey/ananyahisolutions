
<!-- Start Sliders -->
<div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/front/images/sliders/slider1.jpg" class="d-block w-100" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="assets/front/images/sliders/slider2.jpg" class="d-block w-100" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="assets/front/images/sliders/slider3.jpg" class="d-block w-100" alt="Slide 3">
    </div>
     <div class="carousel-item">
      <img src="assets/front/images/sliders/slider4.jpg" class="d-block w-100" alt="Slide 3">
    </div>
     <div class="carousel-item">
      <img src="assets/front/images/sliders/slider5.jpg" class="d-block w-100" alt="Slide 3">
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- End Sliders -->


<!-- Services Section -->
<div class="container mt-5">
    <div class="headings">
        <h1 class="primaryClr"> Web Design & Development Company Hyderabad</h1>
        <p>No Salesman, Just You & Your Professional Web Expert Agency.</p>
    </div>
    <section class="services py-5">
        <div class="row g-4">

        <!-- Service Card 1 -->
        <div class="col-md-4 col-lg-4 d-flex">
            <a href="<?= base_url('website-design') ?>" class="service-card text-center p-4 shadow-sm h-100 w-100">
            <div class="icon mb-3">
                <i class="bi bi-laptop"></i>
            </div>
            <h5>Website Design</h5>
            <p>Creative, responsive, and modern website design tailored to your business needs.</p>
            </a>
        </div>

        <!-- Service Card 2 -->
        <div class="col-md-4 col-lg-4 d-flex">
            <a href="<?= base_url('digital-marketing') ?>" class="service-card text-center p-4 shadow-sm h-100 w-100">
            <div class="icon mb-3">
                <i class="bi bi-megaphone"></i>
            </div>
            <h5>Digital Marketing</h5>
            <p>Data-driven online marketing strategies to boost your visibility and conversions.</p>
            </a>
        </div>

        <!-- Service Card 3 -->
        <div class="col-md-4 col-lg-4 d-flex">
            <a href="<?= base_url('mobile-application') ?>" class="service-card text-center p-4 shadow-sm h-100 w-100">
            <div class="icon mb-3">
                <i class="bi bi-phone"></i>
            </div>
            <h5>Mobile Application</h5>
            <p>Custom Android & iOS mobile apps to engage your audience on the go.</p>
            </a>
        </div>

        <!-- Service Card 4 -->
        <div class="col-md-4 col-lg-4 d-flex">
            <a href="<?= base_url('ecommerce-application-development') ?>" class="service-card text-center p-4 shadow-sm h-100 w-100">
            <div class="icon mb-3">
                <i class="bi bi-cart"></i>
            </div>
            <h5>eCommerce Application</h5>
            <p>Scalable eCommerce solutions with secure payment integration.</p>
            </a>
        </div>

        <!-- Service Card 5 -->
        <div class="col-md-4 col-lg-4 d-flex">
            <a href="<?= base_url('video-production') ?>" class="service-card text-center p-4 shadow-sm h-100 w-100">
            <div class="icon mb-3">
                <i class="bi bi-camera-reels"></i>
            </div>
            <h5>Video Production</h5>
            <p>Engaging video content that tells your story and attracts more customers.</p>
            </a>
        </div>

        <!-- Service Card 6 -->
        <div class="col-md-4 col-lg-4 d-flex">
            <a href="<?= base_url('software-development') ?>" class="service-card text-center p-4 shadow-sm h-100 w-100">
            <div class="icon mb-3">
                <i class="bi bi-cpu"></i>
            </div>
            <h5>Software Development</h5>
            <p>Custom software solutions to streamline and grow your business.</p>
            </a>
        </div>

        </div>
    </section>  
</div>
<!-- End Services -->



<?php
    //Why Choose
    $this->load->view('front/inc/why_choose_ananya');
    // Review
    $this->load->view('front/home/review');
?>

  <!-- CTA -->
<section class="cta text-center py-5 bg-light">
  <div class="headings mb-3">
    <h2 class="fw-bold">
      Let’s Build Your Growth Story Together 
    </h2>
    <p class="lead">
      It’s <span id="todayDateTime" class="text-warning fw-bold"></span> – 
      the best time to take your business online!
      Choose the right package and chat directly with our web experts on WhatsApp.
    </p>
  </div>

  <div class="d-flex flex-column flex-sm-row justify-content-center">
    <!-- Consultation Button -->
    <a href="<?= base_url("ananya-hi-solutions-package") ?>" class="btn btn-consultation mb-2 mb-sm-0 me-sm-2 px-4 py-2 fw-semibold shadow-sm">
      <i class="bi bi-calendar-check me-2"></i> Choose Package
    </a>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/917673935353?text=Hi%20Ananya%20Team,%20I%20need%20a%20free%20consultation." 
       class="btn btn-whatsapp px-4 py-2 fw-semibold shadow-sm" target="_blank">
      <i class="bi bi-whatsapp me-2"></i> Chat on WhatsApp
    </a>
  </div>
</section>



