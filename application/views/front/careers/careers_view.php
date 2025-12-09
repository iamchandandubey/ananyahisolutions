<!-- ✅ Hero Section -->
<section class="hero-about">
  <div class="container position-relative z-2">
    <h1>Careers at Ananya Hi Solutions</h1>
    <p>Join a fast-growing digital agency where innovation, learning and real-world impact come together. 
       Build your career with a team that values skills, creativity and ambition.</p>
  </div>
</section>


<!-- ===== JOB SECTION START ===== -->
<section class="job-section py-5" id="job-openings">
  <div class="container">
    <h2 class="section-title text-center mb-5">Current Job Openings</h2>

    <div class="row g-4">

      <?php if($jobs->num_rows() > 0) { ?>

    <?php foreach($jobs->result() as $job){ ?>
    <div class="col-lg-4 col-md-6">
      <div class="job-card">
        <h4><?= ucwords($job->job_title) ?></h4>
        <ul>
          <li><strong>Qualification:</strong> <?= ucwords($job->qualification) ?></li>
          <li><strong>Experience:</strong> <?= ucwords($job->experience) ?></li>
          <li><strong>Location:</strong> <?= ucwords($job->location) ?></li>
        </ul>

        <div class="mt-3">
          <a href="<?= base_url('job-details/'.$job->id) ?>" class="btn btn-gradient">
            View Full Job Details
          </a>
        </div>
      </div>
    </div>
    <?php } ?>

<?php } else { ?>

  <div class="col-12 text-center">
    <div class="alert alert-warning p-4">
      🚀 No job openings available right now. Check back soon or follow us on social media for updates!
    </div>
  </div>

<?php } ?>


    </div>
  </div>
</section>

<!-- ===== JOB SECTION END ===== -->





<style>
    .job-section{
  background:#f7faff;
}

.job-section .section-title{
  font-size:38px;
  font-weight:700;
}

.job-card{
  background:#fff;
  border-radius:18px;
  padding:30px;
  transition:.35s;
  box-shadow:0 6px 20px rgba(0,0,0,.06);
  border:1px solid transparent;
  height:100%;
}

.job-card:hover{
  transform:translateY(-6px);
  border-color:#0d6efd;
  box-shadow:0 8px 25px rgba(0,0,0,.08);
}

.job-card h4{
  font-size:22px;
  margin-bottom:20px;
  font-weight:600;
}

.job-card ul{
  margin:0;
  padding:0;
}

.job-card li{
  list-style:none;
  margin-bottom:8px;
  font-size:15px;
}




</style>







