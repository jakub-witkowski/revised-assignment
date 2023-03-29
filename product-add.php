<?php
include 'includes/header.php'; 
include 'db-connect.php';
?>

<div class="container">
<div class="button-container">
    <button class="button" type="submit" form="#product_form">Save</button>
    <button class="button" onclick="window.location.href='index.php?page=product-list';">Cancel</button>
</div>
<h1>Product Add</h1>
</div>
    
<form id="#product_form" action="form-handling.php" method="POST">

    <div class="form">
        <label for="sku" class="title">SKU:</label>
        <input type="text" id="#sku" name="sku" required />
    </div>
    <div class="form">
        <label for="name" class="title">Name:</label>
        <input type="text" id="#name" name="name" required />
    </div>
    <div class="form">
        <label for="price" class="title">Price ($):</label>
        <input type="number" id="#price" name="price" required />
    </div>

<div>
    <div class="form">
        <label for="type" class="title">Type:</label>
        <select name="type" id="#productType" onchange="adjustForm()" required>
        <option id="#type-switcher" value="">Select type</option>
        <option id="#DVD" value="DVD">DVD</option>
        <option id="#Book" value="Book">Book</option>
        <option id="#Furniture" value="Furniture">Furniture</option>
        </select>
        <p class="instruction">Please specify product type</p>
    </div>
    
    <div id="#autoForm"></div>
</div>
</form>