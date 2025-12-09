<?php
    $this->load->view('auth/inc/header_view');
?>

<div class="card mb-0">


    <div class="card-body">
       
        <a href="<?= base_url() ?>" class="text-nowrap logo-img text-center d-block py-3 w-100">
            <img src="<?= base_url('assets/back//images/logos/logo.png') ?>" width="180" alt="">
        </a>

        <!-- Show Message -->
       <?php $this->load->view('inc/message.php'); ?>


        <?= form_open('validate-login'); ?>
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>"
       value="<?=$this->security->get_csrf_hash();?>">
       
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bolder">Email ID</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter your email id" name="user_eamil" value="<?= set_value('user_eamil') ?>">
                <small class="text-danger fw-bolder">
                    <?= form_error('user_eamil'); ?>
                </small>
            </div>
            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label fw-bolder">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password" name="user_pass" value="<?= set_value('user_pass') ?>">
                <small class="text-danger fw-bolder">
                    <?= form_error('user_pass'); ?>
                </small>
            </div>
            <input type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" name="sign_in" value="Sign In">
            <a class="text-primary fw-bold" href="#">Forgot Password ?</a>
        <?= form_close(); ?>
        
    </div>
</div>

<?php
    $this->load->view('auth/inc/footer_view');
?>
          