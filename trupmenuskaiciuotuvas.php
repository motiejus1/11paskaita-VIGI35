<?php
//Sudeti dvi trupmenas

//Sudeti
//Trupmena

//objektas kintamasis

// trupmena - 

//trupmenos skaiciuotuvas = trupmena sudeti


class Trupmena {
    public $sveikajaDali;
    public $skaitiklis;
    public $vardiklis;

    public function __construct($sveikajaDali, $skaitiklis, $vardiklis) {
        $this->sveikajaDali = $sveikajaDali;
        $this->skaitiklis = $skaitiklis;
        $this->vardiklis = $vardiklis;
    }
}


class TrupmenosSkaiciuotuvas {
    public $trupmena1;
    public $trupmena2;
    public $atsakymas;

    //trupmena1 ir trupmena2 - objektai
    public function sudeti($trupmena1, $trupmena2) {
       //i skaiciuotuvo atminti isaugojau trupmenas
        $this->trupmena1 = $trupmena1;
        $this->trupmena2 = $trupmena2;

        $trupmena1->skaitiklis = $trupmena1->skaitiklis * $trupmena2->vardiklis;
        $trupmena2->skaitiklis = $trupmena2->skaitiklis * $trupmena1->vardiklis;
        $trupmena1->vardiklis = $trupmena1->vardiklis * $trupmena2->vardiklis;
        $trupmena2->vardiklis = $trupmena1->vardiklis;
        
        $this->atsakymas = new Trupmena(0, $trupmena1->skaitiklis + $trupmena2->skaitiklis, $trupmena1->vardiklis);

        return $this->atsakymas;

    }

}

$trumpmena1 = new Trupmena(0,1,3); //trupmena kurios 1 1/2 -> kintamojo tipas trupmena
$trumpmena2 = new Trupmena(0,1,2); // trupmena kurios 1/2 -> kintamojo tipas trupmena

$trupmenosSkaiciuotuvas = new TrupmenosSkaiciuotuvas();

var_dump($trupmenosSkaiciuotuvas->sudeti($trumpmena1, $trumpmena2));
var_dump($trupmenosSkaiciuotuvas->trupmena1);
var_dump($trupmenosSkaiciuotuvas->trupmena2);