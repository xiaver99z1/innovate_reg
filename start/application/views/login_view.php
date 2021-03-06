<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Innovate MGKT Application - Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo HTTP_ASSETS_PATH; ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo HTTP_ASSETS_PATH; ?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo HTTP_ASSETS_PATH; ?>plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="l"><b>Innovate MKTG</b><BR>Admin Application</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
   
	<?php if($this->session->flashdata('msg')){ echo $this->session->flashdata('msg'); }else{ echo ' <p class="login-box-msg">Sign in to start your session</p>';} ?> 
    <?php echo form_open(base_url( 'login' ), array( 'id' => 'register', 'class' => 'register' ));?>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" required name='email'>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		<div style='color:#c7254e;margin-top:5px'><?php echo form_error('email'); ?></div>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" required name='password'>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
		<div style='color:#c7254e;margin-top:5px'><?php echo form_error('password'); ?></div>
      </div>
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name='submit' class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
   <?php echo form_close();?>

    <div class="social-auth-links text-center">
        <!-- <p>- OR -</p>
     <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>-->
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="register" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo HTTP_ASSETS_PATH; ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo HTTP_ASSETS_PATH; ?>bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo HTTP_ASSETS_PATH; ?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  

  
</script>
</body>
</html>
