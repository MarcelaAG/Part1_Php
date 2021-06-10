<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part1 PHP</title>
</head>
<body>
    <h1>Part 1 PHP</h1>
<h2>ex1 Créez une variable et lui affecter une chaîne de caractères. Afficher cette variable.</h2>
<?php
  $city = 'Toronto';
  echo $city;
?>
<h2>ex2 Créez trois variables : nom, prénom, âge. Afficher ces variables dans une phrase(ex: Je m'appelle "nom prénom" et j'ai "age" ans.)</h2>
<?php
  $fName = 'Marcela';
  $lName = 'AB';
  $age = 39;
  echo 'I am '.$fName.' '.$lName.' '. 'I am '. ' '.$age. ' '.'years old'  
?>
<h2>ex3 Créez une variable age. Afficher vous êtes majeur ou vous êtes mineur en fonction de l'âge.</h2>
<?php
  $age = 28;
  if($age >= 18){
    echo 'You are of age';
  }else{
    echo 'You are under age';
  }
  ?>
//
<!-- // $age = 0;
// if($age > 0){
//   if($age >= 18){
//     echo 'You are of age';
//   }else{
//     echo 'You are under age';
//   }else{
//     echo 'Please enter a valid age!';
//   } -->


<h2>ex4 Créez une variable age aléatoire. Afficher vous êtes majeur ou vous êtes mineur en fonction de l'âge obtenu.</h2>
<?php
$age = rand(0, 100);
echo $age;
if($age >= 18){
  echo 'You are of age';
}else{
  echo 'You are under age';
}
?>
<h2>//ex5 Créez une variable âge et une variable genre. Afficher aléatoirement vous êtes une femme et vous avez xans ou vous êtes un homme et vous avez xans.</h2>
<?php
$age = rand(0, 100);
$sex = array('male', 'female');
$gender = $sex[rand(0,1)];
$result = $age. ' '. $gender;
echo $result;
?>
<h2>//ex 6</h2>
<?php
$magnitude = random_int(0,9);

$magnitudes = array(
            0 => "Not found",
            1 => "Micro-séisme impossible à ressentir",
            2 => "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres",
            3 => "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti",
            4 => "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats",
            5 => "Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes",
            6 => "Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre",
            7 => "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance",
            8 => "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres",
            9 => "Séisme capable de tout détruire sur une très vaste zone",
        );

function displayMessage($key){
        global $magnitude;
        global $magnitudes;
        echo $magnitude . ': '. $magnitudes[$key];   
    }
    displayMessage($magnitude);
    ?>
    <?php

phpinfo());

?>
</body>
</html>