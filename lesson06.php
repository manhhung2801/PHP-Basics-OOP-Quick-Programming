<?php

// classes instantiation

// blueprint / mold / pattern // factory for objects
class Product {
    // properties - variable
    private $price = 2;
    public $color = "green";
    public static $total = 0;

    // public private protected static

    // methods - function
    public function calculate_total() {
        self::$total = 10 * 20;
    }

    public function generate_id() {
        return rand(0,9999);
    }

    public function read() {
        self::calculate_total();
        return self::$total;
    }

}

$book = new Product(); // instantiation

echo book::total;

//echo $book->read();
//echo Product::$total;

