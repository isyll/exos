<form method="get">
  <label for="date">ENTREZ UNE DATE AU FORMAT MM/JJ/AAAA : </label>
  <input type="text" id="date" name="date" />
  <input type="submit" />
</form>

<?php

/*
Entrer une date (jour/mois/année) à
l’aide d’un formulaire ,puis déterminer et afficher la date
suivante et la date précédente.Le champ est obligatoire et
la date est valide.
*/
if (!empty($_GET['date'])) {
  $date = strtotime($_GET['date']);
  if ($date !== false) {
    $date1 = date('d/m/Y', $date + 86400);
    $date  = date('d/m/Y', $date);
    echo "date : " . $date . "<br>";
    echo "La date suivante est : $date1";
  } else {
    echo "la date saisie est ionvalide!";
  }
}