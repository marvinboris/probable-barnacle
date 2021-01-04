<?php
include '../../donnees/connexion.inc.php';
include '../../includes/header.php';
?>

<input type="number" id="idf"></br></br> <!-- input dans lequel je saisis le numF à ajouter au panier -->
<button onClick="ajoutPanier()">Ajouter au panier</button></br>
<button onClick="afficherPanier()">Afficher le panier</button>
</body>
<span id="votrePanier"></span>

<div class="container">
    <div class="row">
        <?php
        $sql = 'SELECT * FROM films WHERE categorie="drame"';
        $sth = $connexion->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $films = $sth->fetchAll();

        foreach ($films as $film) {
        ?>
            <div class="col-md-6 col-lg-4 col-xl-3 pb-3">
                <div class="card">
                    <div class="card-img-top" data-toggle="modal" data-target="<?= "#film" . $film['idf'] ?>">
                        <img src="<?= '/images/pochettes/' . $film['categorie'] . '/' . $film['pochette'] ?>" alt="<?= $film['titre'] ?>" class="img-fluid">
                    </div>

                    <div class="card-body">
                        <p>
                            <strong><?= $film['titre'] ?></strong>
                        </p>
                        <p><?= $film['realisateur'] ?></p>
                        <p><?= $film['categorie'] ?></p>
                        <p><em>$ <?= $film['prix'] ?></em></p>

                        <div><button class="btn btn-success btn-sm">Ajouter</button></div>
                    </div>
                </div>

                <div class="modal fade" id="<?= "film" . $film['idf'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe width="100%" height="auto" src="<?= $film['preview'] ?>">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<script src="css/bootstrap-4.5.0/js/bootstrap.min.js"></script>
<script src="js/films.js"></script>
</body>

</html>
<!-- en reloadant la page, le panier se vide. Pour l'éviter, utiliser session storage au lieu de localStorage -->