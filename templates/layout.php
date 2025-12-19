<?php

$page = $_SERVER['REQUEST_URI'];
// echo $page;
switch ($page) {
    case '/':
        include  __DIR__. "/../views/home.php";
        break;
    case '/home':
        include  __DIR__. "/../views/home.php";
        break;
    case '/service':
        include  __DIR__. "/../views/service.php";
        break;
    case '/about':
        include  __DIR__. "/../views/about.php";
        break;
    case '/contact':
        include  __DIR__. "/../views/contact.php";
        break;
    case '/login':
        include  __DIR__. "/../auth/login.php";
        break;
    case '/signin':
        include __DIR__. "/../auth/register.php";
        break;

    default:
        include  __DIR__. "/../views/404.php";
        break;
}
