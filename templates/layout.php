<?php

$page = $_SERVER['REQUEST_URI'];
// echo $page;
if ($page === "/") {
    $page = 'home';
}


$arrname = ['/home','/service', '/about', '/contact','/'];
if (!in_array($page,$arrname)) {
    include "views/404.php";
    return;
} else {
    include "views/$page.php";
}

?>