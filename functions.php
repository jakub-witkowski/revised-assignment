<?php 

//prints the product grid on the Product List page
function print_grid_with_checkboxes(array $a): void
{
foreach ($a as $p): 
    echo '<div class="cell"><br>';
    echo '<input type="checkbox" class="delete-checkbox"><br><p>';
    printf("%s", $p->get_sku());
    echo '<br>';
    printf("%s", $p->getName());
    echo '<br>';
    printf("%.2f $", $p->getPrice());
    echo '<br>';
    $p->print_attributes();
    echo '</p></div>'; 
endforeach;
}

?>