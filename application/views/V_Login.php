<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login V3</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendors/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendors/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendors/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendors/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendors/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendors/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: '<?php echo base_url() ?>assets/img/bg-01.jpg';">
      <div class="wrap-login100">
          
        <form class="login100-form validate-form">
        
          <span class="login100-form-logo">
            <i class="zmdi zmdi-landscape"></i>

          </span>
            

          <span class="login100-form-title p-b-34 p-t-27">
            Log in
            
          </span>
          <?php if ($this->session->flashdata('msg')) : ?>
 <?php echo $this->session->flashdata('msg') ?>  
 <?php endif; ?>
             <?php 
      if(validation_errors())
      { ?>
        <?php echo validation_errors();?>
        <?php } ?> 
<?php echo form_open('C_Login/login');?>
          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" id="input_username" name="input_username" placeholder="Username">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

         <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="input_password" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>

          <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
              Remember me
            </label>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Login
            </button>
           
          </div>
              <?php echo form_close();?>
          <div class="text-center p-t-90">
            <a class="txt1" href="#">
              Forgot Password?
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="<?php echo base_url() ?>assets/vendors/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url() ?>assets/vendors/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url() ?>assets/vendors/bootstrap/js/popper.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url() ?>assets/vendors/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url() ?>assets/vendors/daterangepicker/moment.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url() ?>assets/vendors/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url() ?>assets/js/main.js"></script>

</body>
</html>