<?php

/*
Somme
● Exponentiel
● Différence
● Produit
● Modulo
● Division
● Carré
*/


function calculs()
{
  $nb1            = rand(1, 1000);
  $nb2            = rand(1, 1000);
  $exponentielle1 = exp($nb1);
  $exponentielle2 = exp($nb2);

  $difference = $nb1 - $nb2;
  $produit    = $nb1 * $nb2;

  $modulo   = $nb1 % $nb2;
  $division = $nb1 / $nb2;
  $carre1   = $nb1 * $nb1;
  $carre2   = $nb2 * $nb2;

  echo "
    exp1 : $exponentielle1<br/>
    exp2 : $exponentielle2<br/>

    différence : $difference<br/>
    produit : $produit<br/>
    modulo : $modulo<br/>
    division : $division<br/>
    carre1 : $carre1<br/>
    carre2 : $carre2<br/>


  ";
}
calculs();