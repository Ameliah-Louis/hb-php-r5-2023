<?php
require_once 'data/services.php';
require_once 'html_functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select List</title>
</head>

<body>
  <h1>Nouveau produit</h1>

  <form method="post">
    <input type="text" name="name" id="name" />

    <!-- SELECT LIST SERVICES -->
    <select name="services" multiple>
      <?php foreach ($services as $service) {
        echo getSelectOption($service);
      } ?>
    </select>

    <button type="submit">Enregistrer</button>
  </form>
</body>

</html>