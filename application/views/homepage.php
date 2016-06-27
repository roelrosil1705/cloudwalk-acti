<!DOCTYPE html>
<html>
<head>
	<title><?php echo isset($title) ? $title : 'Activation Advertising, Inc.'; ?></title>
	<meta name="description" content="As of June 20, 2016, we at Activations Advertising, Inc. continue to cooperate with the NBI and the Congress regarding the investigation on Closeup Forever Summer 2016 .">
	<meta name="keywords" content="Activations, Advertising">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<link href="<?php echo base_url();?>style/news_style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>style/whatwedo_style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>style/style.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>elastslide/css/demo.css" /><!-- added 01-03-2014 -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>elastslide/css/elastislide.css" /><!-- added 01-03-2014 -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>elastslide/css/custom.css" /><!-- added 01-03-2014 -->
	<script src="<?php echo base_url();?>elastslide/js/modernizr.custom.17475.js"></script><!-- added 01-03-2014 -->

	<script type="application/ld+json">
	{
	  "@context": "http://schema.org",
	  "@type": "Organization",
	  "url": "http://activationsadvertising.com",
	  "contactPoint": [{
		"@type": "ContactPoint",
		"telephone": "435-6566",
		"contactType": "customer service"
	  }]
	}
	</script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-79955706-1', 'auto');
		ga('send', 'pageview');

	</script>
</head>
<body style="background-image:url('img/bg-workwithus.png');" class="aai-background">
	<div id="wrapper" style="border:solid px green;">
		<div class="">
			<?php echo isset($header) ? $header : ''; ?>
		</div>
		<div class="curtains">
			<div>
				<div id="home-aai" data-type="background" data-speed="10" style="margin-top:-40px;" class="aai-background home-para section-aai">
					<?php echo $body; ?>
				</div>
			</div>
			<div>		
				<div id="news-aai" data-type="background" data-speed="10" style="" class="aai-background news-para section-aai">
					<?php echo $this->load->view('news_view'); ?>
				</div>
			</div>
			<div>
				<div id="about-aai" data-type="background" data-speed="10" style="" class="aai-background about-para section-aai">
					<?php echo $this->load->view('about_view'); ?>
				</div>
			</div>
			<div>
				<div id="whatwedo-aai" data-type="background" data-speed="10" style="" class="aai-background whatwedo-para section-aai">
					<?php echo $this->load->view('whatwedo_view'); ?>
				</div>
			</div>
			<div>			
				<div id="ourwork-aai" data-type="background" data-speed="10" style="" class="aai-background ourwork-para section-aai">
					<?php echo $this->load->view('ourwork_view'); ?>
				</div>
			</div>
			<div>
				<div id="clients-aai" data-type="background" data-speed="10" style="" class="aai-background clients-para section-aai">
					<?php echo $this->load->view('clients_view'); ?>
				</div>
			</div>
			<div>
				<div id="workwithus-aai" data-type="background" data-speed="10" style="" class="aai-background workwithus-para section-aai">
					<?php echo $this->load->view('workwithus_view'); ?>
				</div>
			</div>
			<div>
				<div id="contact-aai" data-type="background" data-speed="10" style="" class="aai-background contact-para section-aai">
					<?php echo $this->load->view('contact_view'); ?>
				</div>
			</div>	
		</div>		

	</div>
	<div id="footer">
		<?php 
					// echo $this->load->view('homepage/footer');
                    // if(isset($identifier))
                    // {
                        // echo $this->load->view('homepage/footer');
                    // }
                    // else
                    // {
                       // echo $this->load->view('dentist_dashboard/footer');
                    // }
        ?>
	</div>
	
	<script src="<?php echo base_url();?>js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery-ui.min.js"></script>
	
	<script src="<?php echo base_url();?>bootstrap/js/bootstrap.js"></script>
	<script src="http://code.jquery.com/jquery.js"></script>  
    <script src="bootstrap/js/bootstrap.min.js"></script> 
	
	<script type="text/javascript" src="<?php echo base_url();?>elastslide/js/jquerypp.custom.js"></script><!-- added 01-03-2014 -->
	<script type="text/javascript" src="<?php echo base_url();?>elastslide/js/jquery.elastislide.js"></script><!-- added 01-03-2014 -->
	
	<script src="<?php echo base_url();?>js/jquery.form.js"></script>
	<script src="<?php echo base_url();?>js/custom.js"></script>
	
	<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script><!-- added 01-03-2014 -->
	
	<script type='text/javascript'>
	
	</script>
	  
  </body>
</html>
