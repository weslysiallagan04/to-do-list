<?php 
include_once "views/header.php";

// var_dump($_SERVER['REQUEST_URI']); die;
$base_uri = "/to-do-list-php";
$base_url = __DIR__;
// $_SERVER (GLOBAL VARIABEL) adalah variabel yang menyimpan informasi url user dan informasi dasar dari si user.
if($_SERVER['REQUEST_URI'] == $base_uri."/home") { 
    include_once $base_url."/views/home.php";
}else if($_SERVER['REQUEST_URI'] == $base_uri."/detail") {
    include_once $base_url."/views/detail_to_do_list.php";
}else if($_SERVER['REQUEST_URI'] == $base_uri."/add") {
    include_once $base_url."/views/add_list.php";
}else {
    // var_dump($_SERVER['REQUEST_URI']); die;
    // var_dump(file_exists($base_url."/views/home.php"));
    include_once $base_url."/views/not_found.php";
};