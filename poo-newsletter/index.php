<?php

// Initialisation email
$email = "";

if (isset($_POST['email'])) { // Formulaire soumis
  require_once 'classes/SpamChecker.php';
  $email = $_POST['email'];
  $checker = new SpamChecker();

  try {
    $isSpam = $checker->isSpam($email);
  } catch (InvalidArgumentException $ex) {
    $errorMessage = $ex->getMessage();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/style.css" />
  <title>Inscription</title>
</head>

<body>
  <div id="wrapper">
    <h1>Inscription à la newsletter</h1>

    <?php if (isset($errorMessage)) { ?>
      <div class="error">
        <?php echo $errorMessage; ?>
      </div>
    <?php } ?>

    <form method="POST">
      <label for="email">Email :</label>
      <input type="email" name="email" id="email" value="<?php echo $email; ?>" />

      <button type="submit">Inscription</button>
    </form>
  </div>
</body>

</html>