<?php

if (post_password_required()) :
	return;
endif;

$comment_count = get_comments_number();
?>

<div id="comments" class="comments-area">

	<?php
	if (have_comments()) :;
	?>
		<h3 class="comments-title">
			<?php if ('1' === $comment_count) : ?>
				<?php echo esc_html('1 comment'); ?>
			<?php else : ?>
				<?php echo esc_html($comment_count); ?> comments
			<?php endif; ?>
		</h3><!-- .comments-title -->

		<ol class="comment-list list-unstyled">
			<?php
			wp_list_comments(
				array(
					'avatar_size' => 45,
					'style'       => 'ol',
					'short_ping'  => true,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		if (!comments_open()) : ?>
			<div class="alert alert-danger">
				<p class="no-comments fw-bold">Comments are closed.</p>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	<div class="row">
		<div class="col-md-6">
			<?php
			comment_form(
				array(
					'logged_in_as'       => null,
					'title_reply'        => 'Leave a comment',
					'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
					'title_reply_after'  => '</h2>',
				)
			);
			?>
		</div>
	</div>

</div><!-- #comments -->
