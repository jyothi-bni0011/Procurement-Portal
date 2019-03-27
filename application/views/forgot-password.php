<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title></title>
	<!-- icons -->
    <link href="<?php echo base_url();?>assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iconic/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
	<link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/pages/extra_pages.css">
</head>
<body>
    <div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="<?php echo base_url().'Forgot_password';?>">
					<span class="login100-form-logo">
						<img alt="" src="<?php echo base_url();?>assets/img/logo1.png">
					</span>
					
					<p class="text-center txt-small-heading">
						Forgot Your Password? Let Us Help You.
					</p>
					<div class="wrap-input100 validate-input" data-validate = "Enter Official Email ID">
						<input class="input100" type="text" name="useremail" placeholder="Enter Your Official Email ID">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                                        <span style="color:red;">
                                            <?php if($message!=''){echo $message;}?>
                                        </span>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Submit
						</button>
					</div>
					<div class="text-center p-t-27">
						<a class="txt1" href="<?php echo base_url().'login';?>">
							Login?
						</a>
					</div>
				</form>
			</div>
			<div class="footer col-md-12 text-center">Copyright @Leica Biosystems Nussloch GmbH - 2018. Powered by <a href="https://www.bluenettech.com/" target="_blank">Bluenet</a></div>
		</div>
	</div>
    <!-- start js include path -->
     <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js" ></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="<?php echo base_url();?>assets/js/pages/extra_pages/extra_pages.js"></script>
    <!-- end js include path -->
</body>
</html>