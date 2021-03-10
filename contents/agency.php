<?php
$agency_title = cs_get_option( 'agency_title' );
$agency_desc = cs_get_option( 'agency_desc' );
$agency_img = cs_get_option( 'agency_img', 'large' );
$agency_img_array = wp_get_attachment_image_src( cs_get_option( 'agency_img', 'large' ) );
$agency_img = $agency_img_array[0];
?>
<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="block-text">
							<h2><?php echo $agency_title; ?></h2>
							<?php echo wpautop( $agency_desc ); ?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="block-img">
							<?php if ( !empty( $agency_img ) ) {?>
								<img src="<?php echo $agency_img; ?>" alt="" />
							<?php } else {?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/homepageblock.jpg" alt="" />
						    <?php }?>


						</div>
					</div>
				</div>
			</div>
</section><!-- block area end -->