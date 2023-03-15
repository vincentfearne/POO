<?php


class Magasin
{
    public $enseigne;
    public $adresse;
    public $codepostal;
    public $ville;
    public $moderestauration;
}

$magasin1 = new Magasin("Auchan", "3 rue du Popo", 80000, "AMIENS", "Tickets restaurants");

class Employe extends Magasin
{
    public $nom;
    public $prenom;
    public $date_embauche;
    public $poste;
    public $salaire;
    public $service;
    public $magasin;


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
    echo "$this->prenom $this->nom est la depuis $anciennete->y ans.<br>";
}

public function Prime()
{
    $now = new DateTime();
    $dateinitiale = new DateTime($this->date_embauche);
    $anciennete = $now->diff($dateinitiale);
    $extra = (((5+(2*$anciennete->y))*($this->salaire))/100);
    echo "Ordre de transfert en date du 30/11 : $extra <br><br>";
}

}

$employe1 = new Employe("CUCU", "Popo", "2015-01-05", "directeur", 12000, "direction", $magasin1);
$employe2 = new Employe("COCO", "Pupu", "2015-01-05", "directeur adjoint", 10000, "direction", $magasin1);
$employe3 = new employe("DUMAS", "Bertrand", "2015-01-05", "esclave", 100, "main d'oeuvre", $magasin1);
$employe4 = new Employe("CHIROT", "Pascal", "2015-08-06", "gardien", 3000, "sécurité", $magasin1);
$employe5 = new Employe("POTICHE", "Catherine", "2017-10-25", "comptable", 5000, "comptabilité", $magasin1);

$employe1->Anciennete();
$employe1->Prime();
$employe2->Anciennete();
$employe2->Prime();
$employe3->Anciennete();
$employe3->Prime();
$employe4->Anciennete();
$employe4->Prime();
$employe5->Anciennete();
$employe5->Prime();

?>

