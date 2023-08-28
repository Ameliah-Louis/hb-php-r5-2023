<?php require_once 'layout/header.php';
if (isset($_SESSION['login'])) {
  $welcomeMessage = "Bienvenue, " . $_SESSION['login'];
} else {
  $welcomeMessage = "Bienvenue";
}
?>

<h1><?php echo $welcomeMessage; ?></h1>

<?php require_once 'layout/footer.php';
