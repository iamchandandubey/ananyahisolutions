<!-- ✅ Hero Section -->
<section class="hero-about py-5 text-center text-white position-relative overflow-hidden" style="background: linear-gradient(135deg, #28a745, #009688);">
  <div class="container position-relative z-2">
    <!-- ✅ Animated Success Icon Above Heading -->
    <div class="icon-wrapper animate-bounce mb-3">
      <i class="bi bi-check-circle-fill"></i>
    </div>

    <h1> Thank You, <span class="text-warning fw-bold"><?= ucfirst($customer_name) ?></span></h1>

    <p class="lead mt-3 fw-semibold">
      We truly appreciate your interest in our <span class="fw-bold text-warning"><?= $service_name ?></span> package.  
      You're just one step away from transforming your business digitally 🚀  
    </p>
  </div>
  <!-- ✅ Confetti -->
  <canvas id="confetti-canvas"></canvas>
</section>

<!-- ✅ Packages Section -->
<section class="thank-you-section position-relative py-5">
  <div class="container">
    <div class="thank-you-card animate-card">
      <div class="package-details text-start">
        <h3 class="fw-semibold text-dark text-center">Choose Your Perfect Plan</h3>
        <p class="lead fw-semibold text-center">Choose the plan that fits your vision — and let’s build your digital success story together!</p>

        <div class="row g-4">
          <?php foreach($packages as $plan => $details): ?>
            <div class="col-lg-4 col-md-6 col-12">
              <div class="plan-card text-center p-4 shadow-sm rounded-4 position-relative overflow-hidden">

                <!-- ✅ Animated Plan Header with Icon -->
                <div class="plan-header mb-3">
                  <?php if (strtolower($plan) === 'basic'): ?>
                    <i class="bi bi-star-fill plan-icon basic"></i>
                  <?php elseif (strtolower($plan) === 'standard'): ?>
                    <i class="bi bi-gem plan-icon standard"></i>
                  <?php else: ?>
                    <i class="bi bi-trophy plan-icon premium"></i>
                  <?php endif; ?>

                  <h4 class="fw-bold text-gradient"><?= $plan ?> Plan</h4>
                </div>

                <!-- ✅ Animated Price -->
                <div class="price-badge mb-3">
                  <p class="price fw-bold fs-5 mb-0"><?= $details['price'] ?></p>
                </div>

                <ul class="feature-list fw-bold text-start mt-3">
                  <?php foreach($details['features'] as $feature): ?>
                    <li><i class="bi bi-check-circle-fill tick"></i> <?= $feature ?></li>
                  <?php endforeach; ?>
                </ul>

                <?php
                    if($_GET['slug'] === "social-media-marketing-package-hyderabad" || $_GET['slug'] === "google-ads-package-hyderabad"){
                        ?>
                        <div class="text-start alert alert-warning">Campaign charge not included.</div>
                    <?php
                    }
                  ?>

              

                <a href="https://wa.me/917673935353?text=Hi%20Ananya%20Team,%20I'm%20interested%20in%20the%20<?= urlencode($plan) ?>%20plan%20of%20<?= urlencode($service_name) ?>."
                   target="_blank"
                   class="btn btn-whatsapp mt-4 w-100 position-relative">
                  <i class="bi bi-whatsapp me-2"></i> Select <?= $plan ?> Plan
                </a>

                <p class="mt-3 small text-muted fw-bold">One of our experts will contact you soon.</p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ✅ STYLES -->
