<?php
	$promo_title = cs_get_option( 'promo_title' );
	$promo_desc = cs_get_option( 'promo_content' );
?>
	<!-- ::::::::::::::::::::: start intro section:::::::::::::::::::::::::: -->
		<section class="section-padding darker-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
						<div class="intro-title text-center">
							<h2><?php echo $promo_title ?></h2>
							<div class="hidden-xs">
								<p><?php echo wpautop($promo_desc) ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single intro -->
		<?php
			global $post;
			$myposts = get_posts( array(
				'posts_per_page' => 3,
				'post_type'      => 'feature',
				'orderby'        => 'menu_order',
				'order'          => 'ASC',
			) );

			if ( $myposts ) {
				foreach ( $myposts as $post ):
					setup_postdata( $post );?>
					<div class="col-md-4">
						<div class="single-intro">
							<div style="background-image: url(<?php the_post_thumbnail_url( 'large' );?>)" class="intro-img"></div>
							<div class="intro-details text-center">
								<h3><?php the_title();?></h3>
								<p><?php echo esc_html( wp_trim_words( get_the_content(), 120, '...' ) ); ?></p>
							</div>
						</div>
					</div>
				<?php
			endforeach;
				wp_reset_postdata();
			}
			?>

		</div>
	</div>
</section><!-- intro area end -->