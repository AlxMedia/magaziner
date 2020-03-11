<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'magaziner', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'magaziner' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'magaziner' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'magaziner' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'magaziner' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'magaziner' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'magaziner' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'magaziner' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'magaziner' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'magaziner' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Responsive Layout
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'responsive',
	'label'			=> esc_html__( 'Responsive Layout', 'magaziner' ),
	'description'	=> esc_html__( 'Mobile and tablet optimizations (responsive.css)', 'magaziner' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Mobile Sidebar
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'magaziner' ),
	'description'	=> esc_html__( 'Hide sidebar content on low-resolution mobile devices (320px)', 'magaziner' ),
	'section'		=> 'general',
	'default'		=> '1',
	'choices'		=> array(
		'1'			=> esc_html__( 'Show sidebars', 'magaziner' ),
		's1'		=> esc_html__( 'Hide primary sidebar', 'magaziner' ),
		's2'		=> esc_html__( 'Hide secondary sidebar', 'magaziner' ),
		's1-s2'		=> esc_html__( 'Hide both sidebars', 'magaziner' ),
	),
) );
// General: Post Comments
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'post-comments',
	'label'			=> esc_html__( 'Post Comments', 'magaziner' ),
	'description'	=> esc_html__( 'Comments on posts', 'magaziner' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Page Comments
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'page-comments',
	'label'			=> esc_html__( 'Page Comments', 'magaziner' ),
	'description'	=> esc_html__( 'Comments on pages', 'magaziner' ),
	'section'		=> 'general',
	'default'		=> 'off',
) );
// General: Recommended Plugins
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'magaziner' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'magaziner' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Blog Layout
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'blog-layout',
	'label'			=> esc_html__( 'Blog Layout', 'magaziner' ),
	'section'		=> 'blog',
	'default'		=> 'blog-grid',
	'choices'		=> array(
		'blog-standard'	=> esc_html__( 'Standard', 'magaziner' ),
		'blog-grid'		=> esc_html__( 'Grid', 'magaziner' ),
		'blog-list'		=> esc_html__( 'List', 'magaziner' ),
	),
) );
// Blog: Heading
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'magaziner' ),
	'description'	=> esc_html__( 'Your blog heading', 'magaziner' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'magaziner' ),
	'description'	=> esc_html__( 'Your blog subheading', 'magaziner' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'magaziner' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'magaziner' ),
	'section'		=> 'blog',
	'default'		=> '24',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Post Count
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'magaziner' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'magaziner' ),
	'section'		=> 'blog',
	'default'		=> '3',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '3',
		'step'	=> '3',
	),
) );
// Blog: Featured Category
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'magaziner' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'magaziner' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'magaziner' ),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'checkbox',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'magaziner' ),
	'description'	=> esc_html__( 'To show featured posts in the slider AND the content below. Usually not recommended.', 'magaziner' ),
	'section'		=> 'blog',
	'default'		=> false,
) );
// Blog: Highlight Category
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'select',
	'settings'		=> 'highlight-category',
	'label'			=> esc_html__( 'Highlight Category', 'magaziner' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'magaziner' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'magaziner' ),
) );
// Blog: Highlights Category Count
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'highlight-posts-count',
	'label'			=> esc_html__( 'Highlight Post Count', 'magaziner' ),
	'description'	=> esc_html__( 'Max number of highlight posts to display. Set it to 0 to disable.', 'magaziner' ),
	'section'		=> 'blog',
	'default'		=> '7',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '12',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Popular Posts
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-popular',
	'label'			=> esc_html__( 'Frontpage Popular Posts', 'magaziner' ),
	'description'	=> esc_html__( 'Shows the 3 most popular posts', 'magaziner' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Recent Comments
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-recent-comments',
	'label'			=> esc_html__( 'Frontpage Recent Comments', 'magaziner' ),
	'description'	=> esc_html__( 'Shows the 3 most recent comments', 'magaziner' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'magaziner' ),
	'description'	=> esc_html__( '2 columns of widgets', 'magaziner' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'magaziner' ),
	'description'	=> esc_html__( '2 columns of widgets', 'magaziner' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Comment Count
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Thumbnail Comment Count', 'magaziner' ),
	'description'	=> esc_html__( 'Comment count on thumbnails', 'magaziner' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'magaziner' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'magaziner' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'magaziner' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'magaziner' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'magaziner' ),
		'categories'=> esc_html__( 'Related by categories', 'magaziner' ),
		'tags'		=> esc_html__( 'Related by tags', 'magaziner' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'magaziner' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'magaziner' ),
	'section'		=> 'blog',
	'default'		=> 's1',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'magaziner' ),
		's1'		=> esc_html__( 'Sidebar Primary', 'magaziner' ),
		's2'		=> esc_html__( 'Sidebar Secondary', 'magaziner' ),
		'content'	=> esc_html__( 'Below content', 'magaziner' ),
	),
) );
// Header: Sticky Header Logo
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'image',
	'settings'		=> 'sticky-header-logo',
	'label'			=> esc_html__( 'Sticky Header Logo', 'magaziner' ),
	'description'	=> esc_html__( 'Shows up on the sticky header menu', 'magaziner' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Ads
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-ads',
	'label'			=> esc_html__( 'Header Ads', 'magaziner' ),
	'description'	=> esc_html__( 'Header widget ads area', 'magaziner' ),
	'section'		=> 'header',
	'default'		=> 'off',
) );
// Header: Search
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'magaziner' ),
	'description'	=> esc_html__( 'Header search button', 'magaziner' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'magaziner' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'magaziner' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Footer: Ads
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'magaziner' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'magaziner' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'magaziner' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'magaziner' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'magaziner' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'magaziner' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'magaziner' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'magaziner' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'magaziner' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'magaziner' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'magaziner' ),
	'description'	=> esc_html__( 'Footer credit text', 'magaziner' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'magaziner' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'magaziner' ),
	'section'		=> 'layout',
	'default'		=> 'col-3cl',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'magaziner' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'magaziner' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'magaziner' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'magaziner' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'magaziner' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'magaziner' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'magaziner' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'magaziner' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'magaziner' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'magaziner' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'magaziner' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'magaziner' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'magaziner' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'magaziner' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Sidebars: Create Sidebars
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Sidebars', 'magaziner' ),
	'description'	=> esc_html__( 'You must save and refresh the page to see your new sidebars.', 'magaziner' ),
	'tooltip'		=> esc_html__( 'Make sure that you save and refresh the page if you can not see the sidebars you have created.', 'magaziner' ),
	'section'		=> 'sidebars',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('sidebar', 'magaziner' ),
	),
	'settings'		=> 'sidebar-areas',
	'default'		=> '',
	'fields'		=> array(
		'title'	=> array(
			'type'        => 'text',
			'label'       => esc_html__( 'Sidebar Title', 'magaziner' ),
			'description' => esc_html__( 'The widget box title', 'magaziner' ),
			'default'     => '',
		),
		'id'	=> array(
			'type'        => 'text',
			'label'       => esc_html__( 'Sidebar ID', 'magaziner' ),
			'description' => esc_html__( 'This ID must be unique', 'magaziner' ),
			'default'     => 'sidebar-',
		),
	)
) );


