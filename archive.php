<?php
get_header();
?>

<div class="container-xl py-4">
	<?php if(have_posts()): ?>
		<header class="page-header">
			<?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
			<?php if($archive_description = get_the_archive_description()): ?>
				<div class="archive-description lead fw-normal"><?php echo esc_html($archive_description); ?></div>
			<?php endif; ?>
		</header>
		<div class="row">
			<?php while (have_posts()): the_post(); ?>
				<div class="col-12 col-sm-6 col-lg-4 pb-3">
					<?php get_template_part('template-parts/content-excerpt'); ?>
				</div>
			<?php endwhile; ?>
		</div>
	<?php the_posts_pagination(); ?>
	<?php else: ?>
		<?php get_template_part('template-parts/content-none'); ?>
	<?php endif; ?>
</div>

<?php
get_footer();
