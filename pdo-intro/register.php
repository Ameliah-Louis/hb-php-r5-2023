<?php require_once 'layout/header.php'; ?>

<h1>Inscription</h1>

<form action="register_process.php" method="POST">
  <div>
    <label for="lastname">
      Nom
    </label>
    <input type="text" name="lastname" id="lastname" />
  </div>
  <div>
    <label for="firstname">
      Prénom
    </label>
    <input type="text" name="firstname" id="firstname" />
  </div>
  <div>
    <label for="email">email</label>
    <input type="email" name="email" id="email" />
  </div>
  <div>
    <label for="birth_date">
      Date de naissance
    </label>
    <input type="date" name="birth_date" id="birth_date" />
  </div>
  <div>
    <label for="password">Mot de passe</label>
    <input type="password" name="password" id="password" />
  </div>
  <div>
    <label for="passwordConfirm">Confirmez le mot de passe</label>
    <input type="password" name="passwordConfirm" id="passwordConfirm" />
  </div>
  <div><input type="submit" value="Inscription" /></div>
</form>

<?php require_once 'layout/footer.php';
