<?php
include_once 'initialize-products.php';
include_once 'functions.php';

include 'includes/header.php';

$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'product-list';
include $page . '.php';

include 'includes/footer.php';
?>