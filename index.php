
<?php
include("classes/FailoSkaitytuvas-class.php");
include("classes/Kompiuteris-class.php");



//Objektinio programavimo principu


//Kodas paremtas objektu kurimu

//Objektas - tai yra kintamasis, kuris turi savitas savybes ir funkcijas(metodais)

//Klases - sablonas, pagal kuri kuriamas objektas

//PHP kalboje mes pirma klase(sablona), ir pagal klase kurtis objektus

//Klases visada rasomos didziaja raide

//Sukuriame objekta
$kompiuteris = new Kompiuteris();
echo $kompiuteris->modelis; //Asus
echo "<br>";
echo $kompiuteris->procesorius; //Intel
echo "<br>";
echo $kompiuteris->ramAtmintis; //8GB
echo "<br>";
echo $kompiuteris->spalva; //Juoda
echo "<br>";
//echo $kompiuteris->procesoriausVidinisSoftware; //Slapta programine iranga
echo "<br>";
//metodas
// $kompiuteris->pilnasModelis();


$failoSkaitytuvas = new FailoSkaitytuvas();
echo $failoSkaitytuvas->failoVardas;
// var_dump($failoSkaitytuvas->arReikalingaKonversija);
// var_dump($failoSkaitytuvas->failoTurinys);

var_dump($failoSkaitytuvas->readJson()); //failas.txt



$failoSkaitytuvas1 = new FailoSkaitytuvas();

$failoSkaitytuvas1->failoVardas = "failas1.txt";
$failoSkaitytuvas1->arReikalingaKonversija = true;
$failoSkaitytuvas1->failoTurinys = "test";

var_dump($failoSkaitytuvas1->readJson());//failas1.txt

// echo $failoSkaitytuvas1->failoVardas;
// var_dump($failoSkaitytuvas1->arReikalingaKonversija);
// var_dump($failoSkaitytuvas1->failoTurinys);
//Savybes galime keisti tiesiogiai(uz klases ribu)

//Ar galima tureti objektu masyva?

$failuSkaitytuvai = array($failoSkaitytuvas, $failoSkaitytuvas1);

var_dump($failuSkaitytuvai);

$kompiuteriai = array();

//masine produkcija = ne 1 objekta o kelis


//sukuriam 100 objektu, taciau is ju 50 bus su 16gb
//atsitiktiniu duomenu generavima
for($i=0; $i<100; $i++) {
    $kompiuteriai[$i] = new Kompiuteris();
    if($i>50) {
        $kompiuteriai[$i]->ramAtmintis = "16GB";
    }
}

//var_dump($kompiuteriai);

$failoSkaitytuvas1->failoVardas = "kompiuteriai.json";
$failoSkaitytuvas1->writeJson($kompiuteriai);

var_dump($failoSkaitytuvas1->readJson());

//irasyti kompiuterius i faila

//Turime faila klientai.json
//irasyti nauja klienta pagal forma