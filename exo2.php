<?php

function generer_longueur_largeur()
{
  $longueur = rand(1, 100);
  $largeur = rand(1, 100);
  $surface = $longueur*$largeur;
  $perimetre = ($longueur+$largeur)*2;
  $diagonale = sqrt(
    $longueur*$longueur+$largeur*$largeur
);
  echo "longueur : $longueur mètres<br/>
  largeur : $largeur mètres<br/>
  surface : $surface m2<br/>
  perimetre: $perimetre mètres<br/>
  diagonale: $diagonale mètres";
}

generer_longueur_largeur();
