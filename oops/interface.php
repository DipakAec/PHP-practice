<?php
interface state{
    public function language();
}

class Bengal implements state{
    public function language(){
        echo "My language is Bengali <br>";
    }
}

class Keral implements state{
    public function language(){
        echo "My language is Maliyali <br>";
    }
}

class Bihar implements state{
    public function language(){
        echo "My language is Hindi <br>";
    }
}

class Andhra implements state{
    public function language(){
        echo "My language is Telegu <br>";
    }
}

$bengal = new Bengal();
$keral = new Keral();
$bihar = new Bihar();
$andhra = new Andhra();

$states = array($bengal,$keral,$bihar,$andhra);
    foreach ($states as $state) {
        $state->language();
    }
?>
