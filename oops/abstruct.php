<?php
abstract class country{
    public $name;
     
    public function __construct($name){
        $this->name = $name;
    }

    abstract function intro():string;
}
class India extends country{
    public function intro() : string{
        return "I am the bigest democracy of the world! i am $this->name";
    }
}

class USA extends country{
    public function intro() : string{
        return "I am the oldest democracy of the world! i am $this->name";
    }
}

class Russia extends country{
    public function intro() : string{
        return "I am the leargest country in the world! i am $this->name";
    }
}


$india=new India("India");
echo $india->intro();
echo "<br>";

$usa=new USA("Usa");
echo $usa->intro();
echo "<br>";

$russia=new Russia("Russia");
echo $russia->intro();
echo "<br>";


?>