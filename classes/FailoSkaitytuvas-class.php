<?php 
class FailoSkaitytuvas {
   public $failoVardas="failas.txt";
   public $failoTurinys;
   public $arReikalingaKonversija = false; //true/false
   
     // Klasikinis konstruktorius
   public function __construct($failoVardas,$failoTurinys,$arReikalingaKonversija) {
     $this->failoVardas = $failoVardas;
     $this->failoTurinys = $failoTurinys;
     $this->arReikalingaKonversija = $arReikalingaKonversija;
   }
   //true - gautas failo turinys JSOn paverciamas i php masyva
   //false - gautas failo turinys paliekamas kaip yra

   // protected metodai/private

   // tai yra tokie metodai, kurie turi prasme tik klases viduje
   protected function nuskaitytFaila() {
        $this->failoTurinys = file_get_contents($this->failoVardas);
        if($this->arReikalingaKonversija) {
            //decode true - gauta informacija pavercia i masyva
            // false 0 gauta infomracija pavercia i objektus
            $this->failoTurinys = json_decode($this->failoTurinys, true);
        }
   }

   
   public function readJson() {
         $this->nuskaitytFaila();
         return $this->failoTurinys;
   }

   //ne tik masyva, bet ir objekta
   public function writeJson($input){
        //objekto mes negalime irasyti tiesiai, mes ji uzkoduoti i json
        $json = json_encode($input);
        file_put_contents($this->failoVardas, $json);
   }
}