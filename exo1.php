<?php

function generer_cote()
{
  $cote = rand(1, 100);
  $surface = $cote*$cote;
  $perimetre = $cote*4;
  $diagonale = sqrt($surface+$surface);
  echo "coté : $cote mètres<br/>
  surface : $surface m2<br/>
  perimetre: $perimetre mètres<br/>
  diagonale: $diagonale mètres";
}

generer_cote();
