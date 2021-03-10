<?php
/*
Template Name: Welcome Template
 */
?>
<?php get_header();
$agency_title = cs_get_option( 'agency_title' );
$agency_desc = cs_get_option( 'agency_desc' );
$agency_img = cs_get_option( 'agency_img', 'large' );
$agency_img_array = wp_get_attachment_image_src( cs_get_option( 'agency_img', 'large' ) );
$agency_img = $agency_img_array[0];

?>


		<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
		<section class="slider-area">

	<?php
global $post;
$myposts = get_posts( array(
    'posts_per_page' => 5,
    'post_type'      => 'slide',
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
) );

if ( $myposts ) {
    foreach ( $myposts as $post ):
        setup_postdata( $post );?>
							<?php
    $btn_link = get_post_meta( $post->ID, 'btn_link', true );
        $btn_text = get_post_meta( $post->ID, 'btn_text', true );
        ?>
							<div style="background-image: url(<?php the_post_thumbnail_url( 'large' );?>)" class="homepage-slider ">
								<div class="display-table">
									<div class="display-table-cell">
										<div class="container">
											<div class="row">
												<div class="col-sm-7">
													<div class="slider-content">
														<h1><?php the_title();?></h1>
														<p><?php echo esc_html( wp_trim_words( get_the_content(), 120, '...' ) ); ?></p>
														<a href="<?php echo $btn_link ?>"><?php echo $btn_text ?><i class="fa fa-long-arrow-right"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


						<?php
endforeach;
    wp_reset_postdata();
}
?>


		</section><!-- slider area end -->


		<!-- this promo section -->
		<?php get_template_part( 'contents/promo' );?>

		<!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
		<?php get_template_part( 'contents/agency' );?>
		
		<!-- this services section -->
		<?php get_template_part( 'contents/services' );?>


	<?php get_footer();?>