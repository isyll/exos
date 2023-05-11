<form method="get">
  <label for="nombre">Entre un nombre : </label>
  <input type="text" name="nombre" id="nombre" />
</form>

<div>
  <?php
  function calcul()
  {
    if (!empty($_GET['nombre']) && is_numeric($_GET['nombre'])) {
      $nombre = $_GET['nombre'];
      echo "<ul>";
      for ($i = 1; $i <= $nombre; $i++) {
        echo "<li> $i</li>";
      }

      echo "</ul>";

    } else if ($_GET['nombre'] < 0) {
      echo "Le nombre doit être positif.";
    } else if (!empty($_GET['nombre'])) {
      echo 'ce Nombre est invalide!';
    }
  }

  calcul();
  ?>
</div>