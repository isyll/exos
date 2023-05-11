<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exo12</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>

  <form action="" method="get">
    <select name="langue" id="langue">
      <option value="anglais">Anglais</option>
      <option value="francais">francais</option>
    </select>
    <input type="submit" />
  </form>

  <div class="root">
    <?php
    $year = date('Y');
    $d1 = new DateTime('');
    ?>
  </div>

</body>

</html>