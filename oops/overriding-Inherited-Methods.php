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
    public $teste;
    public function __construct($name,$color,$teste){
    $this->name = $name;
    $this->color = $color;
    $this->teste = $teste;
    }

    public function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color} and teste is very {$this->teste} <br>";

    }
}
$strawberry = new Strawberry("Strawberry", "red","sweet");

$strawberry->intro();


?>
</body>
  </html>