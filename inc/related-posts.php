<?php $related = magaziner_related_posts(); ?>

<?php if ( $related->have_posts() ): ?>

<h4 class="heading">
	<i class="fas fa-hand-point-right"></i><?php esc_html_e('You may also like...','magaziner'); ?>
</h4>

<ul class="related-posts group">
	
	<?php while ( $related->have_posts() ) : $related->the_post(); ?>
	<li class="related post-hover">
		<article <?php post_class(); ?>>

			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail() ): ?>
						<?php the_post_thumbnail('magaziner-medium'); ?>
						<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-play"></i></span>'; ?>
						<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-volume-up"></i></span>'; ?>
						<?php if ( is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-star"></i></span>'; ?>
					<?php else: ?>
						
					<?php endif; ?>	
				</a>
				<?php if ( comments_open() && ( get_theme_mod( 'comment-count','on' ) == 'on' ) ): ?>
					<a class="post-comments" href="<?php comments_link(); ?>"><span><i class="fas fa-comments"></i><?php comments_number( '0', '1', '%' ); ?></span></a>
				<?php endif; ?>
			</div><!--/.post-thumbnail-->
			
			<div class="related-inner">
				
				<h4 class="post-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h4><!--/.post-title-->
							
			</div><!--/.related-inner-->

		</article>
		<a class="more-link-custom" href="<?php the_permalink(); ?>" /><i class="fas fa-arrow-right"></i></a>
	</li><!--/.related-->
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

</ul><!--/.post-related-->
<?php endif; ?>

<?php wp_reset_postdata(); ?>
