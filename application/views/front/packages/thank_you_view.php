<section class="thank-you-section">
  <div class="thank-you-wrapper">
    <div class="thank-you-card animate-card">
      <!-- Success Icon -->
      <div class="icon-wrapper animate-bounce">
        <i class="bi bi-check-circle-fill"></i>
      </div>

      <!-- Personalized Greeting -->
      <h1 class="fw-bold mt-4">Thank You, <span class="text-success fw-bold"><?= ucfirst($customer_name) ?></span>! 🎉</h1>
      <p class="lead mt-3">
        We’ve received your request for the <span class="text-success fw-bold"><?= $service_name ?></span> package.<br>
        Our team is preparing your customized proposal — meanwhile, explore your package highlights below.
      </p>

      <!-- Package Features -->
      <div class="package-details mt-4 text-start">
        <h3 class="fw-semibold mb-3 text-dark">✨ What’s Included in Your Package</h3>
        <ul class="feature-list fw-bold">
            <?php foreach($package_features as $index => $feature): ?>
                <li>
                    <i class="bi bi-check-circle-fill tick"></i> <?= $feature ?>
                </li>
            <?php endforeach; ?>
        </ul>
      </div>

      <!-- Call to Action Buttons -->
      <div class="action-buttons mt-5">
        <a href="https://wa.me/917673935353?text=Hi%20Ananya%20Team,%20I%20want%20to%20discuss%20about%20the%20<?= urlencode($service_name) ?>%20package." 
           target="_blank" 
           class="btn btn-whatsapp mb-3">
          <i class="bi bi-whatsapp me-2"></i> Chat with Us on WhatsApp
        </a>
      </div>

      <p class="mt-4 small text-muted fw-bold">
        One of our experts will contact you soon. 
      </p>
    </div>
  </div>

  <canvas id="confetti-canvas"></canvas>
</section>

<!-- STYLES -->
<style>
.thank-you-section {
  width: 100%;
  min-height: 100vh;
  background: linear-gradient(135deg, #e3f2fd 0%, #ffffff 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 1.5rem;
  position: relative;
}

.thank-you-card {
  background: #fff;
  border-radius: 20px;
  padding: 2rem 1.5rem;
  max-width: 600px;
  width: 100%;
  box-shadow: 0 10px 35px rgba(0,0,0,0.1);
  text-align: center;
  animation: fadeInUp 0.8s ease forwards;
}

.icon-wrapper {
  font-size: 4rem;
  color: #28a745;
}
@keyframes bounce {
  0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
  40% { transform: translateY(-12px); }
  60% { transform: translateY(-6px); }
}
.animate-bounce { animation: bounce 1.5s infinite; }

h1 { font-size: 1.8rem; color: #333; }
p.lead { font-size: 1rem; color: #555; line-height: 1.5; }

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
  color: #28a745; /* green */
  margin-right: 10px;
  font-size: 1.2rem;
  flex-shrink: 0;
  transform: scale(0);
  animation: tickBounce 0.5s forwards;
}

/* Staggered animation for ticks */
.feature-list li:nth-child(1) .tick { animation-delay: 0.1s; }
.feature-list li:nth-child(2) .tick { animation-delay: 0.2s; }
.feature-list li:nth-child(3) .tick { animation-delay: 0.3s; }
.feature-list li:nth-child(4) .tick { animation-delay: 0.4s; }
.feature-list li:nth-child(5) .tick { animation-delay: 0.5s; }
.feature-list li:nth-child(6) .tick { animation-delay: 0.6s; }
.feature-list li:nth-child(7) .tick { animation-delay: 0.7s; }
.feature-list li:nth-child(8) .tick { animation-delay: 0.8s; }
.feature-list li:nth-child(9) .tick { animation-delay: 0.9s; }
.feature-list li:nth-child(10) .tick { animation-delay: 1s; }
.feature-list li:nth-child(11) .tick { animation-delay: 1.1s; }
.feature-list li:nth-child(12) .tick { animation-delay: 1.2s; }
.feature-list li:nth-child(13) .tick { animation-delay: 1.3s; }
.feature-list li:nth-child(14) .tick { animation-delay: 1.4s; }
.feature-list li:nth-child(15) .tick { animation-delay: 1.5s; }

@keyframes tickBounce {
  0% { transform: scale(0); }
  60% { transform: scale(1.3); }
  100% { transform: scale(1); }
}

.action-buttons {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.btn-whatsapp {
  background: #25D366;
  color: #fff;
  transition: transform 0.2s, background 0.2s;
}
.btn-whatsapp:hover {
  background: #1ebe5b;
  transform: scale(1.05);
}

#confetti-canvas {
  position: absolute;
  top:0; left:0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}

@keyframes fadeInUp {
  0% { opacity: 0; transform: translateY(40px);}
  100% { opacity: 1; transform: translateY(0);}
}
</style>

<!-- CONFETTI SCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
<script>
const canvas = document.getElementById('confetti-canvas');
if(canvas){
  const myConfetti = confetti.create(canvas, { resize: true, useWorker: true });
  myConfetti({ particleCount: 120, spread: 80, origin: { y: 0.6 } });
}
</script>
