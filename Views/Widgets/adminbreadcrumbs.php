<ul class="nav-list list-unstyled">
    <?php
    Helper::varDebug(AdminBreadcrumbs::$items);

    foreach(AdminBreadcrumbs::$items as $key => $value){

        echo '<li><a href="'.UrlHelper::getAdminUrl().'"></a></li>';
    }
    ?>
</ul>

