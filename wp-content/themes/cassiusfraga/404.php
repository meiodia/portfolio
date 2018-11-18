<?php get_header() ;?>

<section id="slider" class="slider-element slider-parallax full-screen dark error404-wrap">
	<div class="slider-parallax-inner">
		<div class="container-fluid vertical-middle center clearfix">
			<div class="error404">404</div>
			<div class="heading-block nobottomborder">
				<h4>Ooopps.! The Page you were looking for, couldn't be found.</h4>
			</div>
		</div>

		<div class="video-wrap">
			<video poster="images/videos/explore.jpg" preload="auto" loop autoplay muted>
				<source src='<?php echo get_template_directory_uri() ?>/images/videos/explore.mp4' type='video/mp4' />
				<source src='<?php echo get_template_directory_uri() ?>/images/videos/explore.webm' type='video/webm' />
			</video>
			<div class="video-overlay" style="background-color: rgba(0,0,0,0.3);"></div>
		</div>
	</div>

</section>
<?php get_footer() ;?>
