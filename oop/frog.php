<?php

class Frog extends Animal
{

    public $legs = 4;
    public $cold_blooded = "No";
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function jump(){
        echo "hop hop";
    }
}

?>
