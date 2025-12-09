<div class="container-fluid">
        
        <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">All Business Packages</h5>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <!-- Search box (Left) -->
                    <div>
                        <input
                        type="text"
                        id="searchInput"
                        class="form-control form-control-sm"
                        placeholder="Search by customer or business..."
                        style="width: 250px;"
                        />
                    </div>

                    <!-- Add Quotation Button (Right) -->
                    <div>
                       <a href="<?= base_url('add-package-list') ?>" class="btn btn-primary btn-sm">
                        <i class="bi bi-plus-circle me-1"></i> Add Package List
                        </a>
                       <a href="<?= base_url('business-packages') ?>" class="btn btn-primary btn-sm">
                        <i class="bi bi-plus-circle me-1"></i> All Package
                        </a>
                       
                    </div>
                </div>


                 <!-- Show Message -->
                  <?php $this->load->view('inc/message.php'); ?>
                  

                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle table-striped table-hover table-bordered">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Package Information</h6>
                        </th>
                      
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Created On</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                   <tbody>
                    <?php if(!empty($packages) && $packages->num_rows() > 0): ?>
                        <?php foreach($packages->result() as $package): ?>
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0"><?= $package->id; ?></h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">
                                        <a href="#" class="text-dark"><?= $package->package_parent_slug; ?></a>
                                    </h6>
                                    <span class="fw-normal"><?= $package->package_type_slug." ".$package->package_price; ?></span>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?= $package->added_date; ?></p>
                                </td>
                                <td class="border-bottom-0">
                                    <a href="#" class="btn btn-primary btn-sm">Update</a>
                                    <a href="#" class="btn btn-danger btn-sm delete-package" data-id="<?= $package->id ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center py-4">
                                <i class="bi bi-info-circle text-muted fs-5"></i>
                                <span class="ms-2 fw-semibold text-muted">No package list available</span>
                            </td>
                        </tr>
                    <?php endif; ?>
                  </tbody>

                  </table>

                 
                </div>
              </div>
        </div>
       
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const deleteButtons = document.querySelectorAll('.delete-package');

        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault(); // prevent default link

                const packageId = this.getAttribute('data-id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect to delete URL
                        window.location.href = "<?= base_url('packages-delete/') ?>" + packageId;
                    }
                })
            });
        });
    });
</script>
