<?php

require 'config/db.php';
$request = "SELECT * FROM logement";
$response = $bdd->query($request);
$biens = $response->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include('partials/head.php') ?>

<?php include('partials/navbar.php') ?>

<main role="main">

    <div class="album py-5 bg-light">

        <div class="container">

            <div class="row">

                <?php foreach ($biens as $logement) : ?>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <div class="card-title">
                                    <h5 class="text-center"><?= $logement['titre'] ?></h5>
                                    <p> <?= $logement['ville'] ?></p>
                                </div>
                                <img src="assets/img/<?= $logement['photo'] ?>" alt="..." class="card-img-bottom">
                                <p class="card-text">
                                    <?= $logement['surface'] ?> € au prix de <?= $logement['prix'] ?> m2
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="show.php?id=<?= $logement['id'] ?>" class="btn btn-primary my-2">Voir</a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>

            </div>

        </div>

    </div>

</main>

<?php include('partials/footer.php') ?>

<?php include('partials/scripts.php') ?>