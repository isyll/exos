<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>exo11</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="style11.css" />
</head>

<body>
  <form action="" method="get">
    <label for="nombre">Entre un nombre supérieur à 10000 : </label>
    <input type="text" name="nombre" id="nombre" />
  </form>

  <div>
    <?php
    function est_premier($nb)
    {
      for ($i = 2, $n = $nb, $nb /= 2; $i < $nb; $i++)
        if ($n % $i === 0)
          return false;
      return true;
    }

    function somme(array $tab): int
    {
      $somme = 0;

      for ($i = 0, $len = count($tab); $i < $len; $i++)
        $somme += $tab[$i];

      return $somme;
    }

    function calcul()
    {
      if (
        !empty($_GET['nombre']) && is_numeric($_GET['nombre']) &&
        $_GET['nombre'] > 10000
      ) {
        $nombre = $_GET['nombre'];

        for ($i = 2; $i < $nombre; $i++)
          if (est_premier($i))
            $donnees['premiers'][] = $i;

        $somme   = somme($donnees['premiers']);
        $moyenne = $somme / count($donnees['premiers']);

        for ($i = 1; $i < $moyenne; $i++)
          $donnees['inferieurs'][] = $i;

        for ($i = $nombre - 1; $i > $moyenne; $i--)
          $donnees['superieurs'][] = $i;

        $cp         = count($donnees['premiers']);
        $cs         = count($donnees['superieurs']);
        $ci         = count($donnees['inferieurs']);
        $max_length = $cp > $cs ? ($cp > $ci ? $cp : $ci) : $cs;

        echo <<<EOL
        <table>
        <tr>
          <td>Somme : </td>
          <td>$somme</td>
        </tr>
        <tr>
          <td>Moyenne : </td>
          <td>$moyenne</td>
        </tr>
        </table>
        <table>
          <thead>
            <tr>
              <th scope="col">Premiers</th>
              <th scope="col">Inférieurs</th>
              <th scope="col">Supérieurs</th>
            </tr>
          </thead>
  EOL;
        for ($i = 0; $i < $max_length; $i++) {
          $prem = $donnees['premiers'][$i] ?? '';
          $inf  = $donnees['inferieurs'][$i] ?? '';
          $sup  = $donnees['superieurs'][$i] ?? '';

          echo <<<EOL
          <tr>
            <td>{$prem}</td>
            <td>{$inf}</td>
            <td>{$sup}</td>
          </tr>
  EOL;
        }
        echo "</table>";
      } else if ($_GET['nombre'] && $_GET['nombre'] < 10000) {
        echo "Le nombre doit supérieur à 10000.";
      } else if (!empty($_GET['nombre'])) {
        echo 'ce Nombre est invalide!';
      }
    }

    calcul();
    ?>
  </div>

</body>

</html>