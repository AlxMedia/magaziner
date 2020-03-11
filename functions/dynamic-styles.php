<?php
/* ------------------------------------------------------------------------- *
 *  Dynamic styles
/* ------------------------------------------------------------------------- */

/*  Convert hexadecimal to rgb
/* ------------------------------------ */
if ( ! function_exists( 'magaziner_hex2rgb' ) ) {

	function magaziner_hex2rgb( $hex, $array=false ) {
		$hex = str_replace("#", "", $hex);

		if ( strlen($hex) == 3 ) {
			$r = hexdec(substr($hex,0,1).substr($hex,0,1));
			$g = hexdec(substr($hex,1,1).substr($hex,1,1));
			$b = hexdec(substr($hex,2,1).substr($hex,2,1));
		} else {
			$r = hexdec(substr($hex,0,2));
			$g = hexdec(substr($hex,2,2));
			$b = hexdec(substr($hex,4,2));
		}

		$rgb = array( $r, $g, $b );
		if ( !$array ) { $rgb = implode(",", $rgb); }
		return $rgb;
	}
	
}	


/*  Google fonts
/* ------------------------------------ */
if ( ! function_exists( 'magaziner_enqueue_google_fonts' ) ) {

	function magaziner_enqueue_google_fonts () {
		if ( get_theme_mod('dynamic-styles', 'on') == 'on' ) {
			if ( get_theme_mod( 'font' ) == 'titillium-web-ext' ) { wp_enqueue_style( 'titillium-web-ext', '//fonts.googleapis.com/css?family=Titillium+Web:400,400italic,300italic,300,600&subset=latin,latin-ext' ); }		
			if ( get_theme_mod( 'font' ) == 'droid-serif' )	{ wp_enqueue_style( 'droid-serif', '//fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700' ); }				
			if ( get_theme_mod( 'font' ) == 'source-sans-pro' )	{ wp_enqueue_style( 'source-sans-pro', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300italic,300,400italic,600&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'lato' ) { wp_enqueue_style( 'lato', '//fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700' ); }
			if ( get_theme_mod( 'font' ) == 'raleway' )	{ wp_enqueue_style( 'raleway', '//fonts.googleapis.com/css?family=Raleway:400,300,600' ); }
			if ( get_theme_mod( 'font' ) == 'ubuntu' ) { wp_enqueue_style( 'ubuntu', '//fonts.googleapis.com/css?family=Ubuntu:400,400italic,300italic,300,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'ubuntu-cyr' ) { wp_enqueue_style( 'ubuntu-cyr', '//fonts.googleapis.com/css?family=Ubuntu:400,400italic,300italic,300,700&subset=latin,cyrillic-ext' ); }
			/*default*/ if ( ( get_theme_mod( 'font' ) == '' ) || ( get_theme_mod( 'font' ) == 'roboto' ) ) { wp_enqueue_style( 'roboto', '//fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-cyr' ) { wp_enqueue_style( 'roboto-cyr', '//fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-condensed' ) { wp_enqueue_style( 'roboto-condensed', '//fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-condensed-cyr' ) { wp_enqueue_style( 'roboto-condensed-cyr', '//fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-slab' ) { wp_enqueue_style( 'roboto-slab', '//fonts.googleapis.com/css?family=Roboto+Slab:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-slab-cyr' ) { wp_enqueue_style( 'roboto-slab-cyr', '//fonts.googleapis.com/css?family=Roboto+Slab:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'playfair-display' ) { wp_enqueue_style( 'playfair-display', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'playfair-display-cyr' ) { wp_enqueue_style( 'playfair-display-cyr', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700&subset=latin,cyrillic' ); }
			if ( get_theme_mod( 'font' ) == 'open-sans' ) { wp_enqueue_style( 'open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'open-sans-cyr' ) { wp_enqueue_style( 'open-sans-cyr', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'pt-serif' ) { wp_enqueue_style( 'pt-serif', '//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'pt-serif-cyr' ) { wp_enqueue_style( 'pt-serif-cyr', '//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic&subset=latin,cyrillic-ext' ); }
		}
	}	
	
}
add_action( 'wp_enqueue_scripts', 'magaziner_enqueue_google_fonts' ); 


/*  Dynamic css output
/* ------------------------------------ */
if ( ! function_exists( 'magaziner_dynamic_css' ) ) {

	function magaziner_dynamic_css() {
		if ( get_theme_mod('dynamic-styles', 'on') == 'on' ) {
		
			// rgb values
			$color_1 = get_theme_mod('color-1');
			$color_1_rgb = magaziner_hex2rgb($color_1);
			
			// start output
			$styles = '';	
			
			// google fonts
			if ( get_theme_mod( 'font' ) == 'titillium-web-ext' ) { $styles .= 'body { font-family: "Titillium Web", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'droid-serif' ) { $styles .= 'body { font-family: "Droid Serif", serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'source-sans-pro' ) { $styles .= 'body { font-family: "Source Sans Pro", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'lato' ) { $styles .= 'body { font-family: "Lato", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'raleway' ) { $styles .= 'body { font-family: "Raleway", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'ubuntu' ) || ( get_theme_mod( 'font' ) == 'ubuntu-cyr' ) ) { $styles .= 'body { font-family: "Ubuntu", Arial, sans-serif; }'."\n"; }	
			/*default*/ if ( ( get_theme_mod( 'font' ) == '' ) || ( get_theme_mod( 'font' ) == 'roboto' ) || ( get_theme_mod( 'font' ) == 'roboto-cyr' ) ) { $styles .= 'body { font-family: "Roboto", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'roboto-condensed' ) || ( get_theme_mod( 'font' ) == 'roboto-condensed-cyr' ) ) { $styles .= 'body { font-family: "Roboto Condensed", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'roboto-slab' ) || ( get_theme_mod( 'font' ) == 'roboto-slab-cyr' ) ) { $styles .= 'body { font-family: "Roboto Slab", Arial, sans-serif; }'."\n"; }			
			if ( ( get_theme_mod( 'font' ) == 'playfair-display' ) || ( get_theme_mod( 'font' ) == 'playfair-display-cyr' ) ) { $styles .= 'body { font-family: "Playfair Display", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'open-sans' ) || ( get_theme_mod( 'font' ) == 'open-sans-cyr' ) )	{ $styles .= 'body { font-family: "Open Sans", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'pt-serif' ) || ( get_theme_mod( 'font' ) == 'pt-serif-cyr' ) ) { $styles .= 'body { font-family: "PT Serif", serif; }'."\n"; }	
			if ( get_theme_mod( 'font' ) == 'arial' ) { $styles .= 'body { font-family: Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'georgia' ) { $styles .= 'body { font-family: Georgia, serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'verdana' ) { $styles .= 'body { font-family: Verdana, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'tahoma' ) { $styles .= 'body { font-family: Tahoma, sans-serif; }'."\n"; }
			
			// container width
			if ( get_theme_mod('container-width') != '1680' ) {			
				if ( get_theme_mod( 'boxed' ) ) { 
					$styles .= '.boxed #wrapper, .container { max-width: '.esc_attr( get_theme_mod('container-width') ).'px; }'."\n";
				}
				else {
					$styles .= '.container { max-width: '.esc_attr( get_theme_mod('container-width') ).'px; }'."\n";
				}
			}
			// primary color
			if ( get_theme_mod('color-1','#5299eb') != '#5299eb' ) {
				$styles .= '
::selection { background-color: '.esc_attr( get_theme_mod('color-1') ).'; }
::-moz-selection { background-color: '.esc_attr( get_theme_mod('color-1') ).'; }

a,
.themeform label .required,
.featured-large-inner:hover .featured-o-title,
.featured-small:hover .featured-o-title,
.stripe-popular li .stripe-popular-title:hover,
.post-hover:hover .post-title a,
.post-title a:hover,
.post-nav li a:hover span,
.post-nav li a:hover i,
.dark.sidebar .post-nav li a:hover span,
.dark.sidebar .post-nav li a:hover i,
.widget a:hover,
.widget > ul li a:hover:before,
.widget_rss ul li a,
.widget_calendar a,
.alx-tabs-nav li.active a,
.alx-tab .tab-item-category a,
.alx-posts .post-item-category a,
.alx-tab li:hover .tab-item-title a,
.alx-tab li:hover .tab-item-comment a,
.alx-posts li:hover .post-item-title a,
.dark .widget a:hover,
.dark .widget_rss ul li a,
.dark .widget_calendar a,
.dark .alx-tabs-nav li.active a,
.dark .alx-tab .tab-item-category a,
.dark .alx-posts .post-item-category a,
.dark .alx-tab li:hover .tab-item-title a,
.dark .alx-tab li:hover .tab-item-comment a,
.dark .alx-posts li:hover .post-item-title a,
.comment-tabs li.active a,
.comment-awaiting-moderation,
.child-menu a:hover,
.child-menu .current_page_item > a,
.wp-pagenavi a { color: '.esc_attr( get_theme_mod('color-1') ).'; }

.themeform input[type="button"],
.themeform input[type="reset"],
.themeform input[type="submit"],
.themeform button[type="button"],
.themeform button[type="reset"],
.themeform button[type="submit"],
.sidebar-toggle,
#owl-featured .owl-buttons div,
.stripe-comments li a:hover,
.post-tags a:hover,
.widget_calendar caption,
.dark .widget_calendar caption,
.commentlist li.bypostauthor > .comment-body:after,
.commentlist li.comment-author-admin > .comment-body:after,
.more-link-custom { background-color: '.esc_attr( get_theme_mod('color-1') ).'; }

.alx-tabs-nav li.active a,
.dark .alx-tabs-nav li.active a,
.comment-tabs li.active a,
.wp-pagenavi a:hover,
.wp-pagenavi a:active,
.wp-pagenavi span.current { border-bottom-color: '.esc_attr( get_theme_mod('color-1') ).'!important; }					
				'."\n";
			}
			// mobile menu color
			if ( get_theme_mod('color-mobile-menu','') != '' ) {
				$styles .= '
#nav-mobile.nav-container { background-color: '.esc_attr( get_theme_mod('color-mobile-menu') ).'; }
#nav-mobile .nav-toggle { color: rgba(255,255,255,0.9); }
#nav-mobile .nav-text { color: rgba(255,255,255,0.9); }
@media only screen and (max-width: 719px) {
	#nav-mobile .nav li a { color: rgba(255,255,255,0.7); }
	#nav-mobile .nav li > a:hover { color: rgba(255,255,255,0.9); }
	#nav-mobile .nav li.current_page_item > a, 
	#nav-mobile .nav li.current-menu-item > a,
	#nav-mobile .nav li.current-post-parent > a { color: rgba(255,255,255,0.9); }
}	
				'."\n";
			}
			// topbar menu color
			if ( get_theme_mod('color-topbar-menu','') != '' ) {
				$styles .= '
#header-top { background: '.esc_attr( get_theme_mod('color-topbar-menu') ).'; }
#nav-topbar .nav-toggle { color: rgba(255,255,255,0.9); }
#nav-topbar .nav-text { color: rgba(255,255,255,0.9); }
@media only screen and (min-width: 720px) {
	#nav-topbar .nav li a { color: rgba(255,255,255,0.7); }	
	#nav-topbar .nav li a:hover { color: rgba(255,255,255,0.9) }
	#nav-topbar .nav > li > a:hover, 
	#nav-topbar .nav > li:hover > a { color: rgba(255,255,255,0.9); }
	#nav-topbar .nav > li.current_page_item > a, 
	#nav-topbar .nav > li.current-menu-item > a,
	#nav-topbar .nav > li.current-menu-ancestor > a,
	#nav-topbar .nav > li.current-post-parent > a { color: rgba(255,255,255,0.9)!important; }
}
@media only screen and (max-width: 719px) {
	#nav-topbar .nav li a { color: rgba(255,255,255,0.7); }
	#nav-topbar .nav li > a:hover { color: rgba(255,255,255,0.9); }
	#nav-topbar .nav li.current_page_item > a, 
	#nav-topbar .nav li.current-menu-item > a,
	#nav-topbar .nav li.current-post-parent > a { color: rgba(255,255,255,0.9); }
}
				'."\n";
			}
			// header background
			if ( get_theme_mod('color-header','') != '' ) {
				$styles .= '
#header-middle { background: '.esc_attr( get_theme_mod('color-header') ).'; }
.site-title a { color: #fff; }
.site-description { color: rgba(255,255,255,0.7); }
#header-middle .social-links li a,
#header-middle .social-links li a:hover { color: #fff; }
				'."\n";
			}
			// header menu color
			if ( get_theme_mod('color-header-menu','') != '#262626' ) {
				$styles .= '#header-bottom { background: '.esc_attr( get_theme_mod('color-header-menu') ).'; }'."\n";
			}
			// page title color
			if ( get_theme_mod('color-page-title','') != '#262626' ) {
				$styles .= '.page-title { background: '.esc_attr( get_theme_mod('color-page-title') ).'; }'."\n";
			}
			// sidebar background
			if ( get_theme_mod('color-sidebars','') != '#262626' ) {
				$styles .= '#page { background: '.esc_attr( get_theme_mod('color-sidebars') ).'; }'."\n";
			}
			// sidebar widget title background
			if ( get_theme_mod('color-widget-title','') != '' ) {
				$styles .= '.sidebar .widget > h3 { background: '.esc_attr( get_theme_mod('color-widget-title') ).'; }'."\n";
			}
			// footer menu color
			if ( get_theme_mod('color-footer-menu','#222222') != '#222222' ) {
				$styles .= '
#nav-footer.nav-container { background-color: '.esc_attr( get_theme_mod('color-footer-menu') ).'; }
@media only screen and (min-width: 720px) {
	#nav-footer .nav ul { background-color: '.esc_attr( get_theme_mod('color-footer-menu') ).'; }
}
#footer-bottom #back-to-top { background-color: '.esc_attr( get_theme_mod('color-footer-menu') ).'; }			
				'."\n";
			}				
			// footer color
			if ( get_theme_mod('color-comment-count','') != '' ) {
				$styles .= '.post-comments { background-color: '.esc_attr( get_theme_mod('color-comment-count') ).'; }'."\n";
			}	
			// footer color
			if ( get_theme_mod('color-footer','#282828') != '#262626' ) {
				$styles .= '#footer-bottom { background-color: '.esc_attr( get_theme_mod('color-footer') ).'; }'."\n";
			}			
			// header logo max-height
			if ( get_theme_mod('logo-max-height','60') != '60' ) {
				$styles .= '.site-title a img { max-height: '.esc_attr( get_theme_mod('logo-max-height') ).'px; }'."\n";
			}
			// border radius
			if ( get_theme_mod('border-radius') != '30' ) {
				$styles .= '
img,
.themeform input[type="text"],
.themeform input[type="password"],
.themeform input[type="email"],
.themeform input[type="url"],
.themeform input[type="tel"],
.themeform input[type="number"],
.themeform input[type="submit"],
.themeform select,
.themeform button, 
.themeform textarea,
.themeform input[type="submit"],
.themeform button[type="submit"],
.notebox,
.toggle-search,
.search-expand,
.search-expand .themeform input,
.bg-line,
#owl-featured .owl-buttons .owl-prev,
#owl-featured .owl-buttons .owl-next,
.featured-large-inner,
.featured-large-inner img,
.featured-small,
.featured-small img,
.featured-o-thumb,
.col-3cr .content,
.col-2cr .content,
.col-3cm .content,
.stripe-comments,
.stripe-comments li a,
.stripe-comments li img,
.stripe-popular,
.post-thumbnail img,
.post-standard .post-inner,
.post-grid .post-inner,
.post-list .post-inner,
.sharrre-header,
.sharrre-footer .sharrre .box,
.sharrre-footer .sharrre .count,
.author-bio,
.author-bio .bio-avatar img,
.related-posts li,
.post-format,
.alx-tab img,
.alx-posts img,
.alx-posts li,
#commentform,
.post-tags a,
.social-count-plus > ul > li > a.icon { border-radius: '.esc_attr( get_theme_mod('border-radius') ).'px; }
.col-3cr .sidebar .widget,
.col-2cr .sidebar .widget,
.col-3cm .sidebar.s1 .widget { border-radius: '.esc_attr( get_theme_mod('border-radius') ).'px 4px 4px '.esc_attr( get_theme_mod('border-radius') ).'px; }
.sidebar .widget { border-radius: 4px '.esc_attr( get_theme_mod('border-radius') ).'px '.esc_attr( get_theme_mod('border-radius') ).'px 4px; }
.content { border-radius: 0px '.esc_attr( get_theme_mod('border-radius') ).'px '.esc_attr( get_theme_mod('border-radius') ).'px 0px; }
.col-2cr .s1 .sidebar-toggle,
.col-2cl.s1-expand .sidebar-toggle,
.col-3cl.s1-expand .sidebar-toggle,
.col-3cl.s2-expand .s2 .sidebar-toggle,
.col-3cr .sidebar-toggle,
.col-3cm .s1 .sidebar-toggle,
.col-3cm.s2-expand .s2 .sidebar-toggle { border-radius: 0px '.esc_attr( get_theme_mod('border-radius') ).'px '.esc_attr( get_theme_mod('border-radius') ).'px 0px; }
.col-2cr.s1-expand .sidebar-toggle,
.col-2cl .sidebar-toggle,
.col-3cl .sidebar-toggle,
.col-3cr.s1-expand .sidebar-toggle,
.col-3cr.s2-expand .sidebar-toggle,
.col-3cm.s1-expand .s1 .sidebar-toggle,
.col-3cm .s2 .sidebar-toggle { border-radius: '.esc_attr( get_theme_mod('border-radius') ).'px 0px 0px '.esc_attr( get_theme_mod('border-radius') ).'px; }
.more-link-custom { border-radius: '.esc_attr( get_theme_mod('border-radius') ).'px 0 0 0; }
.entry .gallery .gallery-caption,
.widget .gallery .gallery-caption { border-radius: 0 0 '.esc_attr( get_theme_mod('border-radius') ).'px '.esc_attr( get_theme_mod('border-radius') ).'px; }
				'."\n";
			}
			// header text color
			if ( get_theme_mod( 'header_textcolor' ) != '' ) {
				$styles .= '.site-title a, .site-description { color: #'.esc_attr( get_theme_mod( 'header_textcolor' ) ).'; }'."\n";
			}
			wp_add_inline_style( 'magaziner-style', $styles );	
		}
	}
	
}
add_action( 'wp_enqueue_scripts', 'magaziner_dynamic_css' );
