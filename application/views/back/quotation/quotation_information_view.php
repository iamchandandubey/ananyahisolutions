<?php
// Helper function to format numbers in Indian currency style
function formatINR($number) {
    $decimal = sprintf("%0.2f", $number); // ensures 2 decimal places
    $split = explode('.', $decimal);
    $rupees = $split[0];
    $paise = $split[1];

    $lastThree = substr($rupees, -3);
    $rest = substr($rupees, 0, -3);
    if ($rest != '') {
        $rest = preg_replace("/\B(?=(\d{2})+(?!\d))/", ",", $rest);
        $rupees = $rest . "," . $lastThree;
    } else {
        $rupees = $lastThree;
    }
    return '₹' . $rupees . '.' . $paise;
}
?>

<div class="container-fluid"> 
  <div class="card w-100" id="quotation-section" style="border:none; box-shadow:none; position:relative;">
    <div class="card-body p-4">

      <!-- Print Button -->
      <div class="d-flex justify-content-end mb-3 no-print">
        <button class="btn btn-primary" onclick="printQuotation();">
          <i class="bi bi-printer-fill"></i> Print
        </button>
      </div>

      <!-- Header -->
      <div class="quotation-header text-center mb-4 p-4 rounded shadow-sm" style="background-color:#f8f9fa;">
        <img src="<?= base_url('assets/front/images/ahs-logo.png') ?>" 
             alt="Logo" 
             style="height:90px; margin-bottom:15px; filter: drop-shadow(1px 1px 2px rgba(0,0,0,0.1));">
        <h5 class="fw-bolder mb-2" style="font-size:1.15rem; color:#1485cb;">
          From Clicks to Conversions — We Build Your Digital Success Story
        </h5>
        <p class="mb-0 text-dark" style="font-size:0.95rem; max-width:700px; margin:auto; line-height:1.6;">
          Social Media Marketing, Google Ads, SEO, Video Production, YouTube Marketing, eCommerce & Web Development.
        </p>
      </div>

      <!-- Company & Client Info -->
      <div class="row mb-4">
        <!-- Company Info -->
        <div class="col-sm-6 border-end pe-3">
          <div style="background-color:#f8f9fa">
            <h5 class="fw-bolder text-center border-bottom py-2" style="color:#1485cb;">Company Information</h5>
          </div>
          <p><strong>Created By:</strong> <?= htmlspecialchars($client_info->created_by ?? 'Ananya Hi Solutions') ?></p>
          <p><strong>Phone:</strong> (+91) 76739-35353</p>
          <p><strong>Email:</strong> info@ananyahisolutions.com</p>
          <p><strong>Website:</strong> www.ananyahisolutions.com</p>
          <p><strong>Address:</strong> Sri Nakshatra Apartment, Kundan Bagh Rd, Begumpet, Hyderabad, Telangana 500016</p>
        </div>

        <!-- Client Info -->
        <div class="col-sm-6 ps-3">
          <div style="background-color:#f8f9fa">
            <h5 class="fw-bolder text-center border-bottom py-2" style="color:#1485cb;">Client Information</h5>
          </div>
          <p><strong>Customer Name:</strong> <?= htmlspecialchars(ucwords($client_info->customer_name ?? 'N/A')) ?></p>
          <p><strong>Business Name:</strong> <?= htmlspecialchars(ucwords($client_info->business_name ?? 'N/A')) ?></p>
          <p><strong>Phone:</strong> <?= htmlspecialchars($client_info->mobile_number ?? 'N/A') ?></p>
          <p><strong>Address:</strong> <?= htmlspecialchars($client_info->business_address ?? 'N/A') ?></p>
          <p><strong>Quotation ID:</strong> AHS-<?= date('Y') ?>-<?= $client_info->id ?? 0 ?></p>
          <p><strong>Created Date:</strong> <?= date('d-M-Y', strtotime($client_info->created_date ?? 'now')) ?></p>
        </div>
      </div>

      <!-- Package Section -->
      <?php if (!empty($packages)): ?>
        <?php foreach ($packages as $pkg): ?>
          <?php $features = json_decode($pkg->package_full_details, true); ?>

          <div class="card border-0 shadow-sm mb-4" style="overflow:hidden;">
            <div class="text-center py-3"
                 style="background: linear-gradient(135deg, #056cad, #009dff); border-bottom: 2px solid #0197f5;">
              <h5 class="text-light fw-semibold mb-0">
                <?= htmlspecialchars(ucwords($pkg->heading ?? 'Package')) ?>
              </h5>
            </div>

            <div class="card-body d-flex flex-wrap p-0">
              <div class="p-4 border-end package-list" 
                   style="flex:1; border:2px solid #1485cb; border-right:none; border-radius:0 0 0 8px; background-color:#fff;">
                <ul class="list-unstyled mb-0">
                  <?php if (!empty($features)): ?>
                    <?php foreach ($features as $item): ?>
                      <li><span class="tick-circle">✓</span> <?= htmlspecialchars($item) ?></li>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </ul>
              </div>

              <div class="d-flex justify-content-center align-items-center flex-column text-center p-4"
                   style="min-width:220px; background:linear-gradient(135deg,#009bfc1c,#009afb4a); border:2px solid #1485cb; border-radius:0 0 8px 0;">
                <h1 class="fw-bold mb-2" style="color:#1485cb;"><?= formatINR($pkg->package_price) ?></h1>
                <h5 class="fw-semibold mb-0" style="color:#1485cb;"><?= ucwords(str_replace('-', ' ', $pkg->package_plan)) ?></h5>

               <?php 
