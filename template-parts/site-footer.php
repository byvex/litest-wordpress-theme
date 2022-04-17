<footer id="colophon" class="site-footer border-top mt-auto" role="contentinfo">
    <?php get_template_part('sidebar'); ?>
    <div class="site-info container-xl pt-3 pb-4">
        <p>&copy; <?php echo esc_html(date('Y')); ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php esc_attr(bloginfo('name')); ?> - <?php esc_attr(bloginfo('description')); ?>"><?php esc_html(bloginfo('name')); ?></a>
        </p>
    </div>
</footer>
