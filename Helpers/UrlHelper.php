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

    // TODO: bind Search View
    public static function getSearchUrl(string $name)
    {
        return "/product/show/".$name;
    }
}