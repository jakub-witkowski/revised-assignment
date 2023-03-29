<?php
abstract class Product
{
    protected $name;
    protected $sku;
    protected $price;
   
    abstract public function print_attributes();

    public function getName(): string
    {
        return $this->name;
    }

    public function get_sku(): string
    {
        return $this->sku;
    }

    public function getPrice(): float
    {
         return $this->price;
    }
}

/* function attributes($products)
{
    foreach ($products as $product) {
        echo $product->print_attributes() . PHP_EOL;
    }
} */