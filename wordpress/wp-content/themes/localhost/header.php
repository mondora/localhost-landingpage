<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
        </script>

	</head>
	<body <?php body_class(); ?>>

		<div id="background-image"><img src="<?php echo get_template_directory_uri(); ?>/img/back.jpg"></div>

		<!-- wrapper -->
		<div class="container-fluid">

			<!-- header -->
			<header class="header clear" role="banner">
					<!-- logo -->
					<div id="logo" class="col-sm-12">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/localhost.png" alt="LocalHost">
						</a>
					</div>
					<!-- /logo -->
			</header>
			<!-- /header -->
