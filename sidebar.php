<?php if (is_active_sidebar('sidebar-left')) : ?>

    <acide class="sidebar col-md-4">

        <ul>

            <?php dynamic_sidebar('sidebar-left'); ?>

        </ul>

    </acide>

<?php elseif (is_active_sidebar('sidebar-right')) : ?>

    <acide class="sidebar col-md-4">

        <ul>

            <?php dynamic_sidebar('sidebar-right'); ?>

        </ul>

    </acide>

<?php endif; ?>