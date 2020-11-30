<?php
     class cercle extends forme{
        private $rayon=3;
        public function __construct($rayon){
            $this->rayon=$rayon;
        }
        public function aire(){   
            return pi() * $this->rayon * $this->rayon;
        }
     }
?>