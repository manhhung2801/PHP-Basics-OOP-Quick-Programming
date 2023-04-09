<?php

// classes instantiation

// blueprint / mold / pattern // factory for objects
class Product {
    // properties - variable
    static public $price = 2;
    public $color = "green";
    public $total = 0;

    // public private protected static

    // methods - function
    function calculate_total() {
        $this->total = 10 * 20;
    }

    static function generate_id() {
        return rand(0,9999);
    }

    function read() {
        $this->calculate_total();
        return $this->total;
    }

}
$book = new Product(); // instantiation

$book->calculate_total();

echo $book->read();
