<?php
require_once(ROOT.'/Models/BaseEntity.php');
require_once(ROOT.'/Models/Product.php');
require_once(ROOT.'/Models/Category.php');
require_once(ROOT.'/Models/User.php');

class Admin extends BaseEntity {

    public $products, $categories, $users;

    public function __construct()
    {
    }

    public static function showElements()
    {
        $products = "Products";
        $categories = "Categories";
        $users = "Users";

        Helper::varDebug($products);
        Helper::varDebug($categories);
        Helper::varDebug($users);

//        return $products && $categories && $users;
        return $products;
    }


}