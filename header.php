<!DOCTYPE html> 
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<a class="skip-link screen-reader-text" href="#page"><?php _e( 'Skip to content', 'magaziner' ); ?></a>

<div id="wrapper">

	<header id="header" class="group">
		
		<?php if ( get_theme_mod('header-ads','off') == 'on' ): ?>
			<div id="header-ads">
				<?php dynamic_sidebar( 'header-ads' ); ?>
			</div><!--/#header-ads-->
		<?php endif; ?>

		<div id="header-top" class="group">
			<div class="container group">
				<div class="group pad">
					
					<?php if ( has_nav_menu('mobile') ): ?>
						<nav class="nav-container group" id="nav-mobile">
							<div class="nav-toggle"><i class="fas fa-bars"></i></div>
							<div class="nav-text"><!-- put your mobile menu text here --></div>
							<div class="nav-wrap pad container"><?php get_search_form(); ?><?php wp_nav_menu(array('theme_location'=>'mobile','menu_class'=>'nav group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
						</nav><!--/#nav-mobile-->
					<?php endif; ?>
					
					<?php if ( has_nav_menu('topbar') ): ?>
						<nav class="nav-container group" id="nav-topbar">
							<div class="nav-toggle"><i class="fas fa-bars"></i></div>
							<div class="nav-text"><!-- put your mobile menu text here --></div>
							<div class="nav-wrap container"><?php get_search_form(); ?><?php wp_nav_menu(array('theme_location'=>'topbar','menu_class'=>'nav group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
						</nav><!--/#nav-topbar-->
					<?php endif; ?>
					
					<?php if ( get_header_image() ) : ?>
						<div class="site-header">
							<a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
								<img class="site-image" src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
							</a>
						</div>
					<?php endif; ?>
				
				</div><!--/.pad-->
			</div><!--/.container-->
		</div><!--/#header-top-->
		
		<div id="header-middle" class="group">
			<div class="container group">
				<div class="group pad">
					<?php echo magaziner_site_title(); ?>
					<?php if ( display_header_text() == true ): ?>
						<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					<?php endif; ?>

					<?php if ( get_theme_mod( 'header-social', 'on' ) == 'on' ): ?>
						<?php magaziner_social_links() ; ?>
					<?php endif; ?>
					
				</div><!--/.pad-->
			</div><!--/.container-->
		</div><!--/#header-middle-->
		
		<div id="header-sticky">
			<div id="header-bottom" class="group">

				<div class="container group">
					<div class="group pad">
					
						<?php if ( get_theme_mod('sticky-header-logo') ): ?>
							<a id="sticky-header-logo" href="<?php echo esc_url( home_url('/') ); ?>" rel="home">	
								<img src="<?php echo esc_url( get_theme_mod('sticky-header-logo') ); ?>" alt="<?php echo esc_attr( get_bloginfo('name')); ?>">
							</a>
						<?php endif; ?>
						
						<?php if ( has_nav_menu('header') ): ?>
							<nav class="nav-container group" id="nav-header">
								<div class="nav-toggle"><i class="fas fa-bars"></i></div>
								<div class="nav-text"><!-- put your mobile menu text here --></div>
								<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'header','menu_class'=>'nav group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
							</nav><!--/#nav-header-->
						<?php endif; ?>
						
						<?php if ( get_theme_mod( 'header-search', 'on' ) == 'on' ): ?>
							<div class="toggle-search"><i class="fas fa-search"></i></div>
							<div class="search-expand">
								<div class="search-expand-inner">
									<?php get_search_form(); ?>
								</div>
							</div>
						<?php endif; ?>

					</div><!--/.pad-->
				</div><!--/.container-->
			
			</div><!--/#header-bottom-->
		</div><!--/#header-sticky-->
		
		

	</header><!--/#header-->