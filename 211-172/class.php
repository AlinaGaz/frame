<?php

class cat {
    public $name;
    public $color;

    public function __construct($name){
    $this->name=$name;
    }

    public function sayHello(){
        echo 'Meau';
    }

    public function sayName(){
        echo $this->name;

    }


}

$cat1 = new Cat('Murka');
$cat1-> sayName();
echo '<br>';
$cat1->sayHello();