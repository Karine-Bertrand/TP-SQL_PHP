<?php

$suite = true;
$msg = "";

// vérification des valeurs obligatoires : on renseigne le message à afficher pour chaque valeur non renseignée
if (empty($_POST['titre'])) {
    $msg = $msg . "Le titre n'est pas renseigné !" . "</br>";
    $suite = false;
}
if (empty($_POST['adresse'])) {
    $msg = $msg . "L'adresse n'est pas renseignée !" . "</br>";
    $suite = false;
}
if (empty($_POST['ville'])) {
    $msg = $msg . "La ville n'est pas renseignée !" . "</br>";
    $suite = false;
}
if (empty($_POST['cp'])) {
    $msg = $msg . "Le code postal n'est pas renseigné !" . "</br>";
    $suite = false;
}
if (empty($_POST['surface'])) {
    $msg = $msg . "La surface n'est pas renseignée !" . "</br>";
    $suite = false;
}
if (empty($_POST['prix'])) {
    $msg = $msg . "Le prix n'est pas renseigné !" . "</br>";
    $suite = false;
}
if (empty($_POST['type'])) {
    $msg = $msg . "Le type (location ou vente) n'est pas renseigné !" . "</br>";
    $suite = false;
}


if ($suite) { /* si toutes les valeurs obligatoires sont renseignées */

    /* on contrôle leur contenu */

    if (!empty($_POST['cp'])) {
        if (strlen($_POST['cp']) != 5) {
            $msg = $msg . "Le code postal doit comporter 5 caractères !" . "</br>";
            $suite = false;
        }
    }
    if (!empty($_POST['surface'])) {
        if ($_POST['surface'] >= 20 && $_POST['surface'] <= 1000000) {
            // $suite = true;
        } else {
            $msg = $msg . "La surface doit être comprise entre 20 et 1.000.000 m2 !" . "</br>";
            $suite = false;
        }
    }
    if (!empty($_POST['prix'])) {
        if ($_POST['prix'] >= 1 && $_POST['prix'] <= 1000000000) {
            // $suite = true;
        } else {
            $msg = $msg . "La surface doit être comprise entre 1 et 1.000.000.000 € !" . "</br>";
            $suite = false;
        }
    }

}
if ($suite) { /* les valeurs saisies correspondent aux critères attendus */

    $nouveauNomDuFichier="";
    if (!isset($_FILES['photo']) ) {
        $nouveauNomDuFichier=""; /* pas de photo */
    }else{
    $photo = $_FILES['photo'];
    $tailleDuFichier = $photo['size']; //
    $pathinfoData = pathinfo($photo['name']);
    $nomDuFichier = $pathinfoData['filename'];
    $extensionDuFichier = $pathinfoData['extension'];
    $nouveauNomDuFichier = 'logement_' . uniqid() . '.' . $extensionDuFichier;
    move_uploaded_file($photo['tmp_name'],  __DIR__  . '/assets/img/' . $nouveauNomDuFichier);
    }
    // si tout est OK, ajout dans la table
    require 'config/db.php';
    $request =  "INSERT INTO logement (titre, adresse, cp, ville, surface, prix, type, description, photo)
                VALUES (:titre, :adresse, :cp, :ville, :surface, :prix, :type, :description, :photo)";
    $response = $bdd->prepare($request);
    $response->execute([
        'titre'   =>  $_POST['titre'],
        'adresse'  =>  $_POST['adresse'],
        'cp'  =>  $_POST['cp'],
        'ville' =>  $_POST['ville'],
        'surface' =>  $_POST['surface'],
        'prix' =>  $_POST['prix'],
        'type' =>  $_POST['type'],
        'description' =>  $_POST['description'],
        'photo' => $nouveauNomDuFichier
    ]);


    header('Location: liste.php');  /* affiche de la liste */
}

?>

<?php include('partials/head.php') ?>

<section class="jumbotron text-center">
    <div class="container">
        <h3>Echec de création</h3>
        <p><strong><?= $msg ?></strong></p>
        <a href="create.php" class="btn btn-primary">Retour</a>
    </div>
</section>

<?php include('partials/scripts.php') ?>