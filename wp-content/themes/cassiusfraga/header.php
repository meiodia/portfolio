<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Sou Designer a 18 anos com experiência em criação de logos, identidades visuais, interfaces e experiência do usuário. Também sou um entusiasta em Front-end e WordPress. Strategic designer with 18 years on brand identity and interdacr design. I also work as interface designer and love apply my skills in front-end and Wordpress.">
		<meta name="keywords" content=", bran">
		<meta name="author" content="Cassius Fraga - vostokdesign.club">

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>
			<?php bloginfo('name'); // show the blog name, from settings ?> | 
			<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
		</title>

</head>

<body class="stretched side-header">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo" class="nobottomborder">
						<a href="<?php echo home_url() ?>" class="standard-logo" data-dark-logo="<?php echo get_template_directory_uri() ?>/images/logo-side-dark.png"><img src="<?php echo get_template_directory_uri() ?>/images/logo-side.png" alt="Cassius Fraga"></a>
						<a href="<?php echo home_url() ?>" class="retina-logo" data-dark-logo="<?php echo get_template_directory_uri() ?>/images/logo-side-dark@2x.png"><img src="<?php echo get_template_directory_uri() ?>/images/logo-side@2x.png" alt="Cassius Fraga"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li><a href="<?php echo home_url() ?>"><div>Sobre</div></a></li>
							<li class="current"><a href="<?php echo home_url() ?>"><div>Portfolio</div></a></li>
							<li><a href="<?php echo home_url() ?>"><div>Contato</div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

					<div class="clearfix d-none d-lg-block">

						<a href="#" class="social-icon si-small si-borderless si-behance">
							<i class="icon-behance"></i>
							<i class="icon-behance"></i>
						</a>

						<a href="https://www.linkedin.com/in/cassiusfraga" class="social-icon si-small si-borderless si-linkdin">
							<i class="icon-linkdin"></i>
							<i class="icon-linkdin"></i>
						</a>
					</div>

				</div>

			</div>

		</header><!-- #header end -->
