<?php
//include 'Product.php';

class Book extends Product
{
    protected $weight;

    public function getWeight(): int
    {
        return $this->weight;
    }
    
    public function print_attributes()
    {   
        printf("Weight: %d kg".PHP_EOL, $this->weight);
    }
}

        