<div class="container-fluid">
    <div class="card w-100">
        <div class="card-body p-4">

            <h5 class="card-title fw-semibold mb-4">Update Hiring Information</h5>

            <div class="d-flex justify-content-end mb-3">
                <a href="<?= base_url('all-hirings') ?>" class="btn btn-primary btn-sm">
                    <i class="bi bi-briefcase me-1"></i> View All Hirings
                </a>
            </div>

            <?php $this->load->view('inc/message.php'); ?>

            <?= form_open('validate-update-hiring') ?>

            <input type="hidden" name="id" value="<?= $hiring->id ?>">

            <div class="row">

                <!-- Job Title -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="fw-bolder">Job Title</label>
                        <input type="text" class="form-control" name="job_title"
                               value="<?= set_value('job_title', $hiring->job_title); ?>">
                        <small class="text-danger"><?= form_error('job_title'); ?></small>
                    </div>
                </div>

                <!-- Qualification -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="fw-bolder">Qualification</label>
                        <input type="text" class="form-control" name="qualification"
                               value="<?= set_value('qualification', $hiring->qualification); ?>">
                        <small class="text-danger"><?= form_error('qualification'); ?></small>
                    </div>
                </div>

                <!-- Visibility -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="fw-bolder">Display Job</label>
                        <select name="job_display" class="form-control">
                            <option value="yes" <?= ($hiring->job_display == 'yes') ? 'selected' : '' ?>>Show</option>
                            <option value="no" <?= ($hiring->job_display == 'no') ? 'selected' : '' ?>>Hide</option>
                        </select>
                    </div>
                </div>

                <!-- Job Status -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="fw-bolder">Job Status</label>
                        <select name="job_status" class="form-control">
                            <option value="yes" <?= ($hiring->job_status == 'yes') ? 'selected' : '' ?>>Active</option>
                            <option value="no" <?= ($hiring->job_status == 'no') ? 'selected' : '' ?>>Closed</option>
                        </select>
                    </div>
                </div>

                <!-- Experience -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="fw-bolder">Experience</label>
                        <input type="text" class="form-control" name="experience"
                               value="<?= set_value('experience', $hiring->experience); ?>">
                        <small class="text-danger"><?= form_error('experience'); ?></small>
                    </div>
                </div>

                <!-- Location -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="fw-bolder">Location</label>
                        <input type="text" class="form-control" name="location"
                               value="<?= set_value('location', $hiring->location); ?>">
                        <small class="text-danger"><?= form_error('location'); ?></small>
                    </div>
                </div>

                <!-- Job Description -->
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label class="fw-bolder">Job Description</label>
                        <textarea name="job_description" id="job_description" class="form-control">
                            <?= set_value('job_description', $hiring->job_description); ?>
                        </textarea>
                        <small class="text-danger"><?= form_error('job_description'); ?></small>
                    </div>
                </div>

            </div>

            <input type="submit" class="btn btn-sm btn-dark" value="Update Now">

            <?= form_close(); ?>
        </div>
    </div>
</div>


<style>
    .ck-editor__editable {
        min-height: 300px !important;
    }
</style>

<script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>

<script>
ClassicEditor.create(document.querySelector('#job_description'), {
    toolbar: [
        'heading', 
        '|', 
        'bold', 
        'italic', 
        'link', 
        'bulletedList', 
        'numberedList', 
        'undo', 
        'redo'
    ],
    heading: {
        options: [
            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
            { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
            { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
            { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
            { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' },
            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' }
        ]
    }
})
.catch(error => console.error(error));
</script>