function magaziner_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'magaziner_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'magaziner' ),
		'description'	=> esc_html__( '(is_home) Primary', 'magaziner' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magaziner' ),
	) );
	Kirki::add_field( 'magaziner_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-home',
		'label'			=> esc_html__( 'Home', 'magaziner' ),
		'description'	=> esc_html__( '(is_home) Secondary', 'magaziner' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magaziner' ),
	) );
	Kirki::add_field( 'magaziner_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'magaziner' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'magaziner' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magaziner' ),
	) );
	Kirki::add_field( 'magaziner_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-single',
		'label'			=> esc_html__( 'Single', 'magaziner' ),
		'description'	=> esc_html__( '(is_single) Secondary - If a single post has a unique sidebar, it will override this.', 'magaziner' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magaziner' ),
	) );
	Kirki::add_field( 'magaziner_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'magaziner' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'magaziner' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magaziner' ),
	) );
	Kirki::add_field( 'magaziner_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-archive',
		'label'			=> esc_html__( 'Archive', 'magaziner' ),
		'description'	=> esc_html__( '(is_archive) Secondary', 'magaziner' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magaziner' ),
	) );
	Kirki::add_field( 'magaziner_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'magaziner' ),
		'description'	=> esc_html__( '(is_category) Primary', 'magaziner' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magaziner' ),
	) );
	Kirki::add_field( 'magaziner_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'magaziner' ),
		'description'	=> esc_html__( '(is_category) Secondary', 'magaziner' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magaziner' ),
	) );
	Kirki::add_field( 'magaziner_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'magaziner' ),
		'description'	=> esc_html__( '(is_search) Primary', 'magaziner' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magaziner' ),
	) );
	Kirki::add_field( 'magaziner_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-search',
		'label'			=> esc_html__( 'Search', 'magaziner' ),
		'description'	=> esc_html__( '(is_search) Secondary', 'magaziner' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magaziner' ),
	) );
	Kirki::add_field( 'magaziner_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'magaziner' ),
		'description'	=> esc_html__( '(is_404) Primary', 'magaziner' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magaziner' ),
	) );
	Kirki::add_field( 'magaziner_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-404',
		'label'			=> esc_html__( 'Error 404', 'magaziner' ),
		'description'	=> esc_html__( '(is_404) Secondary', 'magaziner' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magaziner' ),
	) );
	Kirki::add_field( 'magaziner_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'magaziner' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'magaziner' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magaziner' ),
	) );
	Kirki::add_field( 'magaziner_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-page',
		'label'			=> esc_html__( 'Default Page', 'magaziner' ),
		'description'	=> esc_html__( '(is_page) Secondary - If a page has a unique sidebar, it will override this.', 'magaziner' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magaziner' ),
	) );
	
 } 
