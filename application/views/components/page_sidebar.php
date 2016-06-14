			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->
				<?php 
					$enc_id=$this->encrypt->encode($this->session->userdata['id']);
					$enc_id=str_replace(array('+', '/', '='), array('-', '_', '~'), $enc_id);
				?>
				<ul class="nav nav-list">
					<li <?php echo $active=$this->uri->segment(1)=='dashboard' ? 'class="active"' : 'class=""';?> >
						<a href="<?php echo base_url('dashboard');?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li <?php echo $active=$this->uri->segment(1)=='email' ? 'class="active open"' : 'class=""';?> >
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-envelope"></i>
							<span class="menu-text"> 
							Email 
							<?php if ($UnreadMassages!==0){?>
							<span class="badge badge-primary"><?php echo $UnreadMassages;?></span>
							</span>
							<?php } ?>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li <?php echo $active=$this->uri->segment(2)=='inbox' ? 'class="active"' : 'class=""';?>>
								<a href="<?php echo base_url('email/inbox/'.$enc_id);?>">
									<i class="menu-icon fa fa-inbox"></i>
									Inbox
								</a>

								<b class="arrow"></b>
							</li>

							<li <?php echo $active=$this->uri->segment(2)=='sent' ? 'class="active"' : 'class=""';?>>
								<a href="<?php echo base_url('email/sent/'.$enc_id);?>">
									<i class="menu-icon fa fa-paper-plane-o"></i>
									Sent 
								</a>

								<b class="arrow"></b>
							</li>
							
							<li <?php echo $active=$this->uri->segment(2)=='draft' ? 'class="active"' : 'class=""';?>>
								<a href="<?php echo base_url('email/draft/'.$enc_id);?>">
									<i class="menu-icon fa fa-pencil-square-o"></i>
									Draft
								</a>

								<b class="arrow"></b>
							</li>
							
							<li <?php echo $active=$this->uri->segment(2)=='junk' ? 'class="active"' : 'class=""';?>>
								<a href="<?php echo base_url('email/junk/'.$enc_id);?>">
									<i class="menu-icon fa fa-trash-o"></i>
									Junk
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
					<li <?php echo $active=$this->uri->segment(1)=='employees' ? 'class="active"' : 'class=""';?> >
						<a href="<?php echo base_url('employees');?>">
							<i class="menu-icon fa fa-suitcase"></i>
							<span class="menu-text"> Employees </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li <?php echo $active=$this->uri->segment(1)=='customers' ? 'class="active"' : 'class=""';?> >
						<a href="<?php echo base_url('customers');?>">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Customers </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-ticket"></i>
							<span class="menu-text"> Ticket </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="typography.html">
									<i class="menu-icon fa fa-plane"></i>
									Plane
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="elements.html">
									<i class="menu-icon fa fa-train"></i>
									Train
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-bed"></i>
							<span class="menu-text"> Hotel </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="typography.html">
									<i class="menu-icon fa fa-star"></i>
									Hotel Type
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="elements.html">
									<i class="menu-icon fa fa-home"></i>
									Room Type
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="elements.html">
									<i class="menu-icon fa fa-cutlery"></i>
									Facility
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="elements.html">
									<i class="menu-icon fa fa-info-circle"></i>
									Hotel Information
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="elements.html">
									<i class="menu-icon fa fa-hospital-o"></i>
									Hotel Reservation
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-bus"></i>
							<span class="menu-text"> Tour </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="typography.html">
									<i class="menu-icon fa fa-plus-circle"></i>
									Create New Tour 
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="elements.html">
									<i class="menu-icon fa fa-list-alt"></i>
									Tour Booking
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="elements.html">
									<i class="menu-icon fa fa-ban"></i>
									Tour Cancelation
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>
					
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>