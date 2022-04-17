<?php
get_header();
?>

<div class="container-xl py-4">
	<?php if (have_posts()) : ?>
		<div class="row">
		<?php while (have_posts()): the_post(); ?>
			<div class="col-12 col-sm-6 col-lg-4 pb-3">
				<?php get_template_part('template-parts/content-excerpt'); ?>
			</div>
		<?php endwhile; ?>
		</div>
	<?php
		the_posts_pagination();
	else :
		get_template_part('template-parts/content-none');
	endif; ?>
</div>

<?php
get_footer();
