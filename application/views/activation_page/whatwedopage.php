<!DOCTYPE html>
<html>
  <head>
  
  <meta name="robots" content="noindex">
  
	<title><?php echo isset($title) ? $title : 'Activation Advertising, Inc.'; ?></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	
	<link href="<?php echo base_url();?>style/whatwedo_style.css" rel="stylesheet">
	
  </head>
  <body style="background:#615f5e;">
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
