<?php

function getBillets(){

$bdd = new PDO('mysql:host=localhost;charset=utf8;dbname=train', 'admin', '<AlGaViEm95>');
$billets  = $bdd->query('SELECT BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu FROM T_BILLET order by BIL_ID desc');
return $billets;
}

function getBdd()
{
    $bdd = new PDO("mysql:host=localhost;dbname=train;charset=utf8",'admin','<AlGaViEm95>',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    return $bdd;
}



function getBillet($idBillet){
    $bdd= getBdd();
    $billet=$bdd->prepare('SELECT BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu FROM T_BILLET WHERE BIL_ID =?;');
    $billet->execute(array($idBillet));

    if($billet->rowCount() == 1){
        return $billet->fetch();
    }
    else{
        throw new Exception("Aucun billet ne correspond à cet identifiant");
    }
}


function getComments($idBillet): bool|PDOStatement
{
    $bdd = getBdd();
    $comments = $bdd->prepare('SELECT COM_ID as id, COM_DATE as date, COM_AUTEUR as auteur, COM_CONTENU as contenu FROM T_COMMENTAIRE WHERE BIL_ID =?');
    $comments->execute(array($idBillet));
    return $comments;
}





?>