<?php $this->load->view('components/page_head');?>
<body class="login-layout light-login">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-plane green"></i>
									<span class="red">Bawana Travel</span>
									<span class="white" id="id-text2">ERP</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; Bawana Tout & Travel</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<?php $this->load->view($subview);?>
							</div><!-- /.position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->
<?php $this->load->view('components/page_tail');?>