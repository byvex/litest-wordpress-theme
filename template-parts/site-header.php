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
		<?php $menu_locations = get_nav_menu_locations();
		if ( $navbar_items = wp_get_nav_menu_items($menu_locations['primary']) ):
			$child_items  = array();
			// pull all child menu items into separate object
			foreach ($navbar_items as $key => $item) {
				if ($item->menu_item_parent) {
					array_push($child_items, $item);
					unset($navbar_items[$key]);
				}
			}
			// push child items into their parent item in the original object
			foreach ($navbar_items as $item) {
				foreach ($child_items as $key => $child) {
					if ($child->menu_item_parent == $item->ID) {
						if (!$item->child_items) {
							$item->child_items = [];
						}
						array_push($item->child_items, $child);
						unset($child_items[$key]);
					}
				}
			}
			?>
			<ul class="navbar-nav mx-auto">
			<?php
			foreach ( $navbar_items as $menu_item ):
				$current = ( $menu_item->object_id == get_queried_object_id() ) ? 'active' : '';
				if($menu_item->child_items){
					echo '<li class="nav-item dropdown"><a href="' . $menu_item->url . '" class="nav-link dropdown-toggle ' . $current . '" role="button" data-bs-toggle="dropdown" aria-expanded="false">' . $menu_item->title . '</a>';
						echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
						foreach($menu_item->child_items as $item){
							$currentChild = ( $item->object_id == get_queried_object_id() ) ? 'active' : '';
							echo '<li><a class="dropdown-item ' . $currentChild . '" href="' . $item->url . '">' . $item->title . '</a></li>';
						}
						echo '</ul>';
					echo '</li>';
				} else {
					echo '<li class="nav-item"><a href="' . $menu_item->url . '" class="nav-link ' . $current . '">' . $menu_item->title . '</a></li>';
				}
			endforeach;
			?>
			</ul>
			<?php get_search_form(); ?>
		<?php endif; ?>


   		</div>

	</nav>
</header>
