<?php

class Personnage
{
    private $nom;
    private $prenom;
    private $age;
    private $sexe;

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    public function presentation()
    {
        echo "Je m'appelle $this->nom $this->prenom";
    }

}

$p = new Personnage();
$p->setNom("Lebowski");
$p->setPrenom("Jeff");

$p->presentation();


?>