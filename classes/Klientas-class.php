<?php

include "FailoSkaitytuvas-class.php";
//Klases kodas atmintyje neegzistuoja tol, kol nebus sukurtas objektas
class Klientas {

    //invalid operation
    public $vardas;
    public $pavarde;
    public $amzius;
    public $miestas;

    public $klientuSarasas; //klientu sarasas

    //konstruktoriaus savoka

    //konstruktorius - metodas, kuris pasileidzia objekto sukurimo metu
    // konstruktoriaus metodas visada yra PUBLIC !!!!
    
    //kliento sukurimo metu priskirme savybems reiksmes

    public function __construct() {
            $this->vardas = $_POST["vardas"];
            $this->pavarde = $_POST["pavarde"];
            $this->amzius = $_POST["amzius"];
            $this->miestas = $_POST["miestas"];
            $this->addClient();
            $this->getClients();
    }

    public function addClient() {
        $failoSkaitytuvas = new FailoSkaitytuvas("klientai.json", "", true);
        $klientas = array(
            "vardas" => $this->vardas,
            "pavarde" => $this->pavarde,
            "amzius" => $this->amzius,
            "miestas" => $this->miestas
        );
        
        $klientai = $failoSkaitytuvas->readJson();
        $klientai[] = $klientas;
        $failoSkaitytuvas->writeJson($klientai);
    }

    public function getClients() {
        $failoSkaitytuvas = new FailoSkaitytuvas("klientai.json", "", true);
        $klientai = $failoSkaitytuvas->readJson();
        $this->klientuSarasas = $klientai;
    }

    //is post paimti kintamuosius

    //metodas
}