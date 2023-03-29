<?php
//include 'Product.php';

class Disc extends Product
{
    protected $size;

    public function getSize(): int
    {
        return $this->size;
    }
    
    public function print_attributes()
    {
        printf("Size: %d MB".PHP_EOL, $this->size); 
    }
}