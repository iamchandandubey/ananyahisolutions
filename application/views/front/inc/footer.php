<!-- Footer -->
<footer class="footer text-white pt-5">
  <div class="container">
    <div class="row g-4">

      <!-- Logo & About -->
      <div class="col-md-4">
        <a href="<?= base_url() ?>" class="d-inline-block mb-3">
          <img src="<?= base_url('assets/front/images/ahs-logo.png') ?>" alt="AHS Logo" style="max-height: 60px;">
        </a>
        <p>
          We are a professional Web Design & Digital Marketing agency in Hyderabad, 
          delivering creative solutions that help businesses grow online.
        </p>
      </div>

      <!-- Quick Links -->
      <div class="col-6 col-md-2">
        <h5 class="mb-3">Quick Links</h5>
        <ul class="list-unstyled footer-links">
          <li><a href="<?= base_url() ?>">Home</a></li>
          <li><a href="<?= base_url('about') ?>">About Us</a></li>
          <li><a href="<?= base_url('careers') ?>">Careers</a></li>
          <li><a href="#">Payment Terms</a></li>
          <li><a href="#">News</a></li>
          <li><a href="<?= base_url('contact') ?>">Contact</a></li>
        </ul>
      </div>

      <!-- Services Links -->
      <div class="col-6 col-md-3">
        <h5 class="mb-3">Our Services</h5>
        <ul class="list-unstyled footer-links">
          <li><a href="<?= base_url('website-design') ?>">Website Design</a></li>
          <li><a href="<?= base_url('digital-marketing') ?>">Digital Marketing</a></li>
          <li><a href="<?= base_url('mobile-application') ?>">Mobile Application</a></li>
          <li><a href="<?= base_url('ecommerce-application-development') ?>">eCommerce Application</a></li>
          <li><a href="<?= base_url('video-production') ?>">Video Production</a></li>
          <li><a href="<?= base_url('software-development') ?>">Software Development</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="col-md-3">
        <h5 class="mb-3">Contact Us</h5>
        <p>
          <i class="bi bi-geo-alt-fill me-2"></i> 
          <a href="https://maps.app.goo.gl/CAftcYrScrB2igQo6" target="_blank" class="contact-link">
            401 Sravya Vatika, Greenlands, Begumpet, Hyderabad, Telangana-500016
          </a>
        </p>
        <p>
          <i class="bi bi-telephone-fill me-2"></i> 
          <a href="tel:+917673935353" class="contact-link">(+91) 76739-35353</a>
        </p>
        <p>
          <i class="bi bi-envelope-fill me-2"></i> 
          <a href="mailto:info@ananyahisolutions.com" class="contact-link">info@ananyahisolutions.com</a>
        </p>

        <!-- Social Media -->
        <div class="social-icons mt-3">
          <a href="https://www.facebook.com/AnanyaHiSolutions/"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/ananyahisolutions/"><i class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/company/ananya-hi-solutions"><i class="bi bi-linkedin"></i></a>
          <!-- <a href="#"><i class="bi bi-twitter"></i></a>
          <a href="#"><i class="bi bi-youtube"></i></a> -->
        </div>
      </div>

    </div>

    <hr class="my-4 border-light">

    <!-- Bottom -->
    <div class="text-center pb-3">
      <p class="mb-0">&copy; 2025 Ananya Hi Solutions. All Rights Reserved.</p>
    </div>
  </div>
</footer>

<!-- WhatsApp Chatbot Floating Icon -->
<div class="chatbot-wrapper">
  <!-- Tooltip / Speech Bubble -->
  <div class="chatbot-tooltip">Hi, I’m Ananya 👋</div>

  <!-- Chatbot Icon -->
  <a href="https://wa.me/917673935353?text=Hi%20Ananya%20Team,%20I%20need%20assistance!" 
     target="_blank" 
     class="chatbot-icon" 
     aria-label="Chat with Ananya Hi Solutions">
    <img src="<?= base_url('assets/front/images/ananya.png') ?>" alt="Ananya Girl Chatbot">
  </a>
</div>
<!-- End WhatsApp Chatbot Floating Icon -->





<script src="<?= base_url('assets/front/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/front/js/myInteractivity.js') ?>"></script>


<!-- jQuery + Owl Carousel JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
  $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      loop:true,
      margin:24,
      nav:false,
      dots:true,
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      smartSpeed:600,
      responsive:{
        0:{ items:1 },
        576:{ items:1 },
        768:{ items:2 },
        992:{ items:3 }
      }
    });
  });
</script>

</body>
</html>