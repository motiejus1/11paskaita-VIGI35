<?php


class Kompiuteris {

    //Savybes(properties)
    public $modelis="Asus";
    public $procesorius="Intel";
    public $ramAtmintis="8GB";
    public $spalva = "Juoda";
    private $procesoriausVidinisSoftware = "Slapta programine iranga";

    //Pasiekiamumo raktažodžiai

    // public(viesas) - visiems, sita savybe pasiekiama uz klases ribu
    // protected(apsaugotas) - savybe gali buti naudojama  klases viduje ir vaikinese klasese(objektai gali tureti hierarchija)
    // private(privatus) - savybe gali buti naudojama tik klases viduje

    //Metodas - tai funkcija klases viduje
    protected function pilnasModelis() {
        echo $this->modelis . " " . $this->procesorius . " " . $this->ramAtmintis . " " . $this->spalva;
    }

}