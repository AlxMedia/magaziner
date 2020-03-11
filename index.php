<?php get_header(); ?>

<?php get_template_part('inc/page-title'); ?>

<?php if ( is_home() && !is_paged() ): ?>
<div class="featured-posts group">
	<div class="container featured-inner">
		<div class="pad group">
			<div class="featured-wrap">
				<?php get_template_part('inc/featured'); ?>
			</div>
			<?php get_template_part('inc/highlight'); ?>
		</div>
	</div>
</div>
<?php endif; ?>

<?php if ( get_theme_mod( 'frontpage-popular','off' ) == 'on') { get_template_part('inc/front-popular'); } ?>
<?php if ( get_theme_mod( 'frontpage-recent-comments','off' ) == 'on') { get_template_part('inc/front-comments'); } ?>

<div id="page">
	<div class="container">
		<div class="main">
			<div class="main-inner group">

				<div class="content">

					<div class="content-inner">
						<div class="pad group">
					
						<?php get_template_part('inc/front-widgets-top'); ?>
						
						<?php if ( have_posts() ) : ?>
							
							<?php if ( get_theme_mod('blog-layout','blog-grid') == 'blog-grid' ) : ?>
								
								<div class="post-grid group">
									<?php $i = 1; echo '<div class="post-row">'; while ( have_posts() ): the_post(); ?>
										<?php get_template_part('content-grid'); ?>
									<?php if($i % 2 == 0) { echo '</div><div class="post-row">'; } $i++; endwhile; echo '</div>'; ?>
								</div><!--/.post-grid-->
								
							<?php elseif ( get_theme_mod('blog-layout','blog-grid') == 'blog-list' ) : ?>
								
								<?php while ( have_posts() ): the_post(); ?>
									<?php get_template_part('content-list'); ?>
								<?php endwhile; ?>
								
							<?php else: ?>
							
								<?php while ( have_posts() ): the_post(); ?>
									<?php get_template_part('content'); ?>
								<?php endwhile; ?>
								
							<?php endif; ?>
							
							<?php get_template_part('inc/front-widgets-bottom'); ?>
							<?php get_template_part('inc/pagination'); ?>
							
						<?php endif; ?>
						</div>
					</div>

				</div><!--/.content-->

				<?php get_sidebar(); ?>

			</div><!--/.main-inner-->
		</div><!--/.main-->			
	</div><!--/.container-->
</div><!--/#page-->

<?php get_footer(); ?>