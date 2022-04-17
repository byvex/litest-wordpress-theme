<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title default-max-width text-break"><?php the_title() ?></h1>
		<p class="mb-1"><?php the_tags(); ?></p>
		<p><?php the_category(', '); ?></p>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<footer class="entry-footer default-max-width">
		<?php wp_link_pages(); ?>
	</footer>
</article>
