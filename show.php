<?php

require 'config/db.php';
$request = "SELECT * FROM logement WHERE id=" . $_GET['id'];
$response = $bdd->query($request);
$logement = $response->fetch(PDO::FETCH_ASSOC);

?>

<?php include('partials/head.php') ?>

<?php include('partials/navbar.php') ?>

<main role="main">

    <div class="container mt-3">
        <div class="row">
            <h1>Présentation du bien sélectionné</h1>

            <h2> <?= $logement['titre'] ?> </h2>
            <p>Ce bien est en <?=$logement['type']?> et se trouve à <?= $logement['ville'] ?> </p>

            <img src="<?=$logement['photo']?>">

            <p><?=$logement['surface']?> m2 pour un prix de <?= $logement['prix']?>€</p> 

            <textarea><?=$logement['description']?></textarea>

        </div>

            <a href="liste.php" class="btn btn-secondary" type="submit">Retour à la liste</a>

        </div>
    </div>

</main>

<?php include('partials/script.php') ?>