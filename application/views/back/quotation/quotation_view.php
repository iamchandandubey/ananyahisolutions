<div class="container-fluid">
    <div class="card w-100">
        <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Recent Quotations</h5>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <input type="text" id="searchInput" class="form-control form-control-sm" placeholder="Search by customer or business..." style="width: 250px;" />
                <a href="<?= base_url('create-quotation') ?>" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus-circle me-1"></i> Add Quotation
                </a>
            </div>

            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle table-striped table-hover table-bordered">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th>Id</th>
                            <th>Customer Information</th>
                            <th>Total Amount</th>
                            <th>Created On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($quotations) && $quotations->num_rows() > 0): ?>
                            <?php
                                function formatINR($number) {
                                    $number = number_format((float)$number, 2, '.', '');
                                    $exploded = explode('.', $number);
                                    $intPart = $exploded[0];
                                    $decPart = $exploded[1];

                                    $lastThree = substr($intPart, -3);
                                    $rest = substr($intPart, 0, -3);
                                    if($rest != '') {
                                        $lastThree = ',' . $lastThree;
                                        $rest = preg_replace("/\B(?=(\d{2})+(?!\d))/", ",", $rest);
                                    }
                                    return $rest . $lastThree . '.' . $decPart;
                                }
                            ?>
                            <?php foreach($quotations->result() as $index => $quotation): ?>
                                <tr>
                                    <td><?= ($index + 1); ?></td>
                                    <td>
                                        <h6 class="fw-semibold mb-1"><?= htmlspecialchars($quotation->customer_name); ?></h6>
                                        <span class="fw-normal"><?= htmlspecialchars($quotation->business_name); ?></span>
                                    </td>
                                    <td>
                                        <span class="badge bg-light rounded-1 fw-bolder text-dark">
                                            ₹ <?= isset($quotation->grand_total) ? formatINR($quotation->grand_total) : '0.00'; ?>
                                        </span>
                                    </td>
                                    <td><?= htmlspecialchars($quotation->created_date); ?></td>
                                    <td>
                                        <a href="<?= base_url('show-quotation-informations/'.$quotation->id); ?>" class="btn btn-primary btn-sm">Show Quotation</a>

                                        <a href="#" class="btn btn-danger btn-sm delete-quotation" data-id="<?= $quotation->id ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center">No quotations found.</td>
                            </tr>
                        <?php endif; ?>
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
        const deleteButtons = document.querySelectorAll('.delete-quotation');

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
                        window.location.href = "<?= base_url('delete-quotations/') ?>" + Id;
                    }
                })
            });
        });
    });
</script>
