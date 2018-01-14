<?php
session_start();
define("ROOT", realpath($_SERVER["DOCUMENT_ROOT"]));

require_once ("Core/Autoloader.php");

if(!isset($_COOKIE['sessid']) && !isset($_SESSION['sessid'])){
    $sessId = Helper::generateSessId();
    setcookie("sessid", $sessId);
    $_SESSION["sessid"] = $sessId;
}

if(isset($_COOKIE['lang'])){
    $_SESSION['lang'] = $_COOKIE['lang'];
}

if(!isset($_SESSION['lang'])){
    $_SESSION['lang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}

$router = new Router();


?>