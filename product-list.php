<div class="container">
    <h1>Product list</h1>
    <div class="button-container">
    <button class="button" onclick="window.location.href='index.php?page=product-add';">Add</button>
    <button class="button" id="#delete-product-btn" onclick="removeCheckedCheckboxes()">Mass delete</button>
    </div>
</div>

<div id="grid">
<?php print_grid_with_checkboxes($available_products);?>
</div>