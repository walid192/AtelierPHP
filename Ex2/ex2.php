<?php
$send = isset($_POST['note']);
$already = isset($_COOKIE['note']);

if ($send && !$already) {
  setcookie('note', $_POST['note'], time() + 60 * 2, '/');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <style>
    .success {
      color: green;
    }

    .error {
      color: red;
    }
  </style>
</head>

<body>
  <?php
  if ($send) {
    if (!$already) {
  ?>
      <div class="success">
        <h4>Note enregistré. Merci pour votre temps.</h4>
      </div>
    <?php
    } else {
    ?>
      <div class="error">
        <h4>
          Vous avez déjà votez pour
          <?= ucfirst($_COOKIE['note']) ?>!
        </h4>
      </div>
  <?php
    }
  }
  ?>
  <h1>Questionnaire</h1>
  <form method="POST">
    <h3>Notez ce cours:</h3>
    <div>
      <input type="radio" name="note" value="bon" id="bon" checked />
      <label for="bon">Bon</label>
    </div>
    <div>
      <input type="radio" name="note" value="moyen" id="moyen" />
      <label for="moyen">Moyen</label>
    </div>
    <div>
      <input type="radio" name="note" value="mauvais" id="mauvais" />
      <label for="mauvais">Mauvais</label>
    </div>
    <div class="action">
      <button type="submit" class="action-button">Envoyer</button>
    </div>
  </form>
</body>

</html>