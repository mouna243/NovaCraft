<?php

$page = $_SERVER['REQUEST_URI'];
// echo $page;
switch ($page) {
      case '/':
    include "views/home.php";
    break;
    case '/home':
    include "views/home.php";
    break;
    case '/service':
    include "views/service.php";
    break;
    case '/about':
    include "views/about.php";
    break;
    case '/contact':
    include "views/contact.php";
    break;
    
    default:
         include "views/404.php";
        break;
}
?>