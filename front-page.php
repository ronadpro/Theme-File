<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package itravel_blank_theme
 */

get_header();
?>
   
<?php
    $query_args = array(
     'post_type'     => 'itravel_images',
     'post_status'     => 'publish',
     'posts_per_page'  => -1,
     'order' => 'ASC'
   );
   $post_query = new WP_Query($query_args); 
   if ( $post_query->have_posts() ){
?>
<div class="gallery">
	<div class="container custom-container">
		<h1>GALLERY</h1>
		<div class="row mobilerow">
			<?php
			    while ($post_query->have_posts()){
			    $post_query->the_post();
			?>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<a href="<?php the_permalink() ?>">
					<div class="gallery__item">
						<img src="http://149.28.198.152/~images/folder.png" alt="img-placeholder">
						<div class="gallery__item-title">
							<?php the_title(); ?>
						</div>
					</div>
				</a>
			</div>
	        <?php } wp_reset_query(); ?> 
		</div>
	</div>
</div>
<?php } ?>

<?php get_footer();


