<?php
/**
 * @package Gutenbergtheme
 */
get_header(); ?>
<section id="content"  style="padding: 40px;">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('large', array('class' => 'img-reponsive')); // Fullsize image for the single post ?>
			</a>
		<?php endif; ?>
		<br>
		<?php the_content();?>
		<br clear="all">
		<?php //_e( 'Published by', 'html5blank' ); ?> <?php //the_author_posts_link(); ?>
	<?php endwhile; ?>
	<br>
	<a href="<?php echo home_url() ?>" class="button button-small button-3d nomargin">Voltar</a>
	<?php else: ?>
		<article>
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
		</article>
	<?php endif; ?>
</section>
	<a href="<?php echo home_url() ?>/contatos" class="button button-full center button-light button-white">
		<div class="container clearfix">
			Precisa de logo ou site para sua empresa? <strong>Entre em contato</strong> <i class="icon-caret-right" style="top:4px;"></i>
		</div>
	</a>

<?php get_footer() ;?>
