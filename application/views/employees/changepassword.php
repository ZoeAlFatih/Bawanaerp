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
							<h1>Form Change Password <small>
									<i class="ace-icon fa fa-angle-double-right"></i>
								<?php echo $employees->name;?></small></h1>
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
															
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-password">New Password</label>
																
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
														<?php 
															$enc_id=$this->encrypt->encode($this->session->userdata['id']);
															$enc_id=str_replace(array('+', '/', '='), array('-', '_', '~'), $enc_id);
														?>
														<a  class="btn" href="<?php echo base_url('employees/profile/'.$enc_id);?>">
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