<?php
// Parent class
abstract class Tasit {
	public $plakaNo;
    public $marka;
    public $model;
    public $tekerlekSayisi;
    public $kanatAcikligi;
  public function __construct($plakaNo="",$marka,$model,$tekerlekSayisi,$kanatAcikligi="") //plakaNo ve kanatAcikligi default olarak boş
  {
    $this->plakaNo = $plakaNo;
    $this->marka = $marka;
    $this->model = $model;
    $this->tekerlekSayisi = $tekerlekSayisi;
    $this->kanatAcikligi = $kanatAcikligi;
  }
  abstract public function deneme() : string; 
}

// Child classlar
class Araba extends Tasit {
  public function deneme() : string {
    return " Plaka No: $this->plakaNo \n Marka: $this->marka \n Model: $this->model \n Tekerlek Sayisi: $this->tekerlekSayisi \n"; 
  }
}
class Motosiklet extends Tasit {
  public function deneme() : string {
    return " Plaka No: $this->plakaNo \n Marka: $this->marka \n Model: $this->model \n Tekerlek Sayisi: $this->tekerlekSayisi \n"; 
  }
}
class Ucak extends Tasit {
  public function deneme() : string {
    return " Marka: $this->marka \n Model: $this->model \n Tekerlek Sayisi: $this->tekerlekSayisi \n Kanat Açıklığı: $this->kanatAcikligi"; 
  }
}

// Create objects from the child classes
$audi = new araba("06 JCB 06", "AUDİ", "A3 Sedan",4);
echo $audi->deneme();
echo "\n";

$bmw = new motosiklet("06 MTO 06", "BMW", "M 1000 RR",2);
echo $bmw->deneme();
echo "\n";

$audi = new ucak("","Challenger", "300","" ,"19m");
echo $audi->deneme();
echo "\n"; 

?>

