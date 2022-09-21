<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta name="description" content="Responsive Admin Template" />
  <meta name="author" content="SmartUniversity" />
  <title>Dashboard</title>
  <!-- icons -->
  <link href="<?=base_url()?>assets/admin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/iconic/css/material-design-iconic-font.min.css">
  <!-- bootstrap -->
  <link href="<?=base_url()?>assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/css/pages/extra_pages.css">
  <!-- favicon -->
  <link rel="shortcut icon" href="<?=base_url()?>assets/admin/img/favicon.ico" />
</head>

<body>
  <div class="limiter">
    <div class="container-login100 page-background">
      <div class="wrap-login100">

        <form class="login100-form validate-form" action="<?=base_url('doLogin')?>" id="loginForm" method="POST">
          <?php if ($this->session->flashdata()) { ?>
                <div class="alert alert-warning p-2">
                  <?= $this->session->flashdata('msg'); ?>
                </div>
                <?php } ?>
          <span class="login100-form-logo">
            <!-- <i class="zmdi zmdi-flower"></i> -->
            <img src="<?=base_url()?>assets/admin/img/profile-removebg-preview.png">
          </span>
          <span class="login100-form-title p-b-34 p-t-27">
            Log in
          </span>
          <div class="wrap-input100 validate-input" data-validate="Enter username">
            <input class="input100" type="email" name="email" placeholder="Username">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>
          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>
          <!-- <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
              Remember me
            </label>
          </div> -->
          <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn">
              Login
            </button>
          </div>
          <!-- <div class="text-center p-t-90">
            <a class="txt1" href="#">
              Forgot Password?
            </a>
          </div> -->
        </form>


      </div>
    </div>
  </div>
  <!-- start js include path -->
  <script src="<?=base_url()?>assets/admin/plugins/jquery/jquery.min.js"></script>
  <!-- bootstrap -->
  <script src="<?=base_url()?>assets/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/admin/js/pages/extra_pages/login.js"></script>
  <!-- end js include path -->
</body>

</html>