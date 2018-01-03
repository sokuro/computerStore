<ul class="nav-list list-unstyled">
    <?php
    Helper::varDebug(AdminBreadcrumbs::$items);
    //exit();
    foreach(AdminBreadcrumbs::$items as $key => $value){
//        echo '<li><a href="'.UrlHelper::getAdminUrl().'">'.CultureHelper::getProperty($value, 'name').'</a></li>';
        echo '<li><a href="'.UrlHelper::getAdminUrl().'"></a></li>';
    }
    ?>
</ul>

