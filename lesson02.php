<?php

// The Four Principles  of Object-Oriented-Programming

// 1. Encapsulation : đóng gói - holds things together
// 2. Abstraction : trừu tượng - abstract - to be less specific
// 3. Inheritance : di sản - copying some functionality
// 4. Polymorphism : tính đa hình - many forms one function can work differently depending on the situation

class shape {
    function sides() {

    }
    function calculate_area(){

    }
}
// class for reapeated functions

// function for circle

class circle extends shape {

    function newfunction() {

    }
}

// function for a square

class square extends shape{


}

abstract class myclass {
    abstract function calculate_area();

}
