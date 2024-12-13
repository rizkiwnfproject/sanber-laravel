<?php

class Ape extends Animal
{

    public $legs = 2;
    public $cold_blooded = "No";
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function yell(){
        echo "Auooo";
    }
}

?>
