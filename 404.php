<?php
get_header();
?>

<section class="error-404 not-found container py-4">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'litest'); ?></h1>
	</header>
	<div class="page-content">
		<p><?php esc_html_e('It looks like nothing was found at this location.', 'litest'); ?></p>
		<?php get_search_form(); ?>
	</div>
</section>

<?php
get_footer();
