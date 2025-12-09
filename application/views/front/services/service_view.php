<!-- ✅ Hero Website Design Section -->
<section class="hero-about">
  <div class="container position-relative z-2 text-center text-white py-5">
    <h1 class="fw-bold"><?= $heading; ?></h1>
    <p class="lead mt-3"><?= $para; ?></p>
    <p class="mt-3 text-light small"><?= $trust_para; ?></p>

    <!-- ✅ CTA Buttons -->
    <div class="mt-4 d-flex justify-content-center flex-wrap gap-2">

      <!-- 💬 WhatsApp Free Consultation → mobile only -->
      <a href="https://wa.me/917673935353?text=Hi%20Ananya%20Team,%20I%20need%20a%20free%20consultation."
         target="_blank"
         class="btn btn-whatsapp d-inline-block d-lg-none">
        <i class="bi bi-whatsapp me-2"></i> Chat With Us Now
      </a>

      <!-- 📦 Choose Package → desktop/laptop only -->
      <a href="<?= base_url("ananya-hi-solutions-package") ?>" 
         class="btn btn-consultation d-none d-lg-inline-block">
        <i class="bi bi-cart-check me-2"></i> Choose Package
      </a>

    </div>
  </div>
</section>

<!-- Website Solutions Section -->
<!-- Website Solutions Section -->
<section class="website-solutions text-center py-5">
  <div class="container">
    <div class="headings text-center">
        <h2 class="primaryClr"> <?= $sub_heading; ?></h2>
        <p><?= $sub_para; ?></p>
    </div>

    <!-- Dynamic Services Cards -->
    <div class="row g-4">
        <?php if(!empty($services)): ?>
            <?php foreach($services as $service): ?>
                <div class="col-md-4">
                    <article class="solution-card h-100" itemscope itemtype="https://schema.org/Service">
                        <a href="<?= base_url().$service['link'] ?>" itemprop="url" class="text-decoration-none text-dark">
                            <i class="bi <?= $service['icon']; ?> solution-icon" itemprop="image"></i>
                            <h5 itemprop="name"><?= $service['title']; ?></h5>
                            <p itemprop="description"><?= $service['description']; ?></p>
                        </a>
                    </article>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No services available at the moment.</p>
        <?php endif; ?>
    </div>
  </div>
</section>


 <!-- Why Choose Us -->
<?php
    $this->load->view('front/inc/why_choose_ananya');
?>