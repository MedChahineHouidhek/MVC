<?php
require_once('Class/Page.php');

$url = $_SERVER['REQUEST_URI'];
echo 'REQUEST_URI : '.$_SERVER['REQUEST_URI'];
//exit;
//new Routeur;

$url = ltrim($url, '/MVC/');

// if($url == 'toto'){
//     echo '<h1>Page toto </h1>';
// }else{
//     echo '<h1>Page Inconnue </h1>';
// }
switch($url){
    case 'products';
    $page = new Page;
    $page->products();
    break;
    case 'cart';
    $page = new Page;
    $page->cart();
    break;
    default:
    $page = new Page;
    $page->homepage();
    break;
}