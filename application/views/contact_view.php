<div class="container" style="border:solid px red;margin-top:;">

	<div class="row" style="border:solid px white;margin-top:150px;">
		<div class="col-md-8 col-md-offset-2 col-sm-8">
			<!--<h1 class="about_title">about us</h1>-->
			<img src="images/contact-title1.png">		
		</div>
	</div>

	<div class="row" style="border:solid px white; margin-top:20px;">
		<div class="col-md-6 col-sm-6" style="border:solid px red;">
			<div class="row" style="border-right:solid 2px lightblue;">
				<form class="form-horizontal" id="form_send_message" role="form" method="post" action="<?php //echo base_url('contact/send_message'); ?>" enctype="multipart/form-data" id="ContactForm" name="ContactForm">	
					<div class="form-group">
						<label for="" class="col-lg-6 col-md-6 col-sm-10 col-xs-8 col-xs-offset-1 control-label"><span style="font-size:24px; text-align:left;color:#abbbcc;">Leave us a message </span></label>
					</div>
					<div class="form-group">
						<div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-4 col-xs-offset-1">
							<label for="" class="control-label"><span style="font-size:16px; text-align:left;color:#6e88a3;"> NAME: </span></label>
						</div>
					</div>					
					<div class="form-group"><!--start full name-->
						<div class="col-lg-9 col-md-9 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-9 col-xs-offset-1">
							<input type="text" id="full_name" name="full_name" class="form-control" value="" placeholder="">
							<span class="help-block"></span>
						</div>	
					</div>
					
					<div class="form-group">						
						<div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-4 col-xs-offset-1">
							<label for="" class="control-label"><span style="font-size:16px; text-align:left;color:#6e88a3;"> EMAIL: </span></label>
						</div>
					</div>

					<div class="form-group"><!--start email-->
						<div class="col-lg-9 col-md-9 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-9 col-xs-offset-1">
							<input type="text" id="email_address" name="email_address" class="form-control" value="" placeholder="">
							<span class="help-block"></span>
						</div>	
					</div>
					
					<div class="form-group">
						<div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-4 col-xs-offset-1">
							<label for="" class="control-label"><span style="font-size:16px; text-align:left;color:#6e88a3;"> SUBJECT: </span></label>
						</div>
					</div>
				
					<div class="form-group"><!--start subject-->
						<div class="col-lg-9 col-md-9 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-9 col-xs-offset-1">
							<input type="text" id="subject" name="subject" class="form-control" value="" placeholder="">
							<span class="help-block"></span>
						</div>	
					</div>
					<div class="form-group"><!--start subject-->
						<div class="col-lg-9 col-md-9 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-9 col-xs-offset-1">
							<textarea class="form-control" id="message" name="message" rows="4"></textarea>
							<span class="help-block"></span>
						</div>	
					</div>
					<div class="form-group"><!--start subject-->
						<div class="col-lg-5 col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-5 col-xs-offset-1">
							<button type="submit" id="submit" class="btn btn-primary send_message_form" data-loading-text="Sending..."> SEND </button>
						</div>	
					</div>
					
				</form>
			</div>
				
		</div>
		<div class="col-md-6 col-sm-6" style="border:solid px red;">
			<div class="container" style="border:solid px white; margin-top:90px;">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
						<h4 style="color:#6e88a3;"><img src="img/add.png">115 Kasing-kasing corner K-6th St.<br> <span style="margin-left:29px;;">Brgy. East Kamias, Quezon City</span>.</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
						<h4 style="color:#6e88a3;"><img src="img/phone.png">  435-6566 / 435-4535 / 433-7790 / 434-6582</h4>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-4 col-xs-offset-1">
						<h4 style="color:#6e88a3;"><a href="http://info@activationsadvertising.com" style="color:#6e88a3;text-decoration:none;"><img src="img/envelope.png"> info@activationsadvertising.com</a></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-4 col-xs-offset-1">
						<h4 style="color:#6e88a3;"><a href="http://facebook.com/activationsadvertisinginc" style="color:#6e88a3;text-decoration:none;"><img src="img/facebook.png"> facebook.com/activationsadvertisinginc</a></h4>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-4 col-xs-offset-1">
						<h4 style="color:#6e88a3;"><a href="https://twitter.com/ActivationsAd" style="color:#6e88a3;text-decoration:none;"><img src="img/tweet.png"> twitter.com/ActivationsAd</a></h4>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-4 col-xs-offset-1">
						<h4 style="color:#6e88a3;"><a href="https://www.instagram.com/activationsadvertising/" style="color:#6e88a3;text-decoration:none;"><img src="images/instagram.png"> www.instagram.com/activationsadvertising/</a></h4>
					</div>	
				</div>
			</div>	
		</div>
	</div>	

</div>

<div id="footer">
		<?php 
			// $this->load->view('home/footer');
			//echo 'footer here';			
        ?>
		<div>&nbsp;</div>
		<div class="container">
			<div class="col-md-4 col-md-offset-5 col-sm-4 col-sm-offset-4">
				<!--<img src="images/footer-logo.png" style="background:transparent;">-->
			</div>
		</div>
		<div>&nbsp;</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="myErrorReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			  <div class="modal-content modal_btop">
					<div class="modal-body">
						<div class="container">
							<div class="alert alert-danger alert_msg" style="text-align:center"></div>
						</div>
					</div>
			  </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<!-- Modal -->
	<div class="modal fade" id="mySuccessReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content modal_btop">
				<div class="modal-body">
					<!--<p>Profile updated success...</p>-->
					<div class="container">
						<div class="alert alert-success success_msg" style="text-align:center"></div>
					</div>
					<!--<p>Please verify your email to activate your account.</p>-->
					<div class="modal-footer">
						<a href="<?php echo base_url('');?>" class="btn btn-default">OK</a>
					</div>
				</div>
				
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->