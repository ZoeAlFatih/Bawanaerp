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

						<div class="page-header">
							<h1><?php echo empty($employees->id)? 'Form Add New Employee' : 'Form Edit Employee <small>
									<i class="ace-icon fa fa-angle-double-right"></i> '
								.$employees->name.'</small>';?></h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<div>
									<div id="user-profile-3" class="user-profile row">
										<div class="col-xs-12">
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'validation-form','class'=>'form-horizontal');?>
            								<?php echo form_open_multipart('',$attributes);?>
												<div class="tabbable">
													<div class="tab-content profile-edit-tab-content">
														<div id="edit-basic" class="tab-pane in active">
															<h4 class="header blue bolder smaller">General Info</h4>
															
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-name">Name</label>

																<div class="col-sm-9">
																	<div class="input-large">
																		<div class="input-group">
																			<input type="text" name="name" class="input-large" value="<?php echo $employees->name;?>" id="form-field-name" />
																			<span class="input-group-addon">
																			<i class="ace-icon fa fa-user"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="space-12"></div>
															
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-username">Username</label>

																<div class="col-sm-9">
																	<div class="input-large">
																		<div class="input-group">
																			<input type="text" name="username" class="input-large" value="<?php echo $employees->username;?>" id="form-field-username" />
																			<span class="input-group-addon">
																			<i class="ace-icon fa fa-user-secret"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="space-12"></div>
															<?php if ($this->uri->segment(3)==null) { ?> 
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-password">Password</label>
																
																<div class="col-sm-9">
																	<div class="input-large">
																		<div class="input-group">
																			<input type="password" class="input-large" name="password" id="form-field-password" />
																			<span class="input-group-addon">
																			<i class="ace-icon fa fa-key"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="space-12"></div>
															
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-password">Confirm Password</label>
															
																<div class="col-sm-9">
																	<div class="input-large">
																		<div class="input-group">
																			<input type="password" class="input-large" name="cpassword" id="form-field-cpassword" />
																			<span class="input-group-addon">
																			<i class="ace-icon fa fa-key"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="space-12"></div>
															<?php } ?>
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right">Gender</label>

																<div class="col-sm-9">
																	<label class="inline">
																		<?php echo $employees->gender == 'm' ? '<input name="gender" checked="checked" type="radio" class="ace" value="m" />' : '<input name="gender" type="radio" class="ace" value="m" />'; ?>
																		<span class="lbl middle"> Male</span>
																	</label>

																	&nbsp; &nbsp; &nbsp;
																	<label class="inline">
																		<?php echo $employees->gender == 'f' ? '<input name="gender" checked="checked" type="radio" class="ace" value="f" />' : '<input name="gender" type="radio" class="ace" value="f" />'; ?>
																		<span class="lbl middle"> Female</span>
																	</label>
																</div>
															</div>

															<div class="space-12"></div>
															
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-address">Address</label>

																<div class="col-sm-9">
																	<div class="input-large">
																		<div class="input-group">
																			<textarea name="address" class="autosize-transition input-large" id="form-field-address"><?php echo $employees->address;?></textarea>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="space-12"></div>
															
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-place">Place Of Birth</label>
																
																<div class="col-sm-9">
																	<div class="input-large">
																		<div class="input-group">
																			<input class="input-large" id="form-field-place" type="text" name=place_of_birth value="<?php echo $employees->place_of_birth;?>" />
																			<span class="input-group-addon">
																				<i class="ace-icon fa fa-map"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="space-12"></div>
															
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-date">Date Of Birth</label>

																<div class="col-sm-9">
																	<div class="input-large">
																		<div class="input-group">
																			<input class="input-large date-picker" id="form-field-date" type="text" name="date_of_birth" data-date-format="yyyy-mm-dd" value="<?php echo $employees->date_of_birth;?>" />
																			<span class="input-group-addon">
																				<i class="ace-icon fa fa-calendar"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="space-12"></div>
															
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="marital">Marital Status</label>

																<div class="col-sm-9">
																	<div class="input-large">
																		<div class="input-group">
																			<select class="input-large" name="marital_status">
																				<option></option>
																				<?php echo $employees->marital_status == 'Single' ? '<option value="Single" selected="selected">Single</option>' : '<option value="Single">Single</option>'; ?>
																				<?php echo $employees->marital_status == 'In Relationship' ? '<option value="In Relationship" selected="selected">In Relationship</option>' : '<option value="In Relationship">In Relationship</option>'; ?>
																				<?php echo $employees->marital_status == 'Married' ? '<option value="Married" selected="selected">Married</option>' : '<option value="Married">Married</option>'; ?>
																				<?php echo $employees->marital_status == 'Windower' ? '<option value="Windower" selected="selected">Windower</option>' : '<option value="Windower">Windower</option>'; ?>
																				<?php echo $employees->marital_status == 'Discovered' ? '<option value="Discovered" selected="selected">Discovered</option>' : '<option value="Discovered">Discovered</option>'; ?>
																			</select>
																			<span class="input-group-addon">
																				<i class="ace-icon fa fa-venus-mars"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="space-12"></div>
															
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-child">Number Of Children</label>
																
																<div class="col-sm-9">
																	<div class="input-large">
																		<div class="input-group">
																			<input type="text" name="number_of_children" value="<?php echo $employees->number_of_children;?>" class="input-large" id="spinner1" />
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="space-12"></div>
															
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-place">Foto</label>

																<div class="col-sm-9">
																	<div class="input-large">
																		<div class="input-group">
																			<input type="file" name="userfile" />
																			<span class="help-block">Upload your profile picture.</span>
																			<?php if ($employees->foto==null){ ?>
																			<img id="avatar" class="hidden" alt="" src="<?php echo base_url('assets/avatars/icon_bawana.png');?>" />
																			<?php }else{?>
																			<img id="avatar" class="hidden" alt="<?php echo $employees->foto;?>" src="<?php echo base_url('assets/img/employees/'.'/'.$employees->foto);?>" />
																			<?php } ?>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="space"></div>
															<h4 class="header blue bolder smaller">Contact</h4>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>

																<div class="col-sm-9">
																	<div class="input-large">
																		<div class="input-group">
																			<input type="email" class="input-large" name="email" id="form-field-email" value="<?php echo $employees->email;?>" />
																			<span class="input-group-addon">
																			<i class="ace-icon fa fa-envelope"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>

															<div class="space-12"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Phone Number</label>

																<div class="col-sm-9">
																	<div class="input-large">
																		<div class="input-group">
																			<span class="input-group-addon">
																			<i class="ace-icon fa fa-phone"></i>
																			</span>
																			<input name="phone_number" class="input-large" type="text" id="form-field-phone" value="<?php echo $employees->phone_number;?>"/>
																		</div>
																	</div>
																</div>
															</div>

															<div class="space"></div>
															<h4 class="header blue bolder smaller">Work Information</h4>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-date">Start Work</label>

																<div class="col-sm-9">
																	<div class="input-large">
																		<div class="input-group">
																			<input class="input-large date-picker" id="form-field-date" type="text" name="start_work" data-date-format="yyyy-mm-dd" value="<?php echo $employees->start_work;?>" />
																			<span class="input-group-addon">
																				<i class="ace-icon fa fa-calendar-check-o"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>

															<div class="space-12"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-job">Job</label>

																<div class="col-sm-9">
																	<div class="input-large">
																		<div class="input-group">
																			<input type="text" class="input-large" name="job" id="form-field" value="<?php echo $employees->job;?>"/>
																			<span class="input-group-addon">
																			<i class="ace-icon fa fa-building"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>

															<div class="space-12"></div>
															
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-salary">Salary</label>

																<div class="col-sm-9">
																	<div class="input-large">
																		<div class="input-group">
																			<input type="text" class="input-large" name="salary" id="form-field" value="<?php echo $employees->salary;?>"/>
																			<span class="input-group-addon">
																			<i class="ace-icon fa fa-money"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="space-12"></div>
															
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-id_card">Id Card Number</label>
																
																<div class="col-sm-9">
																	<div class="input-large">
																		<div class="input-group">
																			<input type="text" class="input-large" name="id_number" id="form-field" value="<?php echo $employees->id_number;?>"/>
																			<span class="input-group-addon">
																			<i class="ace-icon fa fa-credit-card-alt"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="space-12"></div>
															
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-npwp">NPWP</label>

																<div class="col-sm-9">
																	<div class="input-large">
																		<div class="input-group">
																			<input type="text" class="input-large" name="npwp" id="form-field" value="<?php echo $employees->npwp;?>"/>
																			<span class="input-group-addon">
																			<i class="ace-icon fa fa-credit-card"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="space-12"></div>
															
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="state">Access Right</label>

																<div class="col-sm-9">
																	<div class="input-large">
																		<div class="input-group">
																			<select class="input-large" name="access_right">
																				<option></option>
																				<?php echo $employees->access_right == 'Super Admin' ? '<option value="Super Admin" selected="selected">Super Admin</option>' : '<option value="Super Admin">Super Admin</option>'; ?>
																				<?php echo $employees->access_right == 'Admin' ? '<option value="Admin" selected="selected">Admin</option>' : '<option value="Admin">Admin</option>'; ?>
																				<?php echo $employees->access_right == 'Marketing' ? '<option value="Marketing" selected="selected">Marketing</option>' : '<option value="Marketing">Marketing</option>'; ?>
																				<?php echo $employees->access_right == 'Ticketing' ? '<option value="Ticketing" selected="selected">Ticketing</option>' : '<option value="Ticketing">Ticketing</option>'; ?>
																				<?php echo $employees->access_right == 'Tour' ? '<option value="Tour" selected="selected">Tour</option>' : '<option value="Tour">Tour</option>'; ?>
																				<?php echo $employees->access_right == 'CS' ? '<option value="CS" selected="selected">CS</option>' : '<option value="CS">CS</option>'; ?>
																			</select>
																			<span class="input-group-addon">
																			<i class="ace-icon fa fa-universal-access "></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>

													</div>
												</div>

												<div class="clearfix form-actions">
													<div class="col-md-offset-3 col-md-9">
														<button class="btn btn-info" type="submit">
															<i class="ace-icon fa fa-check bigger-110"></i>
															Save
														</button>

														&nbsp; &nbsp;
														<a  class="btn" href="<?php echo base_url('employees');?>">
															<i class="ace-icon fa fa-undo bigger-110"></i>
														Cancle
														</a>
													</div>
												</div>
											<?php echo form_close();?>
										</div><!-- /.span -->
									</div><!-- /.user-profile -->
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->