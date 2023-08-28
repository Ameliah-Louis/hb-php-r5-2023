<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload</title>
</head>

<body>
  <?php
  var_dump($_FILES);
  var_dump($_POST);

  if (isset($_FILES['myFile']) && $_FILES['myFile']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['myFile'];

    $filename = $file['name'];
    $destination = __DIR__ . '/uploads/' . $filename;

    if (move_uploaded_file($file['tmp_name'], $destination)) {
      echo "<p>Fichier enregistré</p>";
    }
  }
  ?>

  <form method="POST" enctype="multipart/form-data">
    <input type="text" name="firstname" />
    <input type="file" name="myFile" />
    <input type="submit" value="Envoyer" />
  </form>
</body>

</html>