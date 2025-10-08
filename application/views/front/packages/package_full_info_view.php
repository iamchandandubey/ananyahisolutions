<!-- 🌟 Get Full Package Details Section -->
<section class="package-section d-flex align-items-center py-5">
  <div class="container">
    <!-- Header -->
    <div class="row justify-content-center text-center mb-4">
      <div class="col-lg-8">
        <h1 class="text-white mb-3 animate-fadeup fw-bold ">Get Full <span class="text-warning"><?= $package_name; ?></span> Package Details</h1>
        <p class="lead text-white-50 animate-fadeup fw-bold" style="animation-delay: .2s;">
          Fill in your details and we’ll send your complete package info instantly — pricing, features & offers.
        </p>
      </div>
    </div>

    <!-- Form Card -->
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <div class="form-card p-4 p-md-5 animate-fadeup" style="animation-delay: .4s;">
           <?= form_open('validate-package', ['class' => 'row g-3', 'method' => 'post']) ?>


            <!-- Name -->
            <div class="col-md-6">
              <label for="name" class="form-label fw-semibold">Full Name</label>
              <div class="input-group">
                <span class="input-group-text bg-light border-0 brand-icon"><i class="bi bi-person-fill"></i></span>
                <input type="text" class="form-control border-0" id="name" placeholder="Enter your name" name="name" value="<?= set_value('name') ?>">
              </div>
               <small class="text-danger fw-bold"><?= form_error('name'); ?></small>
            </div>

            <!-- Email -->
            <div class="col-md-6">
              <label for="email" class="form-label fw-semibold">Email Address</label>
              <div class="input-group">
                <span class="input-group-text bg-light border-0 brand-icon"><i class="bi bi-envelope-fill"></i></span>
                <input type="text" class="form-control border-0" id="email" placeholder="Enter your email" name="email" value="<?= set_value('email') ?>">
              </div>
               <small class="text-danger fw-bold"><?= form_error('email'); ?></small>
            </div>

            <!-- Phone -->
            <div class="col-md-6">
              <label for="phone" class="form-label fw-semibold">Phone Number</label>
              <div class="input-group">
                <span class="input-group-text bg-light border-0 brand-icon"><i class="bi bi-telephone-fill"></i></span>
                <input type="tel" class="form-control border-0" id="phone" placeholder="Enter your phone" name="phone" value="<?= set_value('phone') ?>">
              </div>
               <small class="text-danger fw-bold"><?= form_error('phone'); ?></small>
            </div>

         

            <!-- Referral Source -->
            <div class="col-md-6">
                <label for="referral" class="form-label fw-semibold">How did you hear about us?</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-0 brand-icon"><i class="bi bi-megaphone-fill"></i></span>
                    <select class="form-select border-0" id="referral" name="platform">
                    <option value="" hidden>-- Select Source --</option>
                    <option value="Facebook" <?= set_select('platform', 'Facebook'); ?>>Facebook</option>
                    <option value="Instagram" <?= set_select('platform', 'Instagram'); ?>>Instagram</option>
                    <option value="YouTube" <?= set_select('platform', 'YouTube'); ?>>YouTube</option>
                    <option value="LinkedIn" <?= set_select('platform', 'LinkedIn'); ?>>LinkedIn</option>
                    <option value="Website" <?= set_select('platform', 'Website'); ?>>Website</option>
                    <option value="Friend / Referral" <?= set_select('platform', 'Friend / Referral'); ?>>Friend / Referral</option>
                    <option value="Other" <?= set_select('platform', 'Other'); ?>>Other</option>
                    </select>
                </div>
                <small class="text-danger fw-bold"><?= form_error('platform'); ?></small>
            </div>

            <input type="text" value="<?= $package_name;  ?>"  name="services" hidden>
            <input type="text" value="<?= $package_slug;  ?>"  name="slug" hidden>
            <small class="text-danger fw-bold"><?= form_error('services'); ?></small>

            <!-- CTA Button -->
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-cta fw-bold animate-vibrate">
                <i class="bi bi-envelope-fill me-2"></i> Get My Full Package Info
              </button>
            </div>

            <?= form_close() ?>


          <!-- Privacy Note -->
          <p class="text-center fw-bold text-muted small mt-4 mb-0">
            We respect your privacy. No spam — Only package details in your inbox.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 🌈 Styles -->
<style>
  /* Brand Color */
  :root {
    --brand-color: #1485cb;
  }

  /* Background Gradient */
  .package-section {
    background: linear-gradient(135deg, #064267 0%, #1485cb 100%);
    min-height: 100vh;
  }

  /* Card Glassmorphism */
  .form-card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
    transition: transform .3s ease, box-shadow .3s ease;
  }

  .form-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.25);
  }

  /* Brand-colored Icons */
  .brand-icon i {
    color: var(--brand-color);
    font-size: 1.2rem;
  }

  /* Input Styling */
  .input-group-text {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
  }

  .form-control, .form-select {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    background: #f9fbfd;
    transition: all 0.3s ease;
  }

  .form-control:focus, .form-select:focus {
    background: #fff;
    box-shadow: 0 0 0 4px rgba(20,133,203,0.2);
  }

  /* CTA Button Styling */
  .btn-cta {
    background: linear-gradient(135deg, #064267, #1485cb);
    color: #fff;
    border: none;
    border-radius: 50px;
    padding: 0.75rem 2.5rem;
    font-size: 1.1rem;
    font-weight: 600;
    transition: all 0.4s ease;
    box-shadow: 0 5px 15px rgba(20,133,203,0.3);
  }

  /* Vibration Animation */
  @keyframes vibrate {
    0% { transform: translateX(0); }
    10% { transform: translateX(-2px); }
    20% { transform: translateX(2px); }
    30% { transform: translateX(-2px); }
    40% { transform: translateX(2px); }
    50% { transform: translateX(-2px); }
    60% { transform: translateX(2px); }
    70% { transform: translateX(-2px); }
    80% { transform: translateX(2px); }
    90% { transform: translateX(-2px); }
    100% { transform: translateX(0); }
  }
  .animate-vibrate {
    animation: vibrate 0.5s linear infinite;
  }

  .btn-cta:hover {
    background: linear-gradient(135deg, #1485cb, #064267);
    box-shadow: 0 8px 30px rgba(20,133,203,0.5);
    color:white;
  }

  .btn-cta i {
    transition: transform 0.3s ease;
  }
  .btn-cta:hover i {
    transform: translateX(5px) rotate(10deg);
  }

  /* ✨ Animations */
  @keyframes fadeUp {
    from {opacity: 0; transform: translateY(40px);}
    to {opacity: 1; transform: translateY(0);}
  }
  .animate-fadeup {
    opacity: 0;
    animation: fadeUp 0.8s ease forwards;
  }

  @keyframes zoomIn {
    from {opacity: 0; transform: scale(0.9);}
    to {opacity: 1; transform: scale(1);}
  }
  .animate-zoom {
    animation: zoomIn 0.6s ease;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .form-card {
      padding: 1.5rem;
    }
    .btn-cta {
      font-size: 0.95rem;
      padding: 0.75rem 2rem;
    }
  }
</style>








 <!-- Why Choose Us -->
<?php
    $this->load->view('front/inc/why_choose_ananya');
?>