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
  protected function intro(){
    echo "The fruit is {$this->name} and the color is {$this->color}. <br>";
  }
}
class Strawberry extends Fruits{
    public function message() {
        echo "Am I a fruit or a berry? "; 
        $this->intro(); //Now it will not throw any error
    }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
//$strawberry->intro(); this will throw an error beacouse intro() is a protected function


?>
</body>
  </html>