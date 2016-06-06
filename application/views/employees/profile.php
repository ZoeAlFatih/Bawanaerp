					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<?php echo $breadcrumb;?>
							</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->
						<?php 
				             $success = $this->session->flashdata('success');
				             $failed = $this->session->flashdata('failed');
				             if ($success) :
				             echo success($success);
				             elseif ($failed) :
				             echo failed($failed);
				             endif; 
			        	?>
						<div class="page-header">
							<h1>
								User Profile Page
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo $employees->name;?>
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<div>
									<div id="user-profile-2" class="user-profile">
											<div class="tab-content no-border padding-24">
												<div id="home" class="tab-pane in active">
													<div class="row">
														<div class="col-xs-12 col-sm-3 center">
															<span class="profile-picture">
																<img class="editable img-responsive" alt="<?php echo $employees->foto;?>" id="avatar2" src="<?php echo base_url('assets/img/employees/'.'/'.$employees->foto);?>" />
															</span>

														<div class="space space-4"></div>
															<?php 
																$enc_id=$this->encrypt->encode($this->session->userdata['id']);
																$enc_id=str_replace(array('+', '/', '='), array('-', '_', '~'), $enc_id);
															?>
															<a href="<?php echo base_url('employees/editprofile/'.$enc_id);?>" class="btn btn-sm btn-block btn-primary">
																<i class="ace-icon fa fa-pencil-square-o bigger-110"></i>
																<span class="bigger-110">Edit Profile</span>
															</a>
															
															<a href="<?php echo base_url('employees/changepassword/'.$enc_id);?>" class="btn btn-sm btn-block btn-warning">
																<i class="ace-icon fa fa-key bigger-110"></i>
																<span class="bigger-110">Change Password</span>
															</a>  
															
														</div><!-- /.col --> 

														<div class="col-xs-12 col-sm-9">
															<h4 class="blue">
																<span class="middle"><?php echo $employees->name;?></span>

																<span class="label label-purple arrowed-in-right">
																	<i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
																	online
																</span>
															</h4>
															
															<div class="space-4"></div>
															
															<h4 class="header blue bolder smaller">General Information</h4>
															
															<div class="profile-user-info">
																<div class="profile-info-row">
																	<div class="profile-info-name"> Username </div>

																	<div class="profile-info-value">
																		<span><?php echo $employees->username;?></span>
																	</div>
																</div>
																
																<div class="profile-info-row">
																	<div class="profile-info-name"> Id Number </div>

																	<div class="profile-info-value">
																		<span><?php echo $employees->id_number;?></span>
																	</div>
																</div>
																
																<div class="profile-info-row">
																	<div class="profile-info-name"> Gender </div>

																	<div class="profile-info-value">
																		<span><?php echo $employees->gender == 'm' ? 'Male' : 'Female'; ?></span>
																	</div>
																</div>
																
																<div class="profile-info-row">
																	<div class="profile-info-name"> Address </div>

																	<div class="profile-info-value">
																		<i class="fa fa-map-marker light-orange bigger-110"></i>
																		<span><?php echo $employees->address;?></span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> Age </div>

																	<div class="profile-info-value">
																		<span><?php echo age($employees->date_of_birth);?> years old</span>
																	</div>
																</div>
																
																<div class="profile-info-row">
																	<div class="profile-info-name"> Marital Status </div>

																	<div class="profile-info-value">
																		<span><?php echo $employees->marital_status;?></span>
																	</div>
																</div>
																
																<div class="profile-info-row">
																	<div class="profile-info-name"> Number Of Children </div>

																	<div class="profile-info-value">
																		<span><?php echo $employees->number_of_children;?></span>
																	</div>
																</div>
			
																<div class="profile-info-row">
																	<div class="profile-info-name">
																		<i class="middle ace-icon fa fa-envelope bigger-150 blue"></i>
																	</div>

																	<div class="profile-info-value">
																		<a href="mailto:<?php echo $employees->email;?>"><?php echo $employees->email;?></a>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name">
																		<i class="middle ace-icon fa fa-phone bigger-150 light-blue"></i>
																	</div>

																	<div class="profile-info-value">
																		<?php echo $employees->phone_number;?>
																	</div>
																</div>
															</div>
															
															<div class="space-4"></div>
															
															<h4 class="header blue bolder smaller">Work Information</h4>
															
															<div class="profile-user-info">
																<div class="profile-info-row">
																	<div class="profile-info-name"> Joined </div>

																	<div class="profile-info-value">
																		<span><?php echo tgl_indo($employees->start_work);?></span>
																	</div>
																</div>
																
																<div class="profile-info-row">
																	<div class="profile-info-name"> NPWP </div>

																	<div class="profile-info-value">
																		<span><?php echo $employees->npwp;?></span>
																	</div>
																</div>
																
																<div class="profile-info-row">
																	<div class="profile-info-name"> Job </div>

																	<div class="profile-info-value">
																		<span><?php echo $employees->job;?></span>
																	</div>
																</div>
																
																<div class="profile-info-row">
																	<div class="profile-info-name"> Salary </div>

																	<div class="profile-info-value">
																		<span><?php echo rupiah($employees->salary);?></span>
																	</div>
																</div>
																
															</div>
														</div><!-- /.col -->
													</div><!-- /.row -->
												</div><!-- /#home -->
											</div>
									</div>
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->