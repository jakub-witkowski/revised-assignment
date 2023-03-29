<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'product-add.php';
include 'db-connect.php';

$sku = $_POST['sku'];
$name = $_POST['name'];
$price = $_POST['price'];
$type = strtolower($_POST['type']);
$size = $_POST['size'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$width = $_POST['width'];
$length = $_POST['length'];

$result = $db_pdo->query("SELECT COUNT(*) FROM products WHERE sku = '$sku'");
if ($result->fetchColumn() > 0) {
	echo '<script>alert("SKU already in use!");</script>';
} else {
	if ($type === 'dvd') {
        $result = "INSERT INTO products (sku, name, price, type, size) VALUES (?,?,?,?,?)";
        $stmt = $db_pdo->prepare($result);
        $stmt->execute([$sku, $name, $price, $type, $size]);
        }
        else if ($type === 'book') {
        $result = "INSERT INTO products (sku, name, price, type, weight) VALUES (?,?,?,?,?)";
        $stmt = $db_pdo->prepare($result);
        $stmt->execute([$sku, $name, $price, $type, $weight]);
        }
        else if ($type === 'furniture') {
        $result = "INSERT INTO products (sku, name, price, type, height, width, length) VALUES (?,?,?,?,?,?,?)";
        $stmt = $db_pdo->prepare($result);
        $stmt->execute([$sku, $name, $price, $type, $height, $width, $length]);
        }
}

if ($stmt->rowCount() == 1) {
    header('Location: index.php?page=product-list'); //
}
else {
	echo "SQL error." . $e->getMessage;
}

$db_pdo = NULL;

