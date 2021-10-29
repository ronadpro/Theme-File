<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package itravel_blank_theme
 */

get_header();
?>

<div class="container">
	<a class="back_btn" href="<?php echo home_url(); ?>">BACK</a>
	<h1><?php the_title() ?></h1>
</div>	

<div class="container">
	<?php 
		$galdatas = get_field('gallery', get_the_ID());
		$fetimg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
		if(!empty($galdatas)){
	?>
		<div class="globalgallery">
			<div class="row customrow">
				<?php foreach ($galdatas as $galdata) { ?>
				<div class="col-6 col-sm-4 col-md-3 col-lg-2 customcol">
					<div class="item">
						 <a class="fancy-content" href="<?php echo $galdata['url']; ?>" data-fancybox="singlegroup">
							<img src="<?php echo $galdata['sizes']['gallery-thumb'] ?>" alt="<?php echo $galdata['name']; ?>">
						</a>
					</div>
				</div>
				<?php }	?>	
			</div>
		</div>
		
	<?php } else{ ?>
		<h5>No Images Uploaded</h5>
	<?php } ?>
</div>




<?php
get_footer();
