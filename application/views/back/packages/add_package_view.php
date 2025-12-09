<div class="container-fluid">
        
       
        <div class="card w-100">
              <div class="card-body p-4">
                  <h5 class="card-title fw-semibold mb-4">Add New Business Package</h5>
                  <div class="d-flex justify-content-end mb-3">
                      <a href="<?= base_url('business-packages') ?>" class="btn btn-primary btn-sm">
                        <i class="bi bi-plus-circle me-1"></i> Show Package
                      </a>
                  </div>
                  <!-- Show Message -->
                  <?php $this->load->view('inc/message.php'); ?>

                  <?= form_open('validate-business-package'); ?>
              
                      <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="package_heading" class="fw-bolder">Package Name</label>
                                    <input type="text" class="form-control" id="package_heading" name="package_heading" placeholder="Enter Package Name" value="<?= set_value('package_heading'); ?>">
                                    <small class="text-danger"><?= form_error('package_heading'); ?></small>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                  <div class="form-group mb-3">
                                    <label for="Sub_heading" class="fw-bolder">Sub Heading</label>
                                    <input type="text" class="form-control" id="Sub_heading" name="Sub_heading" placeholder="Enter Package Sub Heading" value="<?= set_value('Sub_heading'); ?>">
                                    <small class="text-danger"><?= form_error('Sub_heading'); ?></small>
                                  </div>
                            </div>
                            

                             <!-- Visible Package List -->
                            <div class="col-md-6">
                                <label for="vissible_list" class="form-label fw-bold">Visible Package List</label>
                                <textarea name="vissible_list" id="vissible_list" class="form-control" placeholder="Write each bullet point on a new line"><?= set_value('vissible_list'); ?></textarea>
                                <small class="text-muted">👉 Example: 15-18 High-Quality Creative Posts</small><br>
                                <small class="text-danger"><?= form_error('vissible_list'); ?></small>
                            </div>

                            <!-- Blue Package List -->
                            <div class="col-md-6">
                                <label for="blue_list" class="form-label fw-bold">Blur Package List</label>
                                <textarea name="blue_list" id="blue_list" class="form-control" placeholder="Write each bullet point on a new line"><?= set_value('blue_list'); ?></textarea>
                                <small class="text-muted">👉 Example: Festival Creative Posters</small><br>
                                <small class="text-danger"><?= form_error('blue_list'); ?></small>
                            </div>

                             <div class="col-md-6">
                              <div class="form-group mb-3">
                                  <label for="placement" class="fw-bolder">Package Placement</label>
                                  <select name="placement" id="placement" class="form-control">
                                      <option value="" hidden>-Select Placement-</option>
                                      <option value="website-design" <?= set_select('placement', 'website-design'); ?>>Website Development</option>
                                      <option value="digital-marketing" <?= set_select('placement', 'digital-marketing'); ?>>Digital Marketing</option>
                                  </select>
                              </div>
                              <small class="text-danger"><?= form_error('placement'); ?></small>
                          </div>
                          
                            <div class="col-md-6">
                                  <div class="form-group mb-3">
                                      <label for="slug" class="fw-bolder">Slug URL</label>
                                      <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Slug Here" value="<?= set_value('slug'); ?>">
                                  </div>
                                   <small class="text-danger"><?= form_error('slug'); ?></small>
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