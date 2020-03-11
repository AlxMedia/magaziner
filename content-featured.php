<?php $format = get_post_format(); ?>

<div class="featured-large">
	<div class="featured-large-inner">
		<div class="featured-o-thumb">
			<a href="<?php the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail('magaziner-medium'); ?>
					<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-play"></i></span>'; ?>
					<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-volume-up"></i></span>'; ?>
					<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-star"></i></span>'; ?>
				<?php else: ?>
					
				<?php endif; ?>	
			</a>
			<?php if ( comments_open() && ( get_theme_mod( 'comment-count','on' ) == 'on' ) ): ?>
				<a class="post-comments" href="<?php comments_link(); ?>"><span><i class="fas fa-comments"></i><?php comments_number( '0', '1', '%' ); ?></span></a>
			<?php endif; ?>
		</div>
		<a class="featured-o" href="<?php the_permalink(); ?>">
			<span class="featured-o-title"><?php the_title(); ?></span>
			<span class="featured-o-date"><i class="far fa-clock"></i><?php the_time( get_option('date_format') ); ?></span>
		</a>
		<a class="more-link-custom" href="<?php the_permalink(); ?>" /><i class="fas fa-arrow-right"></i></a>
	</div>
</div>