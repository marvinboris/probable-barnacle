<?php
$utilisateur = $_SESSION['utilisateur'] ?? null;
$admin = $_SESSION['admin'] ?? null;
?>

<!-- Pour VSC https://edutechwiki.unige.ch/fr/Visual_studio_code#Cr.C3.A9er_un_squelette_de_document_HTML-->
<html lang="en">

<head>
    <title>Films steaming</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="content=initial-scale=1, width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimum-scale=0.5">
    <meta name="description" content="">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">
    <link rel="stylesheet" href="./bootstrap-4.5.0/assets/dist/css/bootstrap-reboot.min.css.map">
    <link rel="stylesheet" href="./bootstrap-4.5.0/assets/dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./bootstrap-4.5.0/assets/dist/css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="./bootstrap-4.5.0/assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap.css">

    <script src="./js/jquery-3.5.1.min.js"></script>
    <!-- <script src="./bootstrap-4.5.0/assets/dist/js/bootstrap.min.js"></script> -->

    <link rel="stylesheet" href="css/bootstrap-4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/films.css"> <!-- notre feuille de style-->
    <!-- <script src="css/bootstrap-4.5.0/js/bootstrap.bundle.min.js"></script> -->
</head>

<body>

    <header>

        <div class="navbar navbar-dark bg-dark shadow-sm">
            <!-- Nav bar items Align left-->
            <nav class="navbar navbar-expand-lg navbar-light d-flex bg-dark w-100">
                <a class="navbar-brand" href="index.html">Accueil</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse d-flex" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <?php
                            if (isset($admin)) {
                            ?>
                                <a class="nav-link" href="#">Tous les films <span class="sr-only">(current)</span></a>
                            <?php
                            } else {
                            ?>
                                <a class="nav-link" href="#">Top score <span class="sr-only">(current)</span></a>
                            <?php
                            }
                            ?>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Catégories
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/viewsfilms/films/action">Action</a>
                                <a class="dropdown-item" href="/viewsfilms/films/comedie">Comédie</a>
                                <a class="dropdown-item" href="/viewsfilms/films/drame">Drame</a>
                                <a class="dropdown-item" href="/viewsfilms/films/aventure">Aventure</a>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact/index.html">Contact</a>
                        </li>
                    </ul>
                </div>

                <?php
                if (!isset($utilisateur)) {
                ?>
                    <!--New nav bar items Align right-->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ml-auto">
                            <a class="nav-link" href="#register" data-toggle="modal" data-target="#register">S'inscrire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#login" data-toggle="modal" data-target="#login">Connecter</a>
                        </li>
                    </ul>
            </nav>

            <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="registerLabel">S'inscrire</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/register.php" method="post">
                                <div class="form-group">
                                    <label for="codeUsager" class="control-label">Code usager</label>
                                    <input type="email" name="codeUsager" id="codeUsager" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="passe" class="control-label">Mot de passe</label>
                                    <input type="password" name="passe" id="passe" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="registerLabel">S'inscrire</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/login.php" method="post">
                                <div class="form-group">
                                    <label for="codeUsager" class="control-label">Code usager</label>
                                    <input type="email" name="codeUsager" id="codeUsager" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="passe" class="control-label">Mot de passe</label>
                                    <input type="password" name="passe" id="passe" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php
                } else {
        ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ml-auto">
                    <span class="nav-link" href="#register" data-toggle="modal" data-target="#register"><?= $utilisateur['codeUsager'] ?></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/viewsfilms/deconnexion.php">Déconnexion</a>
                </li>
            </ul>
            </nav>
        <?php
                }
        ?>


        </div>
    </header>