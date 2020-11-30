<?php
class carre extends forme{
    private $cote;
    public function __construct($cote){
        $this->cote=$cote;
    }

    public function aire(){
        return $this->cote * $this->cote;
    }
}

?>