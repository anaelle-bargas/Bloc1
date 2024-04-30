<?php
$mocodoCode = "AYANT-DROIT: nom ayant-droit, lien
DIRIGER, 0N [responsable] EMPLOYÉ, 01 PROJET
REQUÉRIR, 1N PROJET, 0N PIÈCE: qté requise
PIÈCE: réf. pièce, libellé pièce
COMPOSER, 0N [composée] PIÈCE, 0N [composante] PIÈCE: quantité

DF, _11 AYANT-DROIT, 0N EMPLOYÉ
EMPLOYÉ: matricule, nom employé
PROJET: num. projet, nom projet
FOURNIR, 1N PROJET, 1N PIÈCE, 1N SOCIÉTÉ: qté fournie

DÉPARTEMENT: num. département, nom département
EMPLOYER, 11 EMPLOYÉ, 1N DÉPARTEMENT
TRAVAILLER, 0N EMPLOYÉ, 1N PROJET
SOCIÉTÉ: num. société, raison sociale
CONTRÔLER, 0N< [mère] SOCIÉTÉ, 01 [filiale] SOCIÉTÉ";

$tables = array();
$champs = array();
$primaryKeys = array();
$foreignKeys = array();

//// RECHERCHE DES EPA

$lignes = explode("\n", $mocodoCode);
print_r($lignes);
// Affichage des positions des sauts de ligne
echo"<br><br>";
for($i=0; $i<(count($lignes)-1);$i++){
   
    $positionDeuxPoints = rechercheDeuxPoints($lignes[$i]);
    $positionVirgule = rechercherVirgule($lignes[$i]);
    
    
    if($positionDeuxPoints !==false || $positionVirgule !== false){
        
        if($positionDeuxPoints === false || ($positionDeuxPoints>$positionVirgule)){
            echo "<br>it's a CIF or a CIM";


        }
        else {
            echo "<br>it's a table";
            echo "<br><br><br>";
            $ligneEnDeux = explode(":", $lignes[$i]);
            $champs = rechercheChamps($ligneEnDeux[1])[1];
            print_r($champs);

        }
        
    }

}

function rechercheChamps($table){
    $champs = explode(",", $table);
    return $champs;
}

function rechercheDeuxPoints($table){
    echo "<br>table :".$table."b";
    return strpos($table, ":");
}

function rechercherVirgule($table){
    echo "<br>table :".$table."b";
    return strpos($table, ",");
}

?>
