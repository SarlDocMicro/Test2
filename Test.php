<?php

echo"Mon php";;

include("./header/header.php"); // Inclure un fichier

$age = 21;
$test=50;
$permis=true;
echo "j'ai $age ans <br \>"; //Concaténation d'une variable V1
echo 'j\'ai '.$age.' ans '; // V2 plus opti

// CALCUL
$age = $age+$age;
echo "l'addition de mon age est de " .$age." ans <br \>";
$Multiplication = $age*5;
echo "La multiplication de mon age par 5 est de " .$Multiplication." ans <br \>";

//CONDITION
//==;===(Compare le type de viriable)

if ($test <10)
{
  echo "Trop petit";
}
elseif($test >80)
{
  echo "Trop grand";
}
else
{
  echo "Tout va bien";
}
echo "<br />";

if ($age < 18 && $permis){
  echo "c'est pas normal";
} elseif ($age >= 18 && $permis)
{
  echo "Bravo gamin";
  echo "<br />";
}
echo "<br />";
//LE SWITCH
switch ($age) {
  case 18:
  echo"Je suis majeur";
  break;
  case 19:
  echo"Tu est plus que majeur";
  break;
  default:
  echo"Age non défini";
}
$chaine = "Il a pas dit bjr";
$longeurCaine = strlen($chaine);
echo "<br> longeur de la chaine : ".$longeurCaine;
echo" <br>";

function direbonjour($prenom)
{
  echo "Bonjour ".$prenom."<br>";
}
direbonjour("Tanguy");

function addition($nb1, $nb2)
{
  $res = $nb1 + $nb2;
  return $res;
}

echo addition(5,2). "<br>";

$prenoms = array("thomas", "bryan", "tanguy", "Mohamed");
$prenoms[7] = "Delattre";
echo $prenoms[0];

$tab[0] = "porte";
echo "<br>";

for ($i= 0; $i <count($prenoms); $i++)
{
  echo $prenoms[$i]."<br>";
}

foreach ($prenoms as $key => $prenom) {
  echo $prenom." cle :".$key."<br>";
}

$coordonnees = array("prenom" => "Thomas",
"nom" => "legrand",
"age" => 24);

echo "<br><br><br>";
foreach ($coordonnees as $key => $element) {
  echo $key."  :".$element."<br>";
}

echo $coordonnees["prenom"]."<br>";

echo "<pre>";
print_r($coordonnees);
echo "</pre>";

echo "<br>"

$prenoms = array("thomas", "bryan", "Mohamed", "tanguy");
function supprimerElement($tableau)
{
  $newtableau = array();
  for ($i= 0; $i<(count($tableau)-1); $i++){
    $newtableau[]=$tableau[$i];
  }
  return $newtableau;

}
echo "<pre>";
print_r(supprimerElement($prenoms));
echo "</pre>";


?>
