<?php
class Fruits{
    public $name;
    protected $color;
    private $teste;
}

$apple = new Fruits();
$apple->name="Apple";
//$apple->color="Read";//Gives error
//$apple->teste="Sweet";// Gives error
?>