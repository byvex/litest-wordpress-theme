<?php
get_header();
?>

<div class="container-xl py-4">
	<?php if (have_posts()):
		while (have_posts()): the_post();

			get_template_part('template-parts/content');

			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

		endwhile;
	endif; ?>
</div>

<?php
get_footer();
