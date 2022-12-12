<?php if ( !is_paged()) : ?>

<?php $comments = get_comments(array('number'=>3,'status'=>'approve','post_status'=>'publish')); ?>
<div class="stripe">
	<div class="container pad group">
		<div class="stripe-title"><i class="fas fa-comments"></i> <?php esc_html_e('Recent Comments','magaziner'); ?></div>
		<ul class="stripe-comments group">	
			<?php foreach ($comments as $comment): ?>
			<li>
				<a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>" class="group">
					<span class="stripe-comments-avatar"><?php echo get_avatar($comment->comment_author_email,$size='96'); ?></span>
					<?php $str=explode(' ',get_comment_excerpt($comment->comment_ID)); $comment_excerpt=implode(' ',array_slice($str,0,11)); if(count($str) > 11 && substr($comment_excerpt,-1)!='.') $comment_excerpt.='...' ?>
					<span class="stripe-comments-inner">
						<strong class="stripe-comments-title"><?php echo esc_html( $comment->comment_author ); ?>:</strong>
						<i class="stripe-comments-excerpt"><?php echo esc_html( $comment_excerpt ); ?></i>
					</span>
				</a>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div><!--/.stripe-->

<?php endif; ?>
