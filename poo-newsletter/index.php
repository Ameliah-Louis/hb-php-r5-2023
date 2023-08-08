<?php

if (isset($_POST['email'])) { // Formulaire soumis
  require_once 'classes/SpamChecker.php';
  require_once 'classes/Email.php';
  require_once 'classes/EmailsFile.php';
  require_once 'classes/Utils.php';

  try {
    $email = new Email($_POST['email']);
    $emailsFile = new EmailsFile(new SpamChecker());
    $emailsFile->add($email);
    Utils::redirect('confirm_sub.php');
  } catch (Exception $ex) {
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
      <input type="email" name="email" id="email" value="<?php echo $_POST['email'] ?? ""; ?>" />

      <button type="submit">Inscription</button>
    </form>
  </div>
</body>

</html>