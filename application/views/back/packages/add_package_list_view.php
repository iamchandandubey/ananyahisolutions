<div class="container-fluid">
        
       
        <div class="card w-100">
              <div class="card-body p-4">
                  <h5 class="card-title fw-semibold mb-4">Add New Business Package</h5>
                  <div class="d-flex justify-content-end mb-3">
                      <a href="<?= base_url('all-packages-list') ?>" class="btn btn-primary btn-sm">
                        <i class="bi bi-plus-circle me-1"></i> Show Package List
                      </a>
                  </div>
                  <!-- Show Message -->
                  <?php $this->load->view('inc/message.php'); ?>

                 <?= form_open('validate-package-plan'); ?>

                    <div class="row">

                        <!-- Package Name -->
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="package_name" class="fw-bolder">Package Name</label>
                                <select name="package_name" id="package_name" class="form-control">
                                    <option value="" hidden>-select package-</option>
                                    <?php if (!empty($packages)) : ?>
                                        <?php foreach ($packages->result() as $pkg) : ?>
                                            <option value="<?= $pkg->slug; ?>" <?= set_select('package_name', $pkg->slug); ?>>
                                                <?= $pkg->heading; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <option value="">No Packages Found</option>
                                    <?php endif; ?>
                                </select>
                                <small class="text-danger"><?= form_error('package_name'); ?></small>
                            </div>
                        </div>

                        <!-- Package Plan Type -->
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="package_plan" class="fw-bolder">Package plan type</label>
                                <select name="package_plan" id="package_plan" class="form-control">
                                    <option value="" hidden>-select your plan-</option>
                                    <option value="basic-plan" <?= set_select('package_plan', 'basic-plan'); ?>>Basic Plan</option>
                                    <option value="standard-plan" <?= set_select('package_plan', 'standard-plan'); ?>>Standard Plan</option>
                                    <option value="premium-plan" <?= set_select('package_plan', 'premium-plan'); ?>>Premium Plan</option>
                                </select>
                                <small class="text-danger"><?= form_error('package_plan'); ?></small>
                            </div>
                        </div>

                        <!-- Package Price -->
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="package_price" class="fw-bolder">Plan Price</label>
                                <input type="text" class="form-control" id="package_price" name="package_price"
                                    placeholder="Enter your plan price" value="<?= set_value('package_price'); ?>">
                                <small class="text-danger"><?= form_error('package_price'); ?></small>
                            </div>
                        </div>

                        

                        <!-- Full Package Plan -->
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="full_package_plan" class="fw-bolder">Package Full Details</label>
                                <textarea name="full_package_plan" id="full_package_plan" class="form-control"
                                    placeholder="Write each bullet point on a new line"><?= set_value('full_package_plan'); ?></textarea>
                                <small class="text-muted">👉 Example: Basic 8 to 12 Creative Design Per Month</small><br>
                                <small class="text-danger"><?= form_error('full_package_plan'); ?></small>
                            </div>
                        </div>

                    </div>

                    <input type="submit" class="btn btn-sm btn-dark" value="Submit Now" name="submit_btn">
                <?= form_close(); ?>

              </div>
        </div>
       
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
    </div>