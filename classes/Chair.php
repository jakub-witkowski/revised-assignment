<?php
//include 'Product.php';

class Chair extends Product
{
    protected $height;
    protected $width;
    protected $length;

    public function getHeight() : int
    {
        return $this->height;
    }

    public function getWidth() : int
    {
        return $this->width;
    }

    public function getLength() : int
    {
        return $this->length;
    }
    
    public function print_attributes()
    {
        printf("Dimensions: %d x %d x %d cm".PHP_EOL, $this->height, $this->width, $this->length);
    }
}