add_action( 'init', 'magaziner_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'magaziner' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'magaziner' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'magaziner' ) . ' <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank"><strong>' . esc_html__( 'View All', 'magaziner' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'magaziner' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'magaziner' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'magaziner' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'magaziner' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'magaziner' ) . ' <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank"><strong>' . esc_html__( 'View All', 'magaziner' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'magaziner' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'magaziner' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'magaziner' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'magaziner' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'magaziner' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'magaziner' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'magaziner' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Boxed Layout
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'boxed',
	'label'			=> esc_html__( 'Boxed Layout', 'magaziner' ),
	'description'	=> esc_html__( 'Use a boxed layout', 'magaziner' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Font
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'magaziner' ),
	'description'	=> esc_html__( 'Select font for the theme', 'magaziner' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'magaziner' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'magaziner' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'magaziner' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'magaziner' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'magaziner' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'magaziner' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'magaziner' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'magaziner' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'magaziner' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'magaziner' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'magaziner' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'magaziner' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'magaziner' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'magaziner' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'magaziner' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'magaziner' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'magaziner' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'magaziner' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'magaziner' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'magaziner' ),
		'arial'					=> esc_html__( 'Arial', 'magaziner' ),
		'georgia'				=> esc_html__( 'Georgia', 'magaziner' ),
		'verdana'				=> esc_html__( 'Verdana', 'magaziner' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'magaziner' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'magaziner' ),
	'description'	=> esc_html__( 'Max-width of the container. Default: 1680px. If you use 2 sidebars, your container should be at least 1280px.', 'magaziner' ),
	'section'		=> 'styling',
	'default'		=> '1680',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Primary Color
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'magaziner' ),
	'section'		=> 'styling',
	'default'		=> '#5299eb',
) );
// Styling: Mobile Menu Color
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-mobile-menu',
	'label'			=> esc_html__( 'Mobile Menu Color', 'magaziner' ),
	'section'		=> 'styling',
	'default'		=> '',
) );
// Styling: Topbar Menu Color
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-topbar-menu',
	'label'			=> esc_html__( 'Topbar Menu Color', 'magaziner' ),
	'section'		=> 'styling',
	'default'		=> '',
) );
// Styling: Header Background
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-header',
	'label'			=> esc_html__( 'Header Background', 'magaziner' ),
	'section'		=> 'styling',
	'default'		=> '',
) );
// Styling: Header Menu Color
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-header-menu',
	'label'			=> esc_html__( 'Header Menu Color', 'magaziner' ),
	'section'		=> 'styling',
	'default'		=> '#262626',
) );
// Styling: Page Title Background
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-page-title',
	'label'			=> esc_html__( 'Page Title Background', 'magaziner' ),
	'section'		=> 'styling',
	'default'		=> '#262626',
) );
// Styling: Sidebars Background
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-sidebars',
	'label'			=> esc_html__( 'Sidebar(s) Background', 'magaziner' ),
	'section'		=> 'styling',
	'default'		=> '#262626',
) );
// Styling: Sidebar Widget Title Background
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-widget-title',
	'label'			=> esc_html__( 'Sidebar Widget Title Background', 'magaziner' ),
	'section'		=> 'styling',
	'default'		=> '',
) );
// Styling: Light Sidebar Widgets
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'light-sidebar-widgets',
	'label'			=> esc_html__( 'Light Sidebar Widgets', 'magaziner' ),
	'description'	=> esc_html__( 'White background widgets', 'magaziner' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Comment Count Background
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-comment-count',
	'label'			=> esc_html__( 'Comment Count Background', 'magaziner' ),
	'section'		=> 'styling',
	'default'		=> '',
) );
// Styling: Footer Menu Color
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-footer-menu',
	'label'			=> esc_html__( 'Footer Menu Color', 'magaziner' ),
	'section'		=> 'styling',
	'default'		=> '#222222',
) );
// Styling: Footer Background
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-footer',
	'label'			=> esc_html__( 'Footer Background', 'magaziner' ),
	'section'		=> 'styling',
	'default'		=> '#262626',
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'magaziner' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'magaziner' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Image Border Radius
Kirki::add_field( 'magaziner_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'border-radius',
	'label'			=> esc_html__( 'Border Radius', 'magaziner' ),
	'description'	=> esc_html__( 'Give your layout and images rounded corners', 'magaziner' ),
	'section'		=> 'styling',
	'default'		=> '30',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '30',
		'step'	=> '1',
	),
) );