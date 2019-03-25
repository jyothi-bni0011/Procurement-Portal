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
    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	 
	<link rel="stylesheet" href="assets/plugins/iconic/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="assets/css/pages/extra_pages.css">
</head>
<body>
    <?php print_r($message);?>
    <div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo base_url().'login';?>" method="post">
					<span class="login100-form-logo">
						<img alt="" src="assets/img/logo1.png">
					</span>
					<span class="login100-form-title p-b-20 p-t-27">
						Log in
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="wrap-input100 validate-select" data-validate="Select role">
						<select class="select100" name="role">
							   <option style="text-color: #000; color: #000">Select Role</option>
                               <option style="text-color: #000; color: #000" value="1">Admin</option>
                               <option style="text-color: #000; color: #000" value="2">Business Requester</option>
                               <option style="text-color: #000; color: #000" value="3">Approval Head</option>
                               </select>
						<span class="focus-select100" data-placeholder="&#xf26e;"></span>
					</div>
					<div class="container-login100-form-btn">
						<a href="login.html"><button class="login100-form-btn">
							Login
						</button>
						</a>	
					</div>
					<div class="text-center p-t-30">
						<a class="txt1" href="<?php echo base_url().'Forgot_password';?>">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
			<div class="footer col-md-12 text-center">Copyright @Leica Biosystems Nussloch GmbH - 2018. Powered by <a href="https://www.bluenettech.com/" target="_blank">Bluenet</a></div>
		</div>
	</div>
    <!-- start js include path -->
     <script src="assets/plugins/jquery/jquery.min.js" ></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="assets/js/pages/extra_pages/extra_pages.js"></script>
    <!-- end js include path -->
</body>
</html>