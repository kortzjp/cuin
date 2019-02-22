<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CUIN | Centro Universitario Isaac Newton</title>
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('public/images/fav.png')?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url('public/CPanel/bower_components/bootstrap/dist/css/bootstrap.min.css')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('public/CPanel/bower_components/font-awesome/css/font-awesome.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('public/CPanel/bower_components/Ionicons/css/ionicons.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('public/CPanel/dist/css/AdminLTE.min.css')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('public/CPanel/plugins/iCheck/square/blue.css')?>">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
	<a href="../../index2.html"><b>CU </b>Isaac Newton</a>
	</div>
  <!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Iniciar sesión</p>
		<?php echo form_open(base_url('BackEnd/Login/LoginValidateUser'));?>
		<div class="form-group has-feedback">
			<?php
				$data_user = array
				(
					'name'        => 'username',
					'placeholder' => 'Ingrese nombre de usuario',
					'class'       => 'form-control'
				);					
				echo form_input($data_user);
				echo form_error('username', '<p class="text-danger">', '</p>');                     
			?>
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
		</div>
	  
		<div class="form-group has-feedback">
			<?php
				$data_password = array
				(
					'type'        => 'password',
					'name'        => 'password',
					'placeholder' => 'Ingrese su password',
					'class'       => 'form-control'
				);
				echo form_input($data_password);
				echo form_error('password', '<p class="text-danger">', '</p>'); 	
			?>
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		</div>
		    
		<div class="row">
			<div class="col-xs-8">
				<div class="checkbox icheck">
            <!--<label>
              <input type="checkbox"> Remember Me 
            </label> -->
				</div>
			</div>
			
			<div class="col-xs-4">
			<?php 
				$btn_login = array
				(
					'type'  => 'submit',
					'value' => 'Enter',
					'class' => 'btn btn-primary'
				);
			?>
				<div class="pull-right">
				<?php
					echo form_button
					(
						$btn_login, '<span class="glyphicon glyphicon-log-in"> Entrar</span>'
					);
				?>
			</div>
			</div>
		</div>
		
		<div class="col-xs-12">
			<a href="register.html" class="text-center">Recupera tú contaseña</a>
		</div>	<br>
		<?php echo form_close(); ?>
	</div>	  

	</div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?= base_url('public/CPanel/bower_components/jquery/dist/jquery.min.js')?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('public/CPanel/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<!-- iCheck -->
<script src="<?= base_url('public/CPanel/plugins/iCheck/icheck.min.js')?>"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>







