<?php if (isset($post->property_type) && (is_active_sidebar("wpp_sidebar_" . $post->property_type)) && avalon_empty_sidebar("wpp_sidebar_" . $post->property_type)) : ?>

    <aside class="sidebar col-md-4">
        <ul class="sidebar_widget_list">
            <?php dynamic_sidebar("wpp_sidebar_" . $post->property_type); ?>
        </ul>
    </aside>

<?php endif; ?>