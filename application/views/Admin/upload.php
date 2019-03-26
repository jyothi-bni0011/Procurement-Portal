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
	   <!-- data tables -->
    <link href="../../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/buttons/1.5.1/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />	
	<!-- Material Design Lite CSS -->
	<link href="../../assets/plugins/material/material.min.css" rel="stylesheet" >
	<link href="../../assets/css/material_style.css" rel="stylesheet">
	<!-- Theme Styles -->
    <link href="../../assets/css/style.css" rel="stylesheet" type="text/css" />	
    <link href="../../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/css/pages/formlayout.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/css/responsive.css" rel="stylesheet" type="text/css" />
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
                                <div class="page-title">Upload Vendor Bulk Data</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
								<li><a class="parent-item" href="vendors.php">Vendors</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Upload Vendor Bulk Data</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
								
                                <div class="card-body" id="bar-parent">
                                    <form action="http://lbsnew-opss.leicabio.com/stg_nodata/admin/Supervisors/insertexcel" method="post" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">
                                        <div class="form-body">
										
											
								<div class="form-group row">
                                                <label class="control-label col-md-3">Upload Data
                                                    <!--<span class="required"> * </span>-->
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="file" name="userfile" id="image123" data-required="1" class="form-control input-height" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required="" onchange="return checkfileformat();"> 
													
													
													<span id="filetypeerr" style="color:red;"></span>
													</div>
													<!--													<img  class="thumbnail" src="" alt="greeting"  height="50" width="50">
													-->
                                            </div>
											
											
                                       <input type="hidden" name="region_name" value="Americas">
                                           
											
											
										
											
											
										
											
											
											
											
											
									
											<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                    <a href="http://lbsnew-opss.leicabio.com/stg_nodata/admin/Supervisors/manage"><button type="button" class="btn btn-default">Cancel</button></a>
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