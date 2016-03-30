<?php if (is_active_sidebar('sidebar-left')) : ?>

    <acide class="sidebar col-md-4">

        <?php dynamic_sidebar('sidebar-left'); ?>
        
    </acide>

<?php elseif (is_active_sidebar('sidebar-right')) : ?>

    <acide class="sidebar col-md-4">

        <?php dynamic_sidebar('sidebar-right'); ?>
        
    </acide>

<?php endif; ?>