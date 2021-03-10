<?php
/*
Template Name: About Template
 */
?>
<?php get_header();?>
<?php while ( have_posts() ): the_post();?>
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

		<?php get_template_part( 'contents/agency' );?>
		<!-- this promo section -->
		<?php get_template_part( 'contents/promo' );?>

		<!-- ::::::::::::::::::::: Accordian Section:::::::::::::::::::::::::: -->
		<section class="accordian-section section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="accorian-item">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<!-- accordian item-1 -->
								<?php 
									$faq_no = 0;
									$faqs = cs_get_option('faq_group'); 
									foreach ($faqs as $faq): 
									$faq_no++;
									if ($faq_no === 1) {
										$area_expand = 'true';
										$inclass = 'in';
									}else{
										$area_expand = 'false';
										$inclass = '';
									}
								?>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading-<?php echo $faq_no; ?>">
										<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $faq_no; ?>" aria-expanded="<?php echo $area_expand; ?>" aria-controls="collapse-<?php echo $faq_no; ?>">
										<?php echo $faq['faq_title']; ?>
										</a>
										</h4>
									</div>
									<div id="collapse-<?php echo $faq_no; ?>" class="panel-collapse collapse <?php echo $inclass; ?>" role="tabpanel" aria-labelledby="heading-<?php echo $faq_no; ?>">
										<div class="panel-body">
											<?php echo wpautop($faq['faq_desc']); ?>
										</div>
									</div>
								</div>
								<?php endforeach; ?>
							
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<!-- accordian right text block -->
						<div class="accordian-right-content">
							<h2><?php echo cs_get_option('know_more_title'); ?></h2>
							<?php echo wpautop(cs_get_option( 'know_more_desc' )); ?>
						</div>
					</div>
				</div>
			</div>
		</section><!-- end accordian section -->

<?php endwhile;?>
<?php get_footer();?>