<?php
$choixEnvoye = isset($_POST["note"]);
$choixEnregistre = isset($_COOKIE["note"]);
if ($choixEnvoye && !$choixEnregistre) {
    setcookie("note", $_POST["note"], time() + 60 * 2);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platform</title>
</head>

<body>
    <?php
    if ($choixEnregistre) {
        echo ("Vous avez deja choisi, votre choix est :");
        echo ($choixEnregistre);
    } ?>

    <form method="POST">
        <fieldset style="padding-left: 5%;">
            <h4>
                Evaluer l'avancement du cour du php
            </h4>
            <input type="radio" name="note">Bon <br>
            <input type="radio" name="note">Moyen <br>
            <input type="radio" name="note">Mauvais <br> <br>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>