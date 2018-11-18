<?php get_header() ;?>

<section id="content">
	<div class="content-wrap nopadding">

		<div id="portfolio" class="portfolio grid-container portfolio-3 portfolio-full portfolio-nomargin portfolio-notitle clearfix">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="portfolio-item pf-icons pf-illustrations">
					<div class="portfolio-image">
						<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
							<div class="flexslider">
								<div class="slider-wrap">
									<div class="slide">
										<a href="<?php the_permalink() ?>" alt="<?php the_title(); ?>"><?php the_post_thumbnail('medium'); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="portfolio-desc">
						<a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
					</div>
				</article>
			<?php endwhile; ?>

			<?php else : ?>
				<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<h1>Not Found</h1>
				</div>
			<?php endif; ?>
			
		</div>
		<a href="<?php echo home_url() ?>/contatos" class="button button-full center button-light button-white">
			<div class="container clearfix">
				Precisa de ajuda? <strong>Entre em contato</strong> <i class="icon-caret-right" style="top:4px;"></i>
			</div>
		</a>
	</div>
</section>
<?php get_footer(); ?>