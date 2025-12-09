<div class="container-fluid">
        
       
        <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Recent Quotations</h5>
                
                <!-- Show Message -->
                  <?php $this->load->view('inc/message.php'); ?>

               




                  <?= form_open('validate-quotation'); ?>

<div class="row">
    <h4 class="fw-bolder">Client Information</h4>

    <div class="col-md-4">
        <div class="form-group mb-3">
            <label class="fw-bolder">Client Name</label>
            <input type="text" class="form-control" name="customer_name"
                   value="<?= set_value('customer_name'); ?>" placeholder="Enter client name">
            <small class="text-danger"><?= form_error('customer_name'); ?></small>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group mb-3">
            <label class="fw-bolder">Business Name</label>
            <input type="text" class="form-control" name="company_name"
                   value="<?= set_value('company_name'); ?>" placeholder="Enter business name">
            <small class="text-danger"><?= form_error('company_name'); ?></small>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group mb-3">
            <label class="fw-bolder">Mobile No.</label>
            <input type="text" class="form-control" name="mobile_number"
                   value="<?= set_value('mobile_number'); ?>" placeholder="Enter mobile number">
            <small class="text-danger"><?= form_error('mobile_number'); ?></small>
        </div>
    </div>

    <div class="form-group mb-3">
        <label class="fw-bolder">Business Full Address</label>
        <input type="text" class="form-control" name="full_address"
               value="<?= set_value('full_address'); ?>" placeholder="Enter full address">
        <small class="text-danger"><?= form_error('full_address'); ?></small>
    </div>
</div>

<hr>
<h4 class="fw-bolder mt-4">Package Information</h4>

<?php if ($this->session->flashdata('package_error')): ?>
    <div class="alert alert-danger py-2"><?= $this->session->flashdata('package_error'); ?></div>
<?php endif; ?>

<div id="package-wrapper">
    <?php
    // Determine old package values if validation fails
    $old_names = $old_package_names ?? [''];
    $old_plans = $old_package_plans ?? [''];

    foreach ($old_names as $index => $pkg_name): 
        $pkg_plan = $old_plans[$index] ?? '';
    ?>
    <div class="package-group border rounded p-3 mb-3 bg-light">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group mb-3">
                    <label class="fw-bolder">Package Name</label>
                    <select name="package_name[]" class="form-control" required>
                        <option value="" hidden>-select package-</option>
                        <?php if (!empty($packages)) : ?>
                            <?php foreach ($packages->result() as $pkg) : ?>
                                <option value="<?= $pkg->slug; ?>" <?= ($pkg_name == $pkg->slug) ? 'selected' : ''; ?>>
                                    <?= $pkg->heading; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <option value="">No Packages Found</option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>

            <div class="col-md-5">
                <div class="form-group mb-3">
                    <label class="fw-bolder">Package Plan Type</label>
                    <select name="package_plan[]" class="form-control" required>
                        <option value="" hidden>-select plan-</option>
                        <option value="basic-plan" <?= ($pkg_plan == 'basic-plan') ? 'selected' : ''; ?>>Basic Plan</option>
                        <option value="standard-plan" <?= ($pkg_plan == 'standard-plan') ? 'selected' : ''; ?>>Standard Plan</option>
                        <option value="premium-plan" <?= ($pkg_plan == 'premium-plan') ? 'selected' : ''; ?>>Premium Plan</option>
                    </select>
                </div>
            </div>

            <div class="col-md-2 d-flex align-items-end">
                <button type="button" class="btn btn-danger btn-sm remove-package w-100">Remove</button>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div class="text-end mb-3">
    <button type="button" id="add-package" class="btn btn-primary btn-sm">+ Add Another Package</button>
</div>

<input type="submit" class="btn btn-dark btn-sm" value="Submit Now" name="submit_btn">
<?= form_close(); ?>

<!-- JS to dynamically add/remove packages -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const wrapper = document.getElementById('package-wrapper');
        const addBtn = document.getElementById('add-package');

        addBtn.addEventListener('click', function() {
            const group = document.querySelector('.package-group').cloneNode(true);
            group.querySelectorAll('select').forEach(sel => sel.value = '');
            wrapper.appendChild(group);
        });

        wrapper.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-package')) {
                const groups = document.querySelectorAll('.package-group');
                if (groups.length > 1) {
                    e.target.closest('.package-group').remove();
                } else {
                    alert('At least one package is required.');
                }
            }
        });
    });
</script>

























               
              </div>
        </div>
       
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
    </div>