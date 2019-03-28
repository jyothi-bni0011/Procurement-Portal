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
                                    <div class="page-title">Create Region</div>
                                </div>
                                <ol class="breadcrumb page-breadcrumb pull-right">
                                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li><a class="parent-item" href="regions.php">Regions</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active">Create Region</li>
                                </ol>
                            </div>
                        </div>
                        <div class="flash_msg <?php echo $msg_class; ?>"><?php echo $this->session->flashdata('message'); ?></div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="card card-box">
                                    <div class="card-body" id="bar-parent">
                                        <form action="<?php echo base_url() . 'admin/Regions/create'; ?>" id="create_form" class="form-horizontal" method="post">
                                            <div class="form-body">

                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Region Name
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-5">
                                                        <input type="text" name="region_name"  id="region_name" data-required="1" placeholder="Enter Region name" class="form-control input-height">
                                                    </div>
                                                    <span class="error" id="region_name_err"></span>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Region Owner
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-5">
                                                        <input type="text" name="owner_name" id="owner_name" data-required="1" placeholder="Enter Region Owner" class="form-control input-height">
                                                    </div>
                                                    <span class="error" id="owner_name_err"></span>

                                                </div>


                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Email
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-5">
                                                        <input type="email" name="owner_email" id="owner_email" data-required="1" placeholder="Enter Email ID" class="form-control input-height">
                                                    </div>
                                                    <span class="error" id="owner_email_err"></span>
                                                </div>

                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="offset-md-3 col-md-9">
                                                            <button type="submit" class="btn btn-danger" id="create_button">Create</button>
                                                            <a href="<?php echo base_url() . 'admin/regions'; ?>"><button type="button" class="btn btn-default">Cancel</button></a>
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
            <?php $this->load->view('includes/footer'); ?>
            <!-- end footer -->
        </div>
        <!-- start js include path -->
        <?php $this->load->view('includes/scripts'); ?>
        <!-- end js include path -->
        <script type="text/javascript">
            $('#create_button').on('click', function (e) {
                e.preventDefault();
                str = true;
                $('#region_name_err,#owner_name_err,#owner_email_err').html('');
                var region_name = $('#region_name').val();
                var owner_name = $('#owner_name').val();
                var owner_email = $('#owner_email').val();
                if (region_name == '') {
                    $('#region_name_err').html('Please enter region name');
                    str = false;
                }
                if (owner_name == '') {
                    $('#owner_name_err').html('Please enter owner name');
                    str = false;
                }
                if (owner_email == '') {
                    $('#owner_email_err').html('Please enter owner email');
                    str = false;
                }
//       if(password!='' && (password.length<6)){$('#password_err').html('Enter password with min 6 characters');str=false;}
                if (region_name != '')
                {
                    if (isNaN(region_name) == 0)
                    {
                        $('#region_name').focus();
                        $('#region_name_err').html('Entered region name is invalid');
                        str = false;
                    }
                }
                if (owner_email != '')
                {
                    if (email_check(owner_email) == 0)
                    {
                        $('#owner_email').focus();
                        $('#owner_email_err').html('Entered owner email is invalid');
                        str = false;
                    }
                }
                if (str == true)
                    $("#create_form").submit();
                return str;

            });
        </script>
    </body>

</html>