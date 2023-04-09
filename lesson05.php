<?php

// classes instantiation

// blueprint / mold / pattern // factory for objects
class Product {
    // properties - variable
    private $price = 2;
    public $color = "green";
    private $total = 0;

    // public private protected static

    // methods - function
    public function calculate_total() {
        $this->total = 10 * 20;
    }

    public function generate_id() {
        return rand(0,9999);
    }

    protected function read() {
        $this->calculate_total();
        return $this->total;
    }

}
class Product2 extends Product {
    function read2(){
        echo $this->read();
    }
}
$book = new Product(); // instantiation

//echo $book->read();

$phone = new Product2();
echo "<br>";
$phone->read2();