<?php
require_once 'layout/header.php';
require_once 'classes/Utils.php';
require_once 'classes/ErrorCode.php';

if (!isset($_SESSION['login'])) {
  Utils::redirect('login.php?error=' . ErrorCode::ADMIN_ACCESS_ERROR);
}
?>

<h1>Administration</h1>

<?php require_once 'layout/footer.php';
