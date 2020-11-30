<?php
class triangle extends forme{
    private $base;
    private $hauteur;

    public function __construct($base,$hauteur){
      $this->hauteur=$hauteur;
      $this->base=$base;
  }

      public function aire(){
        return ($this->base * $this->hauteur)/2;
    }
 
}

?>