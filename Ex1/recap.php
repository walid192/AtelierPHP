<?php
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$Nbre_Sand = $_POST["Nbre_Sand"];
$email = $_POST["Email"];
$type = $_POST["type"];
$fichier = $_FILES["cin"];


// cette fonction pour detreminer les ingredients choisis
function ingredientChoisis($name)
{
    return isset($_POST[$name]);
}
// ce tableau contient les ingredients choisis 
$ingredients = array_filter(["Harissa", "Salade", "Mayo"], "ingredientChoisis");


//Changer le nom du fichier

$fichier_nom = strval(uniqid()) . $fichier["Type"];
$fichier["Name"] = $fichier_nom;

move_uploaded_file($fichier["tmp_name"], "uploads/" . $fichier_nom)


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Nom: </h4><?php
                    echo ($nom); ?>
    <h4>Prenom: </h4><?php
                        echo ($prenom); ?>
    <p>
        Nombre de sandwich achetes : <?php echo ($Nbre_Sand); ?> => Prix total: <?php if ($Nbre_Sand < 10) {
                                                                                    echo ($Nbre_Sand * 4);
                                                                                } else {
                                                                                    echo ($Nbre_Sand * 4 * 0.9);
                                                                                }; ?> dt

    </p>
    <h4>Email: </h4>
    <p><?php echo ($email) ?></p>
    <h4>Type de Sandwich :</h4>
    <p>
        <?php echo ($type) ?>
    </p>
    <div>
        <h3>
            Les ingredients choisis sont :
        </h3>
        <p>
            <?php
            for ($i = 0; $i < count(($ingredients)); $i++) {
                echo ($ingredients[$i] . " ");
            }
            ?>
        </p>
    </div>
</body>

</html>