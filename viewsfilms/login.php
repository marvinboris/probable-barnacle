<?php
include '../donnees/connexion.inc.php';

if (isset($_POST['codeUsager']) && isset($_POST['passe'])) {
    $codeUsager = htmlspecialchars($_POST['codeUsager']);
    $passe = htmlspecialchars($_POST['passe']);
    $rol = 'membre';

    $sql = 'SELECT * FROM `connexion` WHERE codeUsager=:codeUsager AND passe=:passe';
    $sth = $connexion->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute([
        'codeUsager' => $codeUsager,
        'passe' => $passe,
    ]);
    $utilisateur = $sth->fetch();

    if ($utilisateur['role'] === 'membre') $_SESSION['utilisateur'] = $utilisateur;
    else if ($utilisateur['role'] === 'admin') $_SESSION['admin'] = $utilisateur;
}

header('Location: index.php');
