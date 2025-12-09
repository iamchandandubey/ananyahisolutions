<!-- ✅ Hero Section -->
<section class="hero-about">
  <div class="container position-relative z-2">
    <h1><?= $heading ?></h1>
    <p><?= $heading_paragraph ?></p>
    <a href="https://wa.me/917673935353" class="btn btn-cta">
        <i class="bi bi-whatsapp me-2"></i> Get FREE Consultation
    </a>
  </div>
</section>


<!-- 💎 Package Section -->
    <section class="container py-5">
        <div class="row align-items-center g-4">
            <h2 class="fw-bold mb-1 text-center"><?= $heading1 ?></h2>
            <p class="text-muted">
               <?= $paragraph1 ?>
            </p>

        
            <div class="col-md-6 col-lg-6">
                <h4 class="fw-semibold mb-2 text-dark">🎁 Want to See Our Full Package Details?</h4>
                <p class="text-muted mb-3">Fill out the short form to instantly unlock our complete package information. </p>
                <?= $package ?>
            </div>

            <div class="col-md-6 col-lg-6">
                <img class="img-fluid rounded img-thumbnail shadow " src="<?= base_url($services_img) ?>" alt=<?= $services_img_alt; ?>>
            </div>
        </div>



     
            <h2 class="fw-bold pt-5 mb-3 text-center"><?= $heading2 ?></h2>
            <p><?= $paragraph2 ?></p>
            

            <h4 class="fw-semibold my-2 text-dark">Why Ananya Hi Solutions?</h4>
            <ul class="list-unstyled mt-3">
               <?= $benefits_items;  ?>
            </ul>
    </section>



  <!-- 🚀 Final CTA -->
  <section class="cta-final">
    <div class="container">
      <h2 class="fw-bold mb-3">Ready to Launch Your Business Website?</h2>
      <p class="lead mb-4">Get your static website designed by Hyderabad’s trusted web design company.</p>
      <a href="https://wa.me/917673935353" class="btn btn-cta me-2"><i class="bi bi-whatsapp me-2"></i> Chat on WhatsApp</a>
    </div>
  </section>







