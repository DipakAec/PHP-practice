<!DOCTYPE html>
<html>
<body>

<?php
class Fruits {
  // Properties
  public $name;
  public $color;

  // Methods
  function __construct($name,$color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro(){
    echo "The fruit is {$this->name} and the color is {$this->color}. <br>";
  }
}
class Strawberry extends Fruits{
    public function message() {
        echo "Am I a fruit or a berry? "; 
    }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();


?>
</body>
  </html>