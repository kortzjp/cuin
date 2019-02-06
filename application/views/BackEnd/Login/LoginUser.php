<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx">

<!--UrlGlobal area start here-->
<?php $this->load->view('template/UrlGlobal'); ?>
<!--UrlGlobal area end here-->

<body class="home1">


<!--Full width header Start-->
<div class="full-width-header">

    <!-- Toolbar Start -->
    <?php $this->load->view('template/ToolbarGlobal'); ?>
    <!-- Toolbar End -->

    <!--Header Start-->
    <header id="rs-header" class="rs-header">

        <!-- Header Top Start -->
        <?php $this->load->view('template/HeaderTopGlobal'); ?>
        <!-- Header Top End -->

        <!-- Menu Start -->
        <?php $this->load->view('template/MenuGlobal'); ?>
        <!-- Menu End -->
    </header>
    <!--Header End-->

</div>
<!--Full width header End-->


<!-- Products Start -->
<div id="rs-products" class="rs-products sec-spacer sec-color">
	<div class="container"> 
		<h5>ENTRAR A CUIN</h5>
        <div class="col-md-6 col-md-offset-3">
            <?php echo form_open(base_url('BackEnd/Login/LoginValidateUser'));                            ?>
                <div class="form-group">
                    <?php
                                $data_user = array
                                (
                                    'name'        => 'username',
                                    'placeholder' => 'Please Enter Username',
                                    'class'       => 'form-control'
                                );
                                echo form_label('Username:');
                                echo form_input($data_user);
								echo form_error('username', '<p class="text-danger">', '</p>');                     
                            ?>
                </div>

                <div class="form-group">
                            <?php
                                $data_password = array
                                (
                                    'type'        => 'password',
                                    'name'        => 'password',
                                    'placeholder' => 'Please Enter Password',
                                    'class'       => 'form-control'
                                );
                                echo form_label('Password:');
                                echo form_input($data_password);
								echo form_error('password', '<p class="text-danger">', '</p>'); 
                            ?>
                        </div>

                <div class="form-group">
                            <?php
                                $btn_login = array
                                (
                                    'type'  => 'submit',
                                    'value' => 'Enter',
                                    'class' => 'btn btn-default'
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
            <?php echo form_close(); ?>
        </div>
	</div>
</div>

<!--ScriptGlobal area start here-->
<?php $this->load->view('template/ScriptGlobal'); ?>
<!--ScriptGlobal area end here-->

</body>

</html>