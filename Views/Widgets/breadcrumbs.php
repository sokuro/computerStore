<ul class="nav-list list-unstyled">
    <?php

        foreach(Breadcrumbs::$items as $key => $value){
            echo '<li><a href="'.UrlHelper::getCategoryUrl($value->id).'">'.CultureHelper::getProperty($value, 'name').'</a></li>';
        }
    ?>
</ul>