<!-- ================= HERO SECTION ================= -->
<section class="hero-about">
  <div class="container position-relative z-2">
    <h1>Careers at Ananya Hi Solutions</h1>
   <p>
We are not just offering a job—we’re offering a place where your skills matter, your ideas are heard, and your growth becomes our priority. Join us and build a career where every day moves you closer to becoming the best version of yourself.
</p>
  </div>
</section>


<!-- ================= APPLY FORM SECTION ================= -->
<section class="apply-section">
  <div class="container">

    <div class="apply-box">

      <h2 class="text-center mb-4">Apply for this Job</h2>

      <?php $this->load->view('inc/message.php'); ?>

      

     <?= form_open_multipart('validate-job-application'); ?>
      
          <!-- NEW DROPDOWN -->
          <div class="mb-3">
            <label>Job Applied For</label>
            <select name="job_title" class="form-select">
              <option value="" hidden>Select Job</option>

              <optgroup label="Development">
                  <option value="Full Stack Developer" <?= set_select('job_title','Full Stack Developer'); ?>>Full Stack Developer</option>
                  <option value="MERN Stack Developer" <?= set_select('job_title','MERN Stack Developer'); ?>>MERN Stack Developer</option>
                  <option value="Web Developer" <?= set_select('job_title','Web Developer'); ?>>Web Developer</option>
                  <option value="React JS Developer" <?= set_select('job_title','React JS Developer'); ?>>React JS Developer</option>
                  <option value="Android Developer" <?= set_select('job_title','Android Developer'); ?>>Android Developer</option>
              </optgroup>

              <optgroup label="Marketing">
                  <option value="Digital Marketing Executive" <?= set_select('job_title','Digital Marketing Executive'); ?>>Digital Marketing Executive</option>
                  <option value="SEO Specialist" <?= set_select('job_title','SEO Specialist'); ?>>SEO Specialist</option>
                  <option value="Paid Ads Expert" <?= set_select('job_title','Paid Ads Expert'); ?>>Paid Ads Expert</option>
                  <option value="SEO Executive" <?= set_select('job_title','SEO Executive'); ?>>SEO Executive</option>
                  <option value="Social Media Executive" <?= set_select('job_title','Social Media Executive'); ?>>Social Media Executive</option>
                  <option value="Content Writer" <?= set_select('job_title','Content Writer'); ?>>Content Writer</option>
                  <option value="Telecaller" <?= set_select('job_title','Telecaller'); ?>>Telecaller</option>
                  <option value="Marketing Executive" <?= set_select('job_title','Marketing Executive'); ?>>Field Marketing Executive</option>
              </optgroup>

              <optgroup label="Designing">
                  <option value="Graphic Designer" <?= set_select('job_title','Graphic Designer'); ?>>Graphic Designer</option>
                  <option value="Video Editor" <?= set_select('job_title','Video Editor'); ?>>Video Editor</option>
                  <option value="Graphic & Video Editor" <?= set_select('job_title','Graphic & Video Editor'); ?>>Graphic & Video Editor</option>
                  <option value="UI/UX Designer" <?= set_select('job_title','UI/UX Designer'); ?>>UI/UX Designer</option>
              </optgroup>

              <optgroup label="Training">
                  <option value="SAP FICO Trainer" <?= set_select('job_title','SAP FICO Trainer'); ?>>SAP FICO Trainer</option>
                  <option value="Digital Marketing Trainer" <?= set_select('job_title','Digital Marketing Trainer'); ?>>Digital Marketing Trainer</option>
                  <option value="Full Stack Trainer" <?= set_select('job_title','Full Stack Trainer'); ?>>Full Stack Trainer</option>
              </optgroup>

            </select>
            <small class="text-danger"><?= form_error('job_title'); ?></small>
          </div>


          <div class="mb-3">
            <label>Full Name</label>
            <input type="text" name="name" class="form-control" value="<?= set_value('name'); ?>">
            <small class="text-danger"><?= form_error('name'); ?></small>
          </div>

          <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= set_value('email'); ?>">
            <small class="text-danger"><?= form_error('email'); ?></small>
          </div>

          <div class="mb-3">
            <label>Phone Number</label>
            <input type="text" name="phone" class="form-control" value="<?= set_value('phone'); ?>">
            <small class="text-danger"><?= form_error('phone'); ?></small>
          </div>

          <div class="mb-3">
            <label>Full Address</label>
            <input type="text" name="address" class="form-control" value="<?= set_value('address'); ?>">
            <small class="text-danger"><?= form_error('address'); ?></small>
          </div>

         <div class="mb-3">
            <label>Upload Resume (PDF/DOC)</label>
            <input type="file" name="resume" class="form-control">
            <small class="text-danger"><?= form_error('resume'); ?></small>
          </div>

          <input type="submit" class="btn btn-gradient" value="Submit Application">
      <?= form_close(); ?>


    </div>

  </div>
</section>


<style>
.apply-section{
  padding:60px 0;
  background:#f7faff;
}

.apply-box{
  max-width:700px;
  margin:0 auto;
  background:#fff;
  padding:40px;
  border-radius:12px;
  box-shadow:0 6px 25px rgba(0,0,0,.07);
}

.apply-box h2{
  font-size:28px;
  font-weight:700;
}

.apply-box label{
  font-weight:600;
  margin-bottom:6px;
  display:block;
}


</style>
