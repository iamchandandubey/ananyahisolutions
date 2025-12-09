<!-- ================= HERO SECTION ================= -->
<!-- ================= HERO SECTION ================= -->
<section class="hero-about">
  <div class="container position-relative z-2">
    <h1><?= ucwords($hiring->job_title) ?> – Careers at Ananya Hi Solutions</h1>
    <p>
      <strong>Location:</strong> <?= $hiring->location ?> |
      <strong>Experience:</strong> <?= $hiring->experience ?> |
      <strong>Qualification:</strong> <?= $hiring->qualification ?>
    </p>
  </div>
</section>





<!-- ================= JOB DETAILS SECTION ================= -->
<section class="job-details-section">
  <div class="container">
    <!-- Description -->
    <div class="job-block">
      <h3>Job Description</h3>
      <p><?= html_entity_decode($hiring->job_description) ?></p>
    </div>
    <div class="mt-3">
        <a href="<?= base_url('job-application/') ?>" class="btn btn-gradient">
            Apply Now
        </a>
    </div>

  </div>
</section>


<style>
/* ===== Job Details ===== */
.job-details-section{
  padding:60px 0;
  background:#f6f8fc;
}

.job-header{
  background:#fff;
  padding:25px;
  border-radius:12px;
  margin-bottom:30px;
  box-shadow:0 0 25px rgba(0,0,0,0.05);
}
.job-header ul{
  padding-left:0;
  list-style:none;
  margin:15px 0 0;
}
.job-header ul li{
  padding:6px 0;
  font-size:15px;
  color:#444;
}

/* BLOCKS */
.job-block{
  background:#fff;
  padding:25px;
  border-radius:12px;
  margin-bottom:25px;
  box-shadow:0 0 20px rgba(0,0,0,0.05);
}
.job-block h3{
  margin-bottom:18px;
}
.job-block ul{
  margin:0;
  padding-left:20px;
}
.job-block ul li{
  margin-bottom:10px;
  color:#444;
}

/* Apply */
.apply-btn{
  text-align:center;
}
.apply-btn a{
  background:#0077ff;
  padding:15px 40px;
  border-radius:8px;
  text-decoration:none;
  font-weight:600;
  color:white;
  transition:.3s;
}
.apply-btn a:hover{
  background:#005fd0;
}
</style>



