// Define package types that should show (30 Days and alert)
$show_duration_for = [
    'Social Media Marketing', 
    'Google Ads', 
    'PPC Ads', 
    'Search Engine Optimization', 
    'SEO',
    'YouTube Management'
];

// Check if any of these keywords exist in heading or package_plan
$show_duration = false;
foreach ($show_duration_for as $type) {
    if (stripos($pkg->heading, $type) !== false || stripos($pkg->package_plan, $type) !== false) {
        $show_duration = true;
        break;
    }
}
?>

<?php if ($show_duration): ?>
    <h6 class="text-dark fw-semibold mb-0">(30 Days)</h6>

    <!-- Bootstrap alert for campaign charges -->
    <div class="alert alert-warning d-flex align-items-center mt-2 mb-0" role="alert">
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        <div>Campaign charges are not included.</div>
    </div>
<?php endif; ?>

              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-muted">No packages found for this quotation.</p>
      <?php endif; ?>

      <!-- Grand Total -->
      <div class="text-end mt-4">
        <div class="p-3 text-dark fw-bold fs-4 rounded" style="background-color:#f8f9fa;">
          Grand Total: <span class="fw-bolder"><?= formatINR($client_info->grand_total ?? 0) ?></span>
        </div>
      </div>

      <!-- Terms Section -->
      <div class="mt-4 border-top pt-3 terms-section" style="background-color:#f8f9fa; border-radius:6px; padding:15px;">
        <h4 class="fw-bold mb-2" style="color:#1485cb;">Terms</h4>
        <ul class="terms-list">
          <li><span class="tick-circle">✓</span> Any extra work beyond this proposal will be charged extra.</li>
          <li><span class="tick-circle">✓</span> Campaign charges are not included.</li>
          <li><span class="tick-circle">✓</span> Quotation is valid for 15 days from the date of issue.</li>
          <li><span class="tick-circle">✓</span> All payments must be made directly to <strong>Ananya Hi Solutions</strong> only.</li>
        </ul>
        <p class="fst-italic mb-0">
          If you have any questions about this quotation, please contact us.  
          Thank you for choosing <strong>Ananya Hi Solutions</strong> — your growth partner in the digital world!
        </p>
      </div>

    </div>
  </div>
</div>

<script>
function printQuotation() {
  window.print();
}
</script>

<style>
.tick-circle {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 22px;
  height: 22px;
  background-color: #1485cb;
  color: #fff;
  border-radius: 50%;
  font-size: 14px;
  font-weight: bold;
  margin-right: 10px;
}
.package-list li, .terms-list li {
  list-style: none;
  margin-bottom: 10px;
  font-size: 0.95rem;
  color: #333;
}
.package-list li:hover {
  background-color: #e9f5ea;
  border-radius: 4px;
  transition: 0.2s;
}
@media print {
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    -webkit-print-color-adjust: exact !important;
    print-color-adjust: exact !important;
  }
  body * { visibility: hidden; }
  #quotation-section, #quotation-section * { visibility: visible; }
  .no-print { display: none !important; }
  #quotation-section {
    position: absolute; left: 0; top: 0; width: 100%;
  }
}
</style>
