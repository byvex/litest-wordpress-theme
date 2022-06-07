<?php get_header(); ?>
<section class="error-404 not-found container py-4">
	<header class="page-header">
		<h1 class="page-title"><?php echo esc_html('Oops! That page can&rsquo;t be found.'); ?></h1>
	</header>
	<div class="page-content">
		<p><?php echo esc_html('It looks like nothing was found at this location.'); ?></p>
		<?php get_search_form(); ?>
	</div>
</section>
<?php
get_footer();
