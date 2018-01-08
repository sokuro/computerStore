<?php

class UrlHelper
{
    public static function getCategoryUrl(int $id)
    {
        return "/category/show/".$id;
    }

    public static function getProductUrl(int $id)
    {
        return "/product/show/".$id;
    }

    public static function getSearchUrl(string $name)
    {
        return "/search/show/".$name;
    }

    public static function getAdminUrl()
    {
        return "/admin/index";
    }
}