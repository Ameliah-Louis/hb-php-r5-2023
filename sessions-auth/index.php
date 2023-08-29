<?php require_once 'layout/header.php';
if (isset($_SESSION['login'])) {
  $welcomeMessage = "Bienvenue, " . $_SESSION['login'];
} else {
  $welcomeMessage = "Bienvenue";
}

// $welcomeMessage = "Bienvenue" . (isset($_SESSION['login']) ? ", " . $_SESSION['login'] : "");
?>

<h1><?php echo $welcomeMessage; ?></h1>

<?php require_once 'layout/footer.php';
