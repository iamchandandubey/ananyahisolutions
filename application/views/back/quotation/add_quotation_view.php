<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
<style>
.bg-light-subtle { background-color: #f9fafb !important; }
#quotation-form select, #quotation-form input, #quotation-form textarea { border-radius: 8px; }
#quotation-form .btn { border-radius: 6px; }
.package-group { transition: all 0.2s ease-in-out; }
.package-group:hover { box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08); }
.remove-package { border: none; background: transparent; color: #dc3545; font-size: 1.25rem; transition: 0.2s; }
.remove-package:hover { transform: scale(1.15); color: #b02a37; }
.grand-total-box { background: #f8f9fa; border-radius: 8px; padding: 16px 20px; border: 1px solid #dee2e6; }
.grand-total-label { font-size: 1rem; font-weight: 600; color: #333; }
.grand-total-value { font-size: 1.5rem; font-weight: 700; color: #198754; }
</style>

<div class="container-fluid py-4">
  <div class="card shadow-sm border-0">
    <div class="card-body p-4">
      <h4 class="fw-bold mb-4 text-primary">Create New Quotation</h4>

      <?php $this->load->view('inc/message.php'); ?>

      <form id="quotation-form" method="post" action="<?= base_url('QuotationController/save_quotation') ?>" autocomplete="off">
        <!-- CSRF -->
        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" 
               id="csrf_token" value="<?= $this->security->get_csrf_hash(); ?>" />

        <!-- Client Info -->
        <div class="mb-4">
          <h5 class="fw-semibold mb-3 border-bottom pb-2">Client Information</h5>
          <div class="row g-3">
            <div class="col-md-4">
              <label class="form-label fw-semibold">Client Name</label>
              <input type="text" name="customer_name" class="form-control" placeholder="Enter client name" required>
            </div>
            <div class="col-md-4">
              <label class="form-label fw-semibold">Business Name</label>
              <input type="text" name="company_name" class="form-control" placeholder="Enter business name" required>
            </div>
            <div class="col-md-4">
              <label class="form-label fw-semibold">Mobile Number</label>
              <input type="tel" name="mobile_number" class="form-control" placeholder="Enter mobile number" required>
            </div>
            <div class="col-12">
              <label class="form-label fw-semibold">Full Business Address</label>
              <textarea name="full_address" class="form-control" rows="2" placeholder="Enter full business address" required></textarea>
            </div>
          </div>
        </div>

        <!-- Package Info -->
        <div class="mb-4">
          <h5 class="fw-semibold mb-3 border-bottom pb-2">Package Information</h5>
          <div id="package-wrapper">
            <div class="package-group border rounded p-3 mb-3 bg-light-subtle">
              <div class="row g-3 align-items-end">
                <div class="col-md-4">
                  <label class="form-label fw-semibold">Package Name</label>
                  <select name="package_name[]" class="form-select package-name" required>
                    <option value="" hidden>- Select Package -</option>
                    <?php foreach ($packages->result() as $pkg): ?>
                      <option value="<?= $pkg->slug; ?>"><?= $pkg->heading; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="col-md-4">
                  <label class="form-label fw-semibold">Package Plan</label>
                  <select name="package_plan[]" class="form-select package-plan" required>
                    <option value="" hidden>- Select Plan -</option>
                    <option value="basic-plan">Basic Plan</option>
                    <option value="standard-plan">Standard Plan</option>
                    <option value="premium-plan">Premium Plan</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <label class="form-label fw-semibold">Price</label>
                  <input type="text" class="form-control package-price" name="package_price[]" readonly placeholder="Price">
                </div>
                <div class="col-md-1 text-end">
                  <button type="button" class="remove-package" title="Remove Package"><i class="bi bi-x-circle-fill"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="text-end">
            <button type="button" id="add-package" class="btn btn-outline-primary btn-sm">
              <i class="bi bi-plus-circle"></i> Add Package
            </button>
          </div>
        </div>

        <!-- Total & Submit -->
        <div class="border-top pt-4">
          <div class="row align-items-center g-3">
            <div class="col-md-6">
              <div class="grand-total-box d-flex justify-content-between align-items-center">
                <span class="grand-total-label">Grand Total:</span>
                <span class="grand-total-value" id="grand-total">₹0.00</span>
                <input type="hidden" name="grand_total" id="grand-total-input" value="0">
              </div>
            </div>
            <div class="col-md-6 text-end">
              <button type="submit" class="btn btn-dark px-4 py-2 fw-semibold">
                <i class="bi bi-check-circle me-1"></i> Submit Quotation
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- ==================== SCRIPT ==================== -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function() {
  let csrfName = $('#csrf_token').attr('name');
  let csrfHash = $('#csrf_token').val();

  // Fetch price dynamically
  $(document).on('change', '.package-name, .package-plan', function() {
    const group = $(this).closest('.package-group');
    const packageSlug = group.find('.package-name').val();
    const packagePlan = group.find('.package-plan').val();

    if(packageSlug && packagePlan){
      $.ajax({
        url: '<?= base_url("QuotationController/Get_Package_Price") ?>',
        type: 'POST',
        dataType: 'json',
        data: {
          package_slug: packageSlug,
          package_plan: packagePlan,
          [csrfName]: csrfHash
        },
        success: function(res){
          if(res.status === 'success'){
            group.find('.package-price').val(res.price);
            updateGrandTotal();
          } else {
            group.find('.package-price').val('');
            alert(res.message);
          }
          // Update CSRF for next request
          csrfHash = res.csrf_hash;
          $('#csrf_token').val(csrfHash);
        },
        error: function(){ alert('Server error while fetching price.'); }
      });
    }
  });

  // Add package
  $('#add-package').click(function(){
    const clone = $('.package-group:first').clone();
    clone.find('select, input').val('');
    $('#package-wrapper').append(clone);
  });

  // Remove package
  $(document).on('click', '.remove-package', function(){
    if($('.package-group').length > 1){
      $(this).closest('.package-group').remove();
      updateGrandTotal();
    }
  });

  // Update grand total with Indian formatting
  function updateGrandTotal(){
    let total = 0;
    $('.package-price').each(function(){ total += parseFloat($(this).val()) || 0; });

    function formatINR(x) {
      x = x.toFixed(2);
      let parts = x.split('.');
      let intPart = parts[0];
      let decPart = parts[1];
      let lastThree = intPart.slice(-3);
      let other = intPart.slice(0,-3);
      if(other != '') lastThree = ',' + lastThree;
      let formatted = other.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
      return formatted + '.' + decPart;
    }

    $('#grand-total').text('₹' + formatINR(total));
    $('#grand-total-input').val(total);
  }
});
</script>
