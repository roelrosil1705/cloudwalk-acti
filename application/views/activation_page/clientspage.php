<!DOCTYPE html>
<html>
  <head>
  
  <meta name="robots" content="noindex">
  
	<title><?php echo isset($title) ? $title : 'Activation Advertising, Inc.'; ?></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	
	<link href="<?php echo base_url();?>style/news_style.css" rel="stylesheet">
	
  </head>
  <body style="background:#de6818;">
  <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-79955706-1', 'auto');
	  ga('send', 'pageview');

  </script>
	<div id="wrapper">
		<?php echo isset($header) ? $header : ''; ?>

		<?php echo $body; ?>
		

	</div>
	<div id="footer">
		<?php 
				echo "about footer"		
        ?>
	</div>

  </body>
</html>
