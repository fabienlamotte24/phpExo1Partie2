<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
  </head>
  <body>
    <p>
<?php
/*Définition de la variable*/
  $age = -3;
  /*Condition pour éviter les age négatifs*/
  if($age < 0){
    echo 'Veuillez entrer un age valide';
  } else {
    /*Condition si variable est sup à 18*/
    if($age >= 18){
      echo 'vous êtes majeur';
    } else {/*Autre condition si la variable n'est pas sup à 18*/
      echo 'vous êtes mineur';
    }
  }
 ?>
    </p>
  </body>
</html>
