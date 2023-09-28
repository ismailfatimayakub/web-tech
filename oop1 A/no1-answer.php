<?php

//write a php script to demonstrate the difference between functional programming, 
//procedural programming and object oriented programming

// Functional Programming
function add($a, $b) {
    return $a + $b;
}

echo add(2, 3); // Output: 5

// Procedural Programming
function add_procedural(&$a, $b) {
    $a += $b;
}

$a = 2;
add_procedural($a, 3);
echo $a; // Output: 5

// Object-Oriented Programming
class Calculator {
    private $result;

    public function __construct($result = 0) {
        $this->result = $result;
    }

    public function add($number) {
        $this->result += $number;
        return $this;
    }

    public function getResult() {
        return $this->result;
    }
}

$calculator = new Calculator();
echo $calculator->add(2)->add(3)->getResult(); // Output: 5 

?>