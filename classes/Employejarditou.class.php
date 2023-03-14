<?php

class Employe
{
    public $nom;
    public $prenom;
    public $date_embauche;
    public $poste;
    public $salaire;
    public $service;


public function __construct($nom, $prenom, $date_embauche, $poste, $salaire, $service)
{
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->date_embauche = $date_embauche;
    $this->poste = $poste;
    $this->salaire = $salaire;
    $this->service = $service;
}

public function Anciennete()
{
    $now = new DateTime();
    $dateinitiale = new DateTime($this->date_embauche);
    $anciennete = $now->diff($dateinitiale);
    echo "Cet employé est la depuis $anciennete->y ans.";
}

}

$employe1 = new Employe("CUCU", "Popo", "2015-01-05", "directeur", 12000, "direction");
$employe1->Anciennete();



?>

