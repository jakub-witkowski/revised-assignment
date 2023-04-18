<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'product-add.php';
include 'db-connect.php';

$type = strtolower($_POST['type']);
$sku = $_POST['sku'];
$name = $_POST['name'];
$price = $_POST['price'];
$size = $_POST['size'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$width = $_POST['width'];
$length = $_POST['length'];

$result = $db_pdo->query("SELECT COUNT(*) FROM products WHERE sku = '$sku'");
if ($result->fetchColumn() > 0) {
	echo '<script>alert("SKU already in use!");</script>';
} else {
        $result = "INSERT INTO products (type, sku, name, price, size, weight, height, width, length) VALUES (?,?,?,?,?,?,?,?,?)";
        }

$stmt = $db_pdo->prepare($result);
$stmt->execute([$type, $sku, $name, $price, $size, $weight, $height, $width, $length]);

if ($stmt->rowCount() == 1) {
    header('Location: index.php?page=product-list'); //
}
else {
	echo "SQL error." . $e->getMessage;
}

$db_pdo = NULL;

