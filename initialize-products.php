<?php
include_once 'classes/Product.php';
include_once 'classes/Disc.php';
include_once 'classes/Book.php';
include_once 'classes/Chair.php';
include_once 'db-connect.php';

$discs = $db_pdo->query("SELECT sku, name, price, size FROM products WHERE type='dvd'")->fetchAll(PDO::FETCH_CLASS, 'Disc');
$books = $db_pdo->query("SELECT sku, name, price, weight FROM products WHERE type='book'")->fetchAll(PDO::FETCH_CLASS, 'Book');
$chairs = $db_pdo->query("SELECT sku, name, price, height, width, length FROM products WHERE type='furniture'")->fetchAll(PDO::FETCH_CLASS, 'Chair');

$db_pdo = NULL; 

$available_products = array_merge($discs, $books, $chairs);
