<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll" class="left-sidemenu">
	                    <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="pull-left image">
	                                    <img src="../assets/img/d.jpg" class="img-circle user-img-circle" alt="User Image" />
	                                </div>
	                                <div class="pull-left info">
	                                    <p> <?php echo $this->session->userdata('username');?> </p>
	                                    <small><?php echo $this->session->userdata('role_id');?></small>
	                                </div>
	                            </div>
	                        </li>
	                        <li class="nav-item active open">
	                            <a href="index.php" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
	                                <span class="selected"></span>
	                            </a>
	                        </li>
							  <li class="nav-item">
	                            <a href="business-requesters.php" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Business Requesters</span>
	                                <span class="selected"></span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="vendors.php" class="nav-link nav-toggle">
	                                <i class="material-icons">how_to_reg</i>
	                                <span class="title">Vendors</span>
	                            </a>
	                        </li>
							<li class="nav-item">
	                            <a href="approval-head.php" class="nav-link nav-toggle">
	                                <i class="material-icons">how_to_reg</i>
	                                <span class="title">Approval Heads</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="regions.php" class="nav-link nav-toggle"><i class="material-icons">account_circle</i>
	                            <span class="title">Regions</span></a>
	                        </li>
							 <li class="nav-item">
	                            <a href="sites.php" class="nav-link nav-toggle"><i class="material-icons">library_books</i>
	                            <span class="title">Sites</span></a>
	                        </li>
							
	                    </ul>
	                </div>
                </div>
            </div>