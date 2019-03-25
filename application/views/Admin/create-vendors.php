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
    <link href="../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--bootstrap -->
	<link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link href="../../assets/plugins/material/material.min.css" rel="stylesheet" >
	<link href="../../assets/css/material_style.css" rel="stylesheet">
	<!-- Theme Styles -->
    <link href="../../assets/css/style.css" rel="stylesheet" type="text/css" />	
    <link href="../../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/css/pages/formlayout.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	 <!--select2-->
    <link href="../../assets/plugins/select2/css/select2.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
 </head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
		<?php include("../header.php"); ?>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<?php include("sidebar-admin.php"); ?>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Create Vendor</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Create Vendor</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-body" id="bar-parent">
                                    <form action="#" id="form_sample_1" class="form-horizontal">
                                        <div class="form-body">
                                        
											<div class="form-group row">
                                                <label class="control-label col-md-3">Vendor Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
								<input type="text" name="" data-required="1" placeholder="Enter Vendor Name" class="form-control input-height">
                                                     </div>
                                            </div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-3">Email
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
								<input type="email" name="" data-required="1" placeholder="Enter Email" class="form-control input-height">
                                                     </div>
                                            </div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-3">Phone Number
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
								<input type="text" name="" data-required="1" placeholder="Enter Phone Number" class="form-control input-height">
                                                     </div>
                                            </div>
											
											
											<div class="form-group row">
                                                <label class="control-label col-md-3">Fax
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
								<input type="text" name="" data-required="1" placeholder="Enter Fax" class="form-control input-height">
                                                     </div>
                                            </div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-3">Website
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
								<input type="text" name="" data-required="1" placeholder="Enter Website" class="form-control input-height">
                                                     </div>
                                            </div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-3">Country
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
								<input type="text" name="" data-required="1" placeholder="Enter Country" class="form-control input-height">
                                                     </div>
                                            </div>
											
											
											
											
											
											<div class="form-group row">
                                                <label class="control-label col-md-3">Region
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="" id="">
                      <option value="">Select Region</option>
                                            <option value="1">Americas</option>
                                            <option value="2">Europe</option>
                                          </select> </div>
                                            </div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-3">Address
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea class="form-control" rows="3" placeholder="Enter Address" style="background: transparent none repeat scroll 0% 0% !important; z-index: auto; position: relative; line-height: 20px; font-size: 14px; transition: none 0s ease 0s;"></textarea> </div>
                                            </div>
											
												<div class="form-group row">
                                                <label class="control-label col-md-3">Short Description
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea class="form-control" rows="3" placeholder="Enter Short Description" style="background: transparent none repeat scroll 0% 0% !important; z-index: auto; position: relative; line-height: 20px; font-size: 14px; transition: none 0s ease 0s;"></textarea> </div>
                                            </div>
											
												<div class="form-group row">
                                                <label class="control-label col-md-3">Purpose of the Vendor request
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea class="form-control" rows="3" placeholder="Enter Purpose of the Vendor request" style="background: transparent none repeat scroll 0% 0% !important; z-index: auto; position: relative; line-height: 20px; font-size: 14px; transition: none 0s ease 0s;"></textarea> </div>
                                            </div>
											
                                 <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" class="btn btn-danger">Create</button>
                                                    <button type="button" class="btn btn-default">Cancel</button>
                                                </div>
                                            	</div>
                                       		 </div>
										</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <?php include("../footer.php"); ?>
        <!-- end footer -->
    </div>
 <!-- start js include path -->
     <?php include("../scripts.php"); ?>
     <!-- end js include path -->
  </body>
</html>