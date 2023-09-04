<?php require_once 'layout/header.php'; ?>

<h1>Login</h1>

<form action="auth.php" method="post">
  <div><label for="email">Email :</label><input type="email" name="email" id="email" /></div>
  <div><label for="password">Mot de passe :</label><input type="password" name="password" id="password" /></div>
  <div>
    <input type="submit" value="Connexion" />
  </div>
</form>

<?php require_once 'layout/footer.php';
