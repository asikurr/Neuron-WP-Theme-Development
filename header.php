<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
      
    <?php wp_head(); ?>
	</head>


	<body <?php body_class(); ?> >
	
		<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
		<header>
			<!-- start top bar -->
			<?php 
				$enable_header_top = cs_get_option('enable_header_top');
				$top_social_group = cs_get_option('top_social_group');
				$top_link_group = cs_get_option('top_link_group');
				if ($enable_header_top === TRUE) :
			?>
			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 hidden-xs">
							<div class="contact">
								<?php 
									if(!empty($top_link_group)) : 
									foreach($top_link_group as $top_link) : 
								?>
								<p>
									<i class="<?php echo $top_link['link_icon']?>"></i>
										<?php if(!empty($top_link['link'])) : ?>
									<a href="<?php echo $top_link['link']; ?>" target="<?php echo $top_link['link_target']; ?>">
										<?php endif; ?>

											<?php echo $top_link['link_text'] ?>

										<?php if ( !empty( $top_link['link'] ) ): ?>
									</a>
										<?php endif;?>
								</p>

								<?php  endforeach; endif; ?>
							</div><!-- /.contact -->
						</div><!-- /.col-sm-8 -->
						
						<div class="col-sm-4">
							<div class="social-icon">
								<ul>
									<?php if (!empty($top_social_group)) :  
										foreach ($top_social_group as $social_group) : 
									?>
									<li><a href="<?php echo $social_group['social_link']; ?>" target="<?php echo $social_group['social_link_target']; ?>" >
										<i class="<?php echo $social_group['social_icon']; ?>"></i></a>
								   </li>
									<?php endforeach; endif; ?>
								</ul>
							</div><!-- /.social-icon -->
						</div><!-- /.col-sm-4 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- end top bar -->

			<?php endif; ?>
			
	        <!-- Start Navigation -->
	        <nav class="navbar navbar-default navbar-sticky bootsnav">
	            <!-- Start Top Search -->
	            <div class="top-search">
	                <div class="container">
	                    <div class="input-group">
	                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
	                        <input type="text" class="form-control" placeholder="Search">
	                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
	                    </div>
	                </div>
	            </div>
	            <!-- End Top Search -->

	            <div class="container">
	                <!-- Start Atribute Navigation -->
	                <div class="attr-nav">
	                    <ul>
	                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
	                
	                    </ul>
	                </div>
	                <!-- End Atribute Navigation -->

	                <!-- Start Header Navigation -->
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
	                        <i class="fa fa-bars"></i>
	                    </button>
	                    <a class="navbar-brand" href="<?php echo site_url('/'); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" class="logo logo-scrolled" alt=""></a>
	                </div>
	                <!-- End Header Navigation -->

	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="collapse navbar-collapse" id="navbar-menu">
						<?php
							$args = array(
								'theme_location' => 'menu-1',
								'menu_class'        => 'nav navbar-nav navbar-right',
							);
							wp_nav_menu( $args)
						?>
	                   
	                </div><!-- /.navbar-collapse -->
	            </div>
	        </nav>
	        <!-- End Navigation -->
	        <div class="clearfix"></div>
		</header> <!-- end header -->
