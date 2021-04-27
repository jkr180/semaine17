<?php
$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
       "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
       "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
     );
;
?>


<?php
/*
Exercice 0
Testez les différents exemples du cours, à l'aide de la fonction var_dump().

Exercice 1
Quelle semaine a lieu la validation du groupe 19002 ?

Lucas_180 — 15/04/2021
$temp = array_map("strtolower", $a["19002"]);
var_dump($temp);
$resultat = array_search("validation", $temp);
var_dump($resultat)

Exercice 2
Trouver la position de la dernière occurrence de Stage pour le groupe 19001.

$val = array_reverse ($a["19001"],true);
$pos = array_search("Stage",$val);
var_dump($val);
var_dump($pos);

Exercice 3
Extraire, dans un nouveau tableau, les codes des groupes.

$cle = array_values($a);
     print_r(array_keys($a));
     var_dump($cle);

Exercice 4
Combien de semaines dure le stage du groupe 19003 ?

$occ = array_count_values($a["19003"]);
echo $occ ["Stage"];
var_dump($occ);

Présentez votre travail à un formateur.
*/
?>