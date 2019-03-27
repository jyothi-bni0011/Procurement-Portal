<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title></title>
	<!-- start styles -->
		<?php $this->load->view('includes/styles'); ?>
        <!-- end styles -->
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
                                <div class="page-title">Vendors</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Vendors</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-body" id="bar-parent">
				<a href="<?php echo base_url().'admin/vendors/create';?>" class="btn btn-success"><i class="fa fa-plus"></i> Create Vendors</a>
								<a href="upload.php" class="btn btn-primary"><i class="fa fa-cloud-upload"></i> Upload Bulk Data </a>	
									<a href="upload.php" class="btn btn-secondary"><i class="fa fa-cloud-upload"></i> Send Documents </a>
									
                                    <div class="table-scrollable">
                                    <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20" style="width: 100%">
                                        <thead>
                                            <tr>
												<th>Sr No</th>
														<th>Vendor Name</th>
														<th>Email</th>
														<th>Phone Number</th>
														<th>Country</th>
														<th>Region </th>
														<th>Status</th>
														<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<tr class="odd gradeX">
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
											
											<tr class="odd gradeX">
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
											
											<tr class="odd gradeX">
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
											
											<tr class="odd gradeX">
														<td>4</td>
														<td>Emma Tate</td>
														<td>emma.tate@leicabiosystems.com</td>
														<td>Finance Manager</td>
														<td>Sales</td>
														<td>Danvers</td>
														<td>Europe</td>
														<td>
			<a href="#" class="btn btn-success btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a>
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
											<tr class="odd gradeX">
														<td>5</td>
														<td>Emma Tate</td>
														<td>emma.tate@leicabiosystems.com</td>
														<td>Finance Manager</td>
														<td>Sales</td>
														<td>Danvers</td>
														<td>Europe</td>
														<td>
							<a href="#" class="btn btn-success btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a>
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
											<tr class="odd gradeX">
														<td>6</td>
														<td>Emma Tate</td>
														<td>emma.tate@leicabiosystems.com</td>
														<td>Finance Manager</td>
														<td>Sales</td>
														<td>Danvers</td>
														<td>Europe</td>
														<td>
<a href="#" class="btn btn-success btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a>
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
											
											<tr class="odd gradeX">
														<td>7</td>
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
                        </div>
                    </div>
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