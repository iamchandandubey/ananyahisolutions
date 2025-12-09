<div class="container-fluid">
    <div class="card w-100">
        <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Recent Job Hirings</h5>

           <div class="d-flex justify-content-between align-items-center mb-3">
            <input type="text" id="searchInput" class="form-control form-control-sm"
                placeholder="Search by customer or business..." style="width: 250px;" />

            <div>
                <a href="<?= base_url('all-applications') ?>" class="btn btn-success btn-sm me-2">
                    <i class="bi bi-list-check me-1"></i> All Applications
                </a>

                <a href="<?= base_url('new-hiring') ?>" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus-circle me-1"></i> Add New Job
                </a>
            </div>
        </div>


            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle table-striped table-hover table-bordered">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th>Id</th>
                            <th>Full Name</th>
                            <th>Phone No.</th>
                            <th>Email ID</th>
                            <th>Job Applied For</th>
                            <th>Applied On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
<?php 
if($quotations->num_rows() > 0){
    $i = 1;
    foreach($quotations->result() as $row){ ?>
    
        <tr>
            <td><?= $i++; ?></td>
            <td title="<?= $row->full_address ?>"><?= ucwords($row->full_name); ?></td>
            <td><?= $row->phone; ?></td>
            <td><?= $row->email; ?></td>
            <td><?= $row->applied_for; ?></td>
            <td><?= $row->submited_on; ?></td>
           

            <td>
                <a href="<?= base_url($row->resume) ?>" class="btn btn-primary btn-sm">
                    Download CV
                </a>

                <a href="<?= base_url($row->id) ?>" 
                   class="btn btn-danger btn-sm delete-job"
                   data-id="<?= $row->id ?>">
                    Delete
                </a>
            </td>
        </tr>

<?php } } else { ?>

    <tr>
        <td colspan="7" class="text-center text-danger">No application found</td>
    </tr>

<?php } ?>
</tbody>

                </table>
            </div>
        </div>
    </div>
</div>

<script>
    // Simple search filter
    document.getElementById('searchInput').addEventListener('keyup', function() {
        let filter = this.value.toLowerCase();
        document.querySelectorAll('tbody tr').forEach(tr => {
            let text = tr.innerText.toLowerCase();
            tr.style.display = text.includes(filter) ? '' : 'none';
        });
    });
</script>

   <script>
    document.addEventListener("DOMContentLoaded", function() {
       const deleteButtons = document.querySelectorAll('.delete-job');

        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault(); // prevent default link

                const Id = this.getAttribute('data-id');

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
                        window.location.href = "<?= base_url('delete-applications/') ?>" + Id;
                    }
                })
            });
        });
    });
</script>
