<header id="masthead" class="site-header bg-light shadow" role="banner">
	<nav class="container-xl navbar navbar-light navbar-expand-md">

		<a class="navbar-brand fw-bold m-0 p-0 text-truncate" href="<?php echo esc_url(home_url('/')); ?>" title="<?php esc_attr(bloginfo('name')); ?> - <?php esc_attr(bloginfo('description')); ?>">
			<?php if (get_header_image()){ ?>
				<img src="<?php header_image(); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="<?php esc_attr(bloginfo('name')); ?> - <?php esc_attr(bloginfo('description')); ?>" />
			<?php } else { ?>
				<?php esc_html(bloginfo('name')); ?>
			<?php } ?>
		</a>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu-primary" aria-controls="mainNav" aria-expanded="false">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="menu-primary">
			<?php
			// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
			if ( $menu_items = wp_get_nav_menu_items('primary') ): ?>
				<ul class="navbar-nav mx-auto">
				<?php
				// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
				foreach ( $menu_items as $menu_item ):
					// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
					$current = ( $menu_item->object_id == get_queried_object_id() ) ? 'active' : ''; ?>
					<?php echo '<li class="nav-item"><a href="' . esc_url($menu_item->url) . '" class="nav-link ' . esc_attr($current) . '">' . esc_html($menu_item->title) . '</a></li>'; ?>
				<?php endforeach; ?>
				</ul>
			<?php endif; ?>
			<?php get_search_form(); ?>
   		</div>

	</nav>
</header>
