<?php
/**
 * @package Gutenbergtheme
 */
get_header(); ?>
<style type="text/css">
input[type="text"],
input[type="email"],
textarea
{
	background-color: #fff;
	color: #000;
	width: 100%;
}
.wpcf7 input[type="text"],
.wpcf7 input[type="email"]
{
	background-color: #fff;
	color: #000;
	width: 100%;
    height: 40px;
    border-radius: 6px;
    border: 1px solid #ccc;
}

.wpcf7 textarea
{
	background-color: #fff;
	color: #000;
	width: 100%;
	
    height: 100px;
    border-radius: 6px;
    border: 1px solid #ccc;
}
.wpcf7, label {
	width: 100%;
}
</style>
<section id="content"  style="padding: 40px;">
	<div class="row">
		<!-- <div class="col-lg-6">
			Phone: (31) 998923077
		</div> -->
		<div class="col-lg-12">
			<h1>Envie um pedido de orçamento</h1>
			<?php echo do_shortcode( '[contact-form-7 id="36" title="contato"]' ) ?>
		</div>
	</div>
</section>
<?php get_footer() ;?>

