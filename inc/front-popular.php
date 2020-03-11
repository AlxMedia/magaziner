<?php if ( !is_paged()) : ?>

<?php
	$popular = new WP_Query( array(
		'post_type'				=> array( 'post' ),
		'showposts'				=> 3,
		'ignore_sticky_posts'	=> true,
		'orderby'				=> 'comment_count',
		'order'					=> 'dsc',
		'date_query' => array(
			array(
				'after' => 'all time',
			),
		),
	) );
?>
<div class="stripe">
	<div class="container pad group">
		<div class="stripe-title"><i class="fas fa-fire"></i> <?php esc_html_e('Popular Posts','magaziner'); ?></div>
		<ol class="stripe-popular group">
			<?php while ( $popular->have_posts() ): $popular->the_post(); ?>
			<li>
				<div class="stripe-popular-category"><?php the_category(' / '); ?></div>
				<a class="stripe-popular-title" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				<div class="stripe-popular-date"><i class="far fa-clock"></i><?php the_time( get_option('date_format') ); ?></div>

			</li>
			<?php endwhile; ?>
		</ol>
	</div>
</div><!--/.stripe-->
<?php wp_reset_postdata(); ?>

<?php endif; ?>
