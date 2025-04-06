<?php
include 'header.php';
include 'menu.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'about':
        include 'about.php';
        break;
    case 'contact':
        include 'contact.php';
        break;
    default:
        include 'home.php';
        break;
}

include 'footer.php';
?>

