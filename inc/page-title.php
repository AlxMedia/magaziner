<div class="page-title">
	<div class="container pad group">
		
		<?php if ( is_home() ) : ?>
			<h2><i class="fas fa-star"></i><?php echo magaziner_blog_title(); ?></h2>
			
		<?php elseif ( is_single() ): ?>
			
		<?php elseif ( is_page() ): ?>
			<h2><?php the_title(); ?></h2>

		<?php elseif ( is_search() ): ?>
			<h1>
				<?php if ( have_posts() ): ?><i class="fas fa-search"></i><?php endif; ?>
				<?php if ( !have_posts() ): ?><i class="fas fa-exclamation-circle"></i><?php endif; ?>
				<?php $search_results=$wp_query->found_posts;
					if ($search_results==1) {
						echo $search_results.' '.esc_html__('Search result','magaziner');
					} else {
						echo $search_results.' '.esc_html__('Search results','magaziner');
					}
				?>
			</h1>
			
		<?php elseif ( is_404() ): ?>
			<h1><i class="fas fa-exclamation-circle"></i><?php esc_html_e('Error 404.','magaziner'); ?> <span><?php esc_html_e('Page not found!','magaziner'); ?></span></h1>
			
		<?php elseif ( is_author() ): ?>
			<?php $author = get_userdata( get_query_var('author') );?>
			<h1><i class="far fa-user"></i><?php esc_html_e('Author:','magaziner'); ?> <span><?php echo esc_html( $author->display_name );?></span></h1>
			
		<?php elseif ( is_category() ): ?>
			<h1><i class="far fa-folder"></i><?php esc_html_e('Category:','magaziner'); ?> <span><?php echo single_cat_title('', false); ?></span></h1>

		<?php elseif ( is_tag() ): ?>
			<h1><i class="fas fa-tags"></i><?php esc_html_e('Tagged:','magaziner'); ?> <span><?php echo single_tag_title('', false); ?></span></h1>
			
		<?php elseif ( is_day() ): ?>
			<h1><i class="far fa-calendar"></i><?php esc_html_e('Daily Archive:','magaziner'); ?> <span><?php echo esc_html( get_the_time('F j, Y') ); ?></span></h1>
			
		<?php elseif ( is_month() ): ?>
			<h1><i class="far fa-calendar"></i><?php esc_html_e('Monthly Archive:','magaziner'); ?> <span><?php echo esc_html( get_the_time('F Y') ); ?></span></h1>
				
		<?php elseif ( is_year() ): ?>
			<h1><i class="far fa-calendar"></i><?php esc_html_e('Yearly Archive:','magaziner'); ?> <span><?php echo esc_html( get_the_time('Y') ); ?></span></h1>
		
		<?php else: ?>
			<h2><?php the_title(); ?></h2>
		
		<?php endif; ?>
			
	</div><!--/.container-->
</div><!--/.page-title-->