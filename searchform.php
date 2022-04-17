<form class="d-inline-block" method="get" action="<?php echo esc_url(home_url('/')); ?>">
	<label class="d-flex">
		<input type="search" name="s" placeholder="Enter search term" id="<?php echo esc_attr(wp_unique_id('search-')); ?>" class="form-control me-1" />
		<input type="submit" value="<?php echo esc_attr('Search'); ?>" class="btn btn-outline-primary" />
    </label>
</form>
