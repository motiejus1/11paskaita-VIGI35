<?php 
class FailoSkaitytuvas {
   public $failoVardas="failas.txt";
   public $failoTurinys;
   public $arReikalingaKonversija = false; //true/false
   
   //true - gautas failo turinys JSOn paverciamas i php masyva
   //false - gautas failo turinys paliekamas kaip yra

   // protected metodai/private

   // tai yra tokie metodai, kurie turi prasme tik klases viduje
   protected function nuskaitytFaila() {
        $this->failoTurinys = file_get_contents($this->failoVardas);
        if($this->arReikalingaKonversija) {
            $this->failoTurinys = json_decode($this->failoTurinys, true);
        }
   }

   
   public function readJson() {
         $this->nuskaitytFaila();
         return $this->failoTurinys;
   }

   public function writeJson($array){
        $json = json_encode($array);
        file_put_contents($this->failoVardas, $json);
   }
}