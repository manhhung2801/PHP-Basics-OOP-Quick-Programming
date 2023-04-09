<?php

// classes instantiation

// blueprint / mold / pattern // factory for objects
class Product {
    // properties - variable
    public $price = 2;
    public $color = "green";
    public $total = 0;

    // methods - function
    function calculate_total() {
        echo "from the function";
    }

}
$book = new Product(); // instantiation
echo "book " . $book->price;
echo "<br>";
$book->calculate_total();

$phone = new Product(); // instantiation
//echo "phone " . $phone->price;

