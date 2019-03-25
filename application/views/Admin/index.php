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
    <link href="../assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link href="../assets/plugins/material/material.min.css" rel="stylesheet" >
	<link href="../assets/css/material_style.css" rel="stylesheet">
	<!-- Theme Styles -->
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />	
    <link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
 </head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
		<?php $this->load->view('includes/header'); ?>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
		<?php $this->load->view('includes/sidebar'); ?>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    	<!-- start widget -->
					<div class="state-overview">
						<div class="row">
					        <div class="col-xl-3 col-md-3 col-12">
					          <a href="#email"><div class="info-box bg-white">
					            <span class="info-box-icon push-bottom bg-orange"><i class="material-icons">tab</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">Vendors</span>
					              <span class="info-box-number">10</span>
					            </div>
					            <!-- /.info-box-content -->
								  </div></a>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					        <div class="col-xl-3 col-md-3 col-12">
					          <a href="#to-verify"><div class="info-box bg-white">
					            <span class="info-box-icon push-bottom bg-warning"><i class="material-icons">subtitles</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">Requesters</span>
					              <span class="info-box-number">155</span>
					             
					            </div>
					            <!-- /.info-box-content -->
								  </div></a>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					        <div class="col-xl-3 col-md-3 col-12">
					          <a href="#in-process"><div class="info-box bg-white">
					            <span class="info-box-icon push-bottom bg-info"><i class="material-icons">person</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">Regions</span>
					              <span class="info-box-number">52</span>
					              
					            </div>
					            <!-- /.info-box-content -->
								  </div></a>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
							<div class="col-xl-3 col-md-3 col-12">
					          <a href="#verified"><div class="info-box bg-white">
					            <span class="info-box-icon push-bottom bg-success"><i class="material-icons">tab</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">Sites</span>
					              <span class="info-box-number">10</span>
					            </div>
					            <!-- /.info-box-content -->
								  </div></a>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					      </div>
						</div>
					<!-- end widget -->
					<div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-body " id="chartjs_bar_parent">
									<div class="row">
           	<div class="col-md-4">
           	<select class="form-control" id="filter">
           	<option value="0">Select Filter</option>
           	<option value="1">Day</option>
           	<option value="2">Week</option>
           	<option value="3">Month</option>
           	</select>
           	</div>
									</div>
									
                                    <div class="row">
                                        <canvas id="chartjs_bar" ></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="row">
                        <div class="col-md-12">
                            <div class="card  card-box">
                                <div class="card-head">
                                    <header>Approved Vs Reject</header>
                                    
                                </div>
                                <div class="card-body " id="chartjs_line_parent">
									<div class="row">
           	<div class="col-md-4">
           	<select class="form-control" id="filter">
           	<option value="0">Select Filter</option>
           	<option value="1">Day</option>
           	<option value="2">Week</option>
           	<option value="3">Month</option>
           	</select>
           	</div>
									</div>
                                    <div class="row">
                                        <canvas id="chartjs_line"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					   <!-- start new Associates list -->
                     <div class="row" id="email">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Vendors</header>
                                    
                                </div>
                                <div class="card-body ">
                                  <div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table">
												<thead>
													<tr>
														<th>Sr No</th>
														<th>Vendor Name</th>
														<th>Email</th>
														<th>Phone Number</th>
														
														<th>Country</th>
														<th>Region</th>
														
														<th>Status</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														
														
														<td>JeffreyThompson</td>
														<td>Jeffrey@gmail.com</td>
														<td>123456789</td>
														<td>USA</td>
														<td>Americas</td>
														<td>Stage - 1</td>
														
														<td>
															<a href="#" class="btn btn-success btn-tbl-edit btn-xs">
																<i class="fa fa-pencil"></i>
															</a>
															
															<button class="btn btn-tbl-delete btn-circle" data-toggle="modal" data-target="#exampleModalCenter">
																<i class="fa fa-trash-o "></i>
															</button>
															<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-body">
					        Are you sure you want to delete this record?
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> <button type="button" class="btn btn-danger">Delete</button>
					      </div>
					    </div>
					  </div>
														</td>
															
													</tr>
													<tr>
														<td>2</td>
														
														
														<td>JeffreyThompson</td>
														<td>Jeffrey@gmail.com</td>
														<td>123456789</td>
														<td>USA</td>
														<td>Americas</td>
														<td>Stage - 1</td>
														
														<td>
															<a href="#" class="btn btn-success btn-tbl-edit btn-xs">
																<i class="fa fa-pencil"></i>
															</a>
															
															<button class="btn btn-tbl-delete btn-circle" data-toggle="modal" data-target="#exampleModalCenter">
																<i class="fa fa-trash-o "></i>
															</button>
															<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-body">
					        Are you sure you want to delete this record?
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> <button type="button" class="btn btn-danger">Delete</button>
					      </div>
					    </div>
					  </div>
														</td>
															
													</tr>
													<tr>
														<td>3</td>
														
														
														<td>JeffreyThompson</td>
														<td>Jeffrey@gmail.com</td>
														<td>123456789</td>
														<td>USA</td>
														<td>Americas</td>
														<td>Stage - 1</td>
														
														<td>
															<a href="#" class="btn btn-success btn-tbl-edit btn-xs">
																<i class="fa fa-pencil"></i>
															</a>
															
															<button class="btn btn-tbl-delete btn-circle" data-toggle="modal" data-target="#exampleModalCenter">
																<i class="fa fa-trash-o "></i>
															</button>
															<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-body">
					        Are you sure you want to delete this record?
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> <button type="button" class="btn btn-danger">Delete</button>
					      </div>
					    </div>
					  </div>
														</td>
															
													</tr>
													<tr>
														<td>4</td>
														
														
														<td>JeffreyThompson</td>
														<td>Jeffrey@gmail.com</td>
														<td>123456789</td>
														<td>USA</td>
														<td>Americas</td>
														<td>Stage - 1</td>
														
														<td>
															<a href="#" class="btn btn-success btn-tbl-edit btn-xs">
																<i class="fa fa-pencil"></i>
															</a>
															
															<button class="btn btn-tbl-delete btn-circle" data-toggle="modal" data-target="#exampleModalCenter">
																<i class="fa fa-trash-o "></i>
															</button>
															<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-body">
					        Are you sure you want to delete this record?
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> <button type="button" class="btn btn-danger">Delete</button>
					      </div>
					    </div>
					  </div>
														</td>
															
													</tr>
													
													
													
												
												</tbody>
											</table>
										</div>
									</div>	
                                </div>
								<div id="to-verify" class="full-width text-center m-b-20">
										<a href="#" class="btn red btn-outline btn-circle margin-0">View All</a>
									</div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- end new Associates list --> 
					<!-- start new Associates list -->
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Business Requesters</header>
                                    
                                </div>
                                <div class="card-body ">
                                  <div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table">
												<thead>
													<tr>
														<th>Sr No</th>
														<th>Username</th>
														<th>Email</th>
														<th>Job Title</th>
														<th>Functional Area</th>
														<th>Site </th>
														<th>Region</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														
														
														<td>Emma Tate</td>
														<td>emma.tate@leicabiosystems.com</td>
														<td>Finance Manager</td>
														<td>Sales</td>
														<td>Danvers</td>
														<td>Europe</td>
														<td>
															<a href="#" class="btn btn-success btn-tbl-edit btn-xs">
																<i class="fa fa-pencil"></i>
															</a>
															
															<button class="btn btn-tbl-delete btn-circle" data-toggle="modal" data-target="#exampleModalCenter">
																<i class="fa fa-trash-o "></i>
															</button>
															<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-body">
					        Are you sure you want to delete this record?
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> <button type="button" class="btn btn-danger">Delete</button>
					      </div>
					    </div>
					  </div>
														</td>
															
													</tr>
													<tr>
														<td>2</td>
														
														
														<td>Emma Tate</td>
														<td>emma.tate@leicabiosystems.com</td>
														<td>Finance Manager</td>
														<td>Sales</td>
														<td>Danvers</td>
														<td>Europe</td>
														<td>
															<a href="#" class="btn btn-success btn-tbl-edit btn-xs">
																<i class="fa fa-pencil"></i>
															</a>
															
															<button class="btn btn-tbl-delete btn-circle" data-toggle="modal" data-target="#exampleModalCenter">
																<i class="fa fa-trash-o "></i>
															</button>
															<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-body">
					        Are you sure you want to delete this record?
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> <button type="button" class="btn btn-danger">Delete</button>
					      </div>
					    </div>
					  </div>
														</td>
															
													</tr>
													<tr>
														<td>3</td>
														
														
														<td>Emma Tate</td>
														<td>emma.tate@leicabiosystems.com</td>
														<td>Finance Manager</td>
														<td>Sales</td>
														<td>Danvers</td>
														<td>Europe</td>
														<td>
															<a href="#" class="btn btn-success btn-tbl-edit btn-xs">
																<i class="fa fa-pencil"></i>
															</a>
															
															<button class="btn btn-tbl-delete btn-circle" data-toggle="modal" data-target="#exampleModalCenter">
																<i class="fa fa-trash-o "></i>
															</button>
															<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-body">
					        Are you sure you want to delete this record?
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> <button type="button" class="btn btn-danger">Delete</button>
					      </div>
					    </div>
					  </div>
														</td>
															
													</tr>
													<tr>
														<td>4</td>
														
														
														<td>Emma Tate</td>
														<td>emma.tate@leicabiosystems.com</td>
														<td>Finance Manager</td>
														<td>Sales</td>
														<td>Danvers</td>
														<td>Europe</td>
														<td>
															<a href="#" class="btn btn-success btn-tbl-edit btn-xs">
																<i class="fa fa-pencil"></i>
															</a>
															
															<button class="btn btn-tbl-delete btn-circle" data-toggle="modal" data-target="#exampleModalCenter">
																<i class="fa fa-trash-o "></i>
															</button>
															<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-body">
					        Are you sure you want to delete this record?
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> <button type="button" class="btn btn-danger">Delete</button>
					      </div>
					    </div>
					  </div>
														</td>
															
													</tr>
													
													
													
												
												</tbody>
											</table>
										</div>
									</div>	
                                </div>
								<div id="in-process" class="full-width text-center m-b-20">
										<a href="#" class="btn red btn-outline btn-circle margin-0">View All</a>
									</div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- end new Associates list -->
					<!-- start new Associates list -->
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Approve Heads</header>
                                    
                                </div>
                                <div class="card-body ">
                                  <div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table">
												<thead>
													<tr>
														<th>Sr No</th>
														<th>Username</th>
														<th>Email</th>
														<th>Job Title</th>
														<th>Functional Area</th>
														<th>Site </th>
														<th>Region</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														
														
														<td>Emma Tate</td>
														<td>emma.tate@leicabiosystems.com</td>
														<td>Finance Manager</td>
														<td>Sales</td>
														<td>Danvers</td>
														<td>Europe</td>
														<td>
															<a href="#" class="btn btn-success btn-tbl-edit btn-xs">
																<i class="fa fa-pencil"></i>
															</a>
															
															<button class="btn btn-tbl-delete btn-circle" data-toggle="modal" data-target="#exampleModalCenter">
																<i class="fa fa-trash-o "></i>
															</button>
															<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-body">
					        Are you sure you want to delete this record?
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> <button type="button" class="btn btn-danger">Delete</button>
					      </div>
					    </div>
					  </div>
														</td>
															
													</tr>
													<tr>
														<td>2</td>
														
														
														<td>Emma Tate</td>
														<td>emma.tate@leicabiosystems.com</td>
														<td>Finance Manager</td>
														<td>Sales</td>
														<td>Danvers</td>
														<td>Europe</td>
														<td>
															<a href="#" class="btn btn-success btn-tbl-edit btn-xs">
																<i class="fa fa-pencil"></i>
															</a>
															
															<button class="btn btn-tbl-delete btn-circle" data-toggle="modal" data-target="#exampleModalCenter">
																<i class="fa fa-trash-o "></i>
															</button>
															<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-body">
					        Are you sure you want to delete this record?
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> <button type="button" class="btn btn-danger">Delete</button>
					      </div>
					    </div>
					  </div>
														</td>
															
													</tr>
													<tr>
														<td>3</td>
														
														
														<td>Emma Tate</td>
														<td>emma.tate@leicabiosystems.com</td>
														<td>Finance Manager</td>
														<td>Sales</td>
														<td>Danvers</td>
														<td>Europe</td>
														<td>
															<a href="#" class="btn btn-success btn-tbl-edit btn-xs">
																<i class="fa fa-pencil"></i>
															</a>
															
															<button class="btn btn-tbl-delete btn-circle" data-toggle="modal" data-target="#exampleModalCenter">
																<i class="fa fa-trash-o "></i>
															</button>
															<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-body">
					        Are you sure you want to delete this record?
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> <button type="button" class="btn btn-danger">Delete</button>
					      </div>
					    </div>
					  </div>
														</td>
															
													</tr>
													<tr>
														<td>4</td>
														
														
														<td>Emma Tate</td>
														<td>emma.tate@leicabiosystems.com</td>
														<td>Finance Manager</td>
														<td>Sales</td>
														<td>Danvers</td>
														<td>Europe</td>
														<td>
															<a href="#" class="btn btn-success btn-tbl-edit btn-xs">
																<i class="fa fa-pencil"></i>
															</a>
															
															<button class="btn btn-tbl-delete btn-circle" data-toggle="modal" data-target="#exampleModalCenter">
																<i class="fa fa-trash-o "></i>
															</button>
															<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-body">
					        Are you sure you want to delete this record?
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> <button type="button" class="btn btn-danger">Delete</button>
					      </div>
					    </div>
					  </div>
														</td>
															
													</tr>
													
													
													
												
												</tbody>
											</table>
										</div>
									</div>	
                                </div>
								<div id="in-process" class="full-width text-center m-b-20">
										<a href="#" class="btn red btn-outline btn-circle margin-0">View All</a>
									</div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- end new Associates list -->
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <?php $this->load->view('includes/footer'); ?>
        <!-- end footer -->
    </div>
 <!-- start js include path -->
<?php $this->load->view('includes/scripts'); ?>
 <!-- end js include path -->
  </body>
</html>