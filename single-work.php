<?php get_header();?>
<?php
while ( have_posts() ): the_post();

    if ( get_post_meta( get_the_ID(), 'neuron_work_meta', true ) ) {
        $post_meta = get_post_meta( get_the_ID(), 'neuron_work_meta', true );
    } else {
        $post_meta = array();
    }
    if ( array_key_exists( 'sub_title', $post_meta ) ) {
        $sub_title = $post_meta['sub_title'];
    } else {
        $sub_title = '';
    }
    if ( array_key_exists( 'link_text', $post_meta ) ) {
        $link_text = $post_meta['link_text'];
    } else {
        $link_text = '';
    }
    if ( array_key_exists( 'overview_image', $post_meta ) ) {
        $overview_image = $post_meta['overview_image'];
    } else {
        $overview_image = '';
    }
    if ( array_key_exists( 'link', $post_meta ) ) {
        $link = $post_meta['link'];
    } else {
        $link = '';
    }
    if ( array_key_exists( 'work-info-group-1', $post_meta ) ) {
        $informations = $post_meta['work-info-group-1'];
    } else {
        $informations = '';
    }

    ?>
				<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
						<section <?php if ( has_post_thumbnail() ): ?> style="background-image:url(<?php the_post_thumbnail_url( 'large' );?> ) " <?php endif;?> class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- breadcrumb content -->
						<div class="page-breadcrumbd">
							<h2><?php the_title();?></h2>
							<p><a href="<?php echo site_url(); ?>">Home</a> / <?php the_title();?></p>
						</div><!-- end breadcrumb content -->
					</div>
				</div>
			</div>
		</section><!-- end breadcrumb -->

		<!-- start portfolio single -->
	<section class="single-portfolio-wrapper section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<!-- single portfolio images -->
					<div class="single-portfolio-images">
                        <?php $overviewImg = wp_get_attachment_image_src( $overview_image, 'large', true );?>
                        <?php if(!empty($overviewImg)) : ?>
						<img class="img-responsive" src="<?php echo $overviewImg[0]; ?>" alt="" />
                        <?php else : ?>
                        <?php the_post_thumbnail('large'); endif; ?>
					</div>
				</div>
				<div class="col-md-4">
					<!-- single portfolio info -->
					<div class="single-portfolio-inner">
						<header class="single-portfolio-title">
							<a><?php if ( !empty( $sub_title ) ): echo $sub_title;endif;?></a>
							<h2><?php the_title();?></h2>
						</header>
						<div class="portfolio-details-panel">
							<p><?php the_content();?></p>

							<ul class="portfolio-meta">
                                <?php if ( !empty( $informations ) ): foreach ( $informations as $information ): ?>
	                                    <li><span> <?php echo $information['title']; ?> </span> <?php echo $information['values']; ?></li>
	                                <?php endforeach;endif;?>

								<li><span> Share </span> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<a class="btn btn-primary" href="<?php echo $link; ?>"> <?php echo $link_text; ?> </a>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php endwhile;?>
<?php get_footer();?>