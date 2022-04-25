<?php

class Personne {

    public $nom;
    public $prenom;
    public $adresse;
    public $dateNaissance;

    public function __construct(string $nom, string $prenom, string $adresse, string $dateNaissanceStr) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->dateNaissance = DateTime::createFromFormat('d/m/Y', $dateNaissanceStr);
    }

    public function afficher():void {
        echo "nom: $this->nom <br>";
        echo "prenom: $this->prenom<br>";
        echo "adresse: $this->adresse<br>";
        echo "date naissance: ".$this->dateNaissance->format('d/m/Y')."<br>";        
    }
    
    public function setAdresse(string $adresse){
        $this->adresse=$adresse;
    }
    
    public function age():int {
        $dateCourante=new DateTime();
        $anneeCourante=intval($dateCourante->format('Y'));
        $anneeNaissance=intval($this->dateNaissance->format('Y'));        
        return $anneeCourante - $anneeNaissance;
    }
}
