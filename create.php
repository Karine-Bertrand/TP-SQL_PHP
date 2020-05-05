<?php include('partials/head.php') ?>


<div class="container mt-3">
    <div class="row">
        <div class="col">

            <h1>Ajouter un nouveau bien immobilier</h1>

            <form action="controleCreate.php" method="post" class="form">

                <div class="form-group">

                    <label for="titre">Titre</label>
                    <select name="titre" class="form-control" required>
                        <option value="appartement">appartement </option>
                        <option value="maison">maison </option>
                        <option value="immeuble">immeuble </option>
                        <option value="commerce">commerce </option>
                        <option value="garage"> garage</option>
                        <option value="terrain à bâtir"> terrain à bâtir</option>
                    </select>

                    <label for="adresse">adresse</label>
                    <input name="adresse" type="text" class="form-control" required>

                    <label for="cp">Code postal</label>
                    <input name="cp" type="text" class="form-control" required>

                    <label for="ville">Ville</label>
                    <input name="ville" type="text" class="form-control" required>

                    <label for="surface">Surface (en m2)</label>
                    <input name="surface" type="number" class="form-control" min=20 max=1000000 required>

                    <label for="prix">Prix (en €)</label>
                    <input name="prix" type="number" class="form-control" min=1 max=1000000000 required>

                    <label for="type">Type : </label></br>
                    <input name="type" type="radio" value="location" checked> location
                    <input name="type" type="radio" value="vente"> vente</br>

                    <label for="description">Description</label>
                    <textarea name="description" type="text" class="form-control" rows=6 cols=30></textarea>

                    <label for="image">selectionner une photo</label>
                    <input name="photo" type="file"></br>
                </div>

                <input class="btn btn-primary" type="submit" value="Créer">
                <a href="accueil.php" class="btn btn-secondary" type="submit">Annuler</a>


            </form>

        </div>
    </div>
</div>

<?php include('partials/footer.php') ?>

<?php include('partials/scripts.php') ?>