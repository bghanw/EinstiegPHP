<?php


class knight
{
    private $name;
    private $strength;
    private $health = 100;



    public function __construct($name, $strength)
    {
        $this -> name = $name;
        $this -> strength = $strength;
    }

    public  function attack($defendingKnight){
        $defendingKnight -> health -= $this ->strength;
    }
    public function isAlive(){
        if ($this -> health >0){
            return true;
        }
        else{
            return false;
        }
    }
    public function __toString()
    {
        return "<h3>" . "Name: " .$this -> name . " <br> Stärke: " .$this -> strength . " <br> Leben: " . $this -> health . "</h3>";
    }
}

