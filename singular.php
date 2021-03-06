<?php
get_header();
?>

<div class="container py-5">
<?php
	while (have_posts()): the_post();
		get_template_part('template-parts/content');
		the_post_navigation();
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	endwhile; // End of the loop.
?>
</div>

<?php
get_footer();
