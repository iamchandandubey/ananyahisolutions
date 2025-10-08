

  <style>
    .packages-section {
      /* padding: 5rem 0; */
      background: #f8f9fa;
      position: relative;
    }

    .package-card {
      border-radius: 1rem;
      overflow: hidden;
      background: #fff;
      transition: all 0.4s ease-in-out;
      border: 1px solid rgba(0,0,0,0.05);
      position: relative;
      opacity: 0;
      transform: translateY(40px);
      animation: fadeInUp 0.8s ease forwards;
    }

    /* Staggered effect for cards */
    .package-card:nth-child(1) { animation-delay: 0.2s; }
    .package-card:nth-child(2) { animation-delay: 0.4s; }
    .package-card:nth-child(3) { animation-delay: 0.6s; }
    .package-card:nth-child(4) { animation-delay: 0.8s; }
    .package-card:nth-child(5) { animation-delay: 1s; }
    .package-card:nth-child(6) { animation-delay: 1.2s; }
    .package-card:nth-child(7) { animation-delay: 1.4s; }

    /* Card hover shine */
    .package-card::before {
      content: "";
      position: absolute;
      top: -100%;
      left: -45%;
      width: 200%;
      height: 200%;
      background: rgba(255,255,255,0.15);
      transform: rotate(25deg);
      transition: 0.6s;
    }
    .package-card:hover::before {
      top: 100%;
      left: 100%;
    }

    /* Card hover lift */
    .package-card:hover {
      transform: translateY(-12px) scale(1.03);
      box-shadow: 0 18px 40px rgba(0,0,0,0.15);
    }

    /* Package header */
    .package-header h5 {
      font-weight: 600;
    }

    /* Feature list */
    .package-body ul li {
      margin-bottom: 0.6rem;
      font-size: 0.95rem;
    }

    /* Blurred features */
    .feature-list .blurred {
      filter: blur(2px);
      opacity: 0.6;
      transition: all 0.6s ease;
      pointer-events: none;
    }
   
    /* Gradient Button */
    .btn-gradient {
      /* background: linear-gradient(90deg, #0d6efd, #6610f2); */
      background: linear-gradient(135deg, #064267 0%, #1485cb 100%);
      color: #fff;
      border: none;
      border-radius: 50px;
      padding: 0.75rem 2rem;
      position: relative;
      overflow: hidden;
      transition: all 0.4s ease;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      font-weight: 600;
    }

    /* Shine effect */
    .btn-gradient::after {
      content: "";
      position: absolute;
      top: 0;
      left: -75px;
      width: 50px;
      height: 100%;
      background: rgba(255,255,255,0.4);
      transform: skewX(-20deg);
      transition: left 0.7s;
    }
    .btn-gradient:hover::after {
      left: 120%;
    }

    /* Hover zoom */
    .btn-gradient:hover {
      transform: scale(1.08);
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      color: #fff;
    }

    /* Pulse animation */
    @keyframes pulse {
      0% { box-shadow: 0 0 0 0 rgba(13,110,253,0.5); }
      70% { box-shadow: 0 0 0 15px rgba(13,110,253,0); }
      100% { box-shadow: 0 0 0 0 rgba(13,110,253,0); }
    }
    .btn-gradient {
      animation: pulse 2s infinite;
    }

    /* Fade In Up Animation */
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>

<section class="packages-section pt-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold display-6">Digital Marketing Packages</h2>
      <p class="text-muted lead">Ads That Work While You Sleep.</p>
    </div>

    <div class="row g-4">
      <!-- Starter Static Website -->
      <div class="col-md-6 col-lg-4">
        <div class="package-card h-100 shadow-sm position-relative">
          <div class="package-header text-white text-center py-4 rounded-top" style="background-color:#1485cb">
            <h5 class="mb-1">Social Media Marketing</h5>
            <p class="mb-0">Creative, Consistent & Conversion-Focused</p>
          </div>
          <div class="package-body p-4">
            <ul class="list-unstyled mb-4 feature-list">
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>15-18 High-Quality Creative Posts.</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Competitor Analysis.</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Paid Meta Ads.</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Strategy & Content Calendar.</li>
              <li class="blurred"><i class="bi bi-check-circle-fill text-success me-2"></i>Monthly Insights & ROI Reports</li>
              <li class="blurred"><i class="bi bi-check-circle-fill text-success me-2"></i>Social Media Manager Support.</li>
              
            </ul>
            <div class="my-2">
              <h6 class="fw-bold text-dark">Want to know what’s inside our hidden plans?</h6>
              <a href="<?= base_url('package-details/social-media-marketing-package-hyderabad') ?>" class="btn btn-gradient">
                <i class="bi bi-unlock-fill me-2"></i>Unlock Full Packages
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Dynamic Website -->
      <div class="col-md-6 col-lg-4">
        <div class="package-card h-100 shadow-sm">
          <div class="package-header text-white text-center py-4 rounded-top" style="background-color:#25D366;">
            <h5 class="mb-1">Google Ads/PPC Ads</h5>
            <p class="mb-0">From Clicks to Customers</p>
          </div>
          <div class="package-body p-4">
            <ul class="list-unstyled mb-4 feature-list">
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Ads Account Setup & Audit.</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Advanced Keyword Research.</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Conversion Tracking.</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Audience Targeting Strategies.</li>
              <li class="blurred"><i class="bi bi-check-circle-fill text-success me-2"></i>Daily Campaign Monitoring</li>
              <li class="blurred"><i class="bi bi-check-circle-fill text-success me-2"></i>Ads Specialist Support</li>
            </ul>
           <div class="my-2">
              <h6 class="fw-bold text-dark">Want to know what’s inside our hidden plans?</h6>
              <a href="<?= base_url('package-details/google-ads-package-hyderabad') ?>" class="btn btn-gradient">
                <i class="bi bi-unlock-fill me-2"></i>Unlock Full Packages
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- E-Commerce Website -->
      <div class="col-md-6 col-lg-4">
        <div class="package-card h-100 shadow-sm">
          <div class="package-header text-dark text-center py-4 rounded-top" style="background-color:#f6b93b">
            <h5 class="mb-1">Search Engine Optmization(SEO)</h5>
            <p class="mb-0">From Keywords to Conversions</p>
          </div>
          <div class="package-body p-4">
            <ul class="list-unstyled mb-4 feature-list">
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Free Website Audit.</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Keyword Research & Strategy. </li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Competitor Analysis & Reporting. </li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>High-Quality Backlink Building. </li>
              <li class="blurred"><i class="bi bi-check-circle-fill text-success me-2"></i>On-Page SEO Optimization. </li>
              <li class="blurred"><i class="bi bi-check-circle-fill text-success me-2"></i>Monthly Performance & Ranking Reports.</li>
            </ul>
           <div class="my-2">
              <h6 class="fw-bold text-dark">Want to know what’s inside our hidden plans?</h6>
              <a href="<?= base_url('package-details/seo-package-hyderabad') ?>" class="btn btn-gradient">
                <i class="bi bi-unlock-fill me-2"></i>Unlock Full Packages
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Add rest of your packages here (SEO, Google Ads, Social Media, Complete Digital Marketing) 
           Just copy the same structure and replace content -->

    </div>
  </div>
</section>


<section class="packages-section py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold display-6">Website Packages</h2>
      <p class="text-muted lead">No More Website Worries. Say Goodbye to Website Concerns.</p>
    </div>

    <div class="row g-4">

      <!-- Starter Static Website -->
      <div class="col-md-6 col-lg-4">
        <div class="package-card h-100 shadow-sm position-relative">
          <div class="package-header text-white text-center py-4 rounded-top" style="background-color:#1485cb">
            <h5 class="mb-1">Starter Static Website</h5>
            <p class="mb-0">Perfect for Small Businesses</p>
          </div>
          <div class="package-body p-4">
            <ul class="list-unstyled mb-4 feature-list">
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Up to 6 Web Pages Website.</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>FREE Web Hosting & SSL for 1 year.</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>1 Week FREE Support After Deployment.</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Responsive Design.</li>
              <li class="blurred"><i class="bi bi-check-circle-fill text-success me-2"></i>Basic SEO Setup.</li>
              <li class="blurred"><i class="bi bi-check-circle-fill text-success me-2"></i>Browser Compatibility Testing.</li>
              <li class="blurred"><i class="bi bi-check-circle-fill text-success me-2"></i>Google Page Speed Optimized.</li>
            </ul>
           <div class="my-2">
              <h6 class="fw-bold text-dark">Want to know what’s inside our hidden plans?</h6>
              <a href="<?= base_url('package-details/static-website-package-hyderabad') ?>" class="btn btn-gradient">
                <i class="bi bi-unlock-fill me-2"></i>Unlock Full Packages
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Dynamic Website -->
      <div class="col-md-6 col-lg-4">
        <div class="package-card h-100 shadow-sm">
          <div class="package-header text-white text-center py-4 rounded-top" style="background-color:#25D366;">
            <h5 class="mb-1">Dynamic Website</h5>
            <p class="mb-0">Best for Growing Businesses</p>
          </div>
          <div class="package-body p-4">
            <ul class="list-unstyled mb-4 feature-list">
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Unlimited Dynamic Web Pages Website.</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>FREE Web Hosting & SSL for 1 year.</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>1 Week FREE Support After Deployment.</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Responsive Design.</li>
              <li class="blurred"><i class="bi bi-check-circle-fill text-success me-2"></i>Basic SEO Setup.</li>
              <li class="blurred"><i class="bi bi-check-circle-fill text-success me-2"></i>Browser Compatibility Testing.</li>
              <li class="blurred"><i class="bi bi-check-circle-fill text-success me-2"></i>Google Page Speed Optimized.</li>
            </ul>
            <div class="my-2">
              <h6 class="fw-bold text-dark">Want to know what’s inside our hidden plans?</h6>
              <a href="<?= base_url('package-details/dynamic-website-package-hyderabad') ?>" class="btn btn-gradient">
                <i class="bi bi-unlock-fill me-2"></i>Unlock Full Packages
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- E-Commerce Website -->
      <div class="col-md-6 col-lg-4">
        <div class="package-card h-100 shadow-sm">
          <div class="package-header text-dark text-center py-4 rounded-top" style="background-color:#f6b93b">
            <h5 class="mb-1">E-Commerce Website</h5>
            <p class="mb-0">Ideal for Online Stores</p>
          </div>
          <div class="package-body p-4">
            <ul class="list-unstyled mb-4 feature-list">
             <li><i class="bi bi-check-circle-fill text-success me-2"></i>Add & Manage Unlimited Store Products.</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Shopping Cart System.</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Easy Checkout System.</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Secure Payment Gateway Integration.</li>
              <li class="blurred"><i class="bi bi-check-circle-fill text-success me-2"></i>Basic SEO Setup.</li>
              <li class="blurred"><i class="bi bi-check-circle-fill text-success me-2"></i>Browser Compatibility Testing.</li>
              <li class="blurred"><i class="bi bi-check-circle-fill text-success me-2"></i>Google Page Speed Optimized.</li>
            </ul>
          <div class="my-2">
              <h6 class="fw-bold text-dark">Want to know what’s inside our hidden plans?</h6>
              <a href="<?= base_url('package-details/ecommerce-website-package-hyderabad') ?>" class="btn btn-gradient">
                <i class="bi bi-unlock-fill me-2"></i>Unlock Full Packages
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

 <!-- Why Choose Us -->
<?php
    $this->load->view('front/inc/why_choose_ananya');
?>