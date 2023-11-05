<?php
    class Voiture 
    {   public $matricule;
        public $couleur;
        public $chevaux;
        public $type;

        public function se_connecte($matricule, $couleur, $chevaux, $type)
        {
            $this->matricule=$matricule;
            $this->couleur=$couleur; 
            $this->chevaux=$chevaux ;
            $this->type=$type;
        }
    }
?>