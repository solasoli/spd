<!doctype html>
<html>
	<head>
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/workshop-profile.css">
</head>
<body>
	<!-- Navigantion Start -->
	<nav class="navbar " style="background-color: #000;">
  		<div class="navbar-brand">
    		<a class="navbar-item" href="http://bulma.io">
      			<img src="logo.png" alt="Speedcreed" width="112" height="100">
    		</a> 
  		</div>

	  	<div class="navbar-menu">
	  		<div class="navbar-end">
	    		<a class="navbar-item" style="color: #fff;">
	  				COMMUNITY
				</a>
				<a class="navbar-item" style="color: #fff;">
	  				GARAGE LOCATION
				</a>
				<a class="navbar-item" style="color: #fff;">
	  				SHOP
				</a>
				<a class="navbar-item" style="color: #fff;">
	  				USER MEMBERSHIP
				</a>
	    	</div>
	  	</div>
	</nav>
			<!-- /header -->