<style>
/* --- Layout --- */
.thank-you-section {
  background: linear-gradient(135deg, #e3f2fd 0%, #ffffff 100%);
  position: relative;
}
.thank-you-card {
  background: #fff;
  border-radius: 20px;
  padding: 2rem 1.5rem;
  box-shadow: 0 10px 35px rgba(0,0,0,0.1);
  text-align: center;
  animation: fadeInUp 0.8s ease forwards;
}

/* --- Hero Icon --- */
.icon-wrapper {
  font-size: 4.5rem;
  color: #fff;
  text-shadow: 0 0 15px rgba(255,255,255,0.5);
}
@keyframes bounce {
  0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
  40% { transform: translateY(-12px); }
  60% { transform: translateY(-6px); }
}
.animate-bounce { animation: bounce 1.5s infinite; }

/* --- Plan Cards --- */
.plan-card {
  background: #fff;
  border: 2px solid #e0e0e0;
  transition: all 0.3s ease;
  border-radius: 20px;
  overflow: hidden;
  position: relative;
  /* height: 100%; */
  height: auto;
}
.plan-card:hover {
  transform: translateY(-6px) scale(1.03);
  border-color: #28a745;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

/* ✅ Shine Animation */
.plan-card::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -75%;
  width: 50%;
  height: 200%;
  background: rgba(255,255,255,0.25);
  transform: rotate(25deg);
  animation: shine 3s infinite;
  pointer-events: none;
}
@keyframes shine {
  0% { left: -75%; }
  50% { left: 125%; }
  100% { left: 125%; }
}

/* ✅ Plan Header */
.plan-header {
  position: relative;
  padding: 0.8rem;
  border-radius: 15px;
  background: linear-gradient(90deg, #e8f5e9, #ffffff);
  box-shadow: 0 0 15px rgba(40,167,69,0.15);
  animation: glowPulse 3s infinite;
}
@keyframes glowPulse {
  0%,100% { box-shadow: 0 0 15px rgba(40,167,69,0.15); }
  50% { box-shadow: 0 0 25px rgba(40,167,69,0.35); }
}

/* ✅ Plan Icons */
.plan-icon {
  font-size: 2rem;
  display: block;
  margin-bottom: 0.4rem;
}
.plan-icon.basic { color: #00bcd4; }
.plan-icon.standard { color: #ff9800; }
.plan-icon.premium { color: #9c27b0; }

/* ✅ Plan Title Gradient */
.text-gradient {
  background: linear-gradient(90deg, #007bff, #00c853);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* ✅ Price Badge */
.price-badge {
  display: inline-block;
  background: linear-gradient(90deg, #c8e6c9, #e8f5e9);
  padding: 8px 20px;
  border-radius: 30px;
  animation: popUp 0.8s ease forwards;
  box-shadow: 0 0 10px rgba(0,0,0,0.05);
}
@keyframes popUp {
  0% { transform: scale(0); opacity: 0; }
  80% { transform: scale(1.1); opacity: 1; }
  100% { transform: scale(1); }
}

/* --- Features --- */
.feature-list {
  list-style: none;
  padding: 0;
  margin-top: 1.5rem;
}
.feature-list li {
  margin-bottom: 0.75rem;
  font-size: 0.95rem;
  color: #333;
  display: flex;
  align-items: flex-start;
}
.feature-list .tick {
  color: #28a745;
  margin-right: 10px;
  font-size: 1.2rem;
  flex-shrink: 0;
  transform: scale(0);
  animation: tickBounce 0.5s forwards;
}
@keyframes tickBounce {
  0% { transform: scale(0); }
  60% { transform: scale(1.3); }
  100% { transform: scale(1); }
}

/* --- Buttons --- */
.btn-whatsapp {
  background: #25D366;
  color: #fff;
  border-radius: 30px;
  transition: transform 0.2s, background 0.2s;
  z-index: 2;
  font-weight: 600;
}
.btn-whatsapp:hover {
  background: #1ebe5b;
  transform: scale(1.05);
}

/* --- Confetti --- */
#confetti-canvas {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 1;
}

/* --- Fade animation --- */
@keyframes fadeInUp {
  0% { opacity: 0; transform: translateY(40px); }
  100% { opacity: 1; transform: translateY(0); }
}

/* ✅ RESPONSIVE STYLING */
@media (max-width: 992px) {
  h1 { font-size: 2rem; }
  .plan-card { margin-bottom: 1.5rem; }
  .price-badge { padding: 6px 16px; }
  .plan-header { padding: 0.6rem; }
  .plan-icon { font-size: 1.8rem; }
}
@media (max-width: 576px) {
  .hero-about { padding: 3rem 1rem; }
  h1 { font-size: 1.5rem; line-height: 1.3; }
  .lead { font-size: 0.95rem; }
  .plan-card { padding: 1rem; }
  .plan-icon { font-size: 1.5rem; }
  .price-badge { padding: 5px 14px; font-size: 0.9rem; }
  .plan-header h4 { font-size: 1.1rem; }
}
</style>

<!-- ✅ CONFETTI SCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
<script>
const canvas = document.getElementById('confetti-canvas');
if (canvas) {
  const myConfetti = confetti.create(canvas, { resize: true, useWorker: true });
  myConfetti({
    particleCount: 140,
    spread: 90,
    origin: { y: 0.3 }
  });
}
</script>
