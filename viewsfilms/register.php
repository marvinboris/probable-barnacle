<?php
include '../donnees/connexion.inc.php';

if (isset($_POST['codeUsager']) && isset($_POST['passe'])) {
    $codeUsager = htmlspecialchars($_POST['codeUsager']);
    $passe = htmlspecialchars($_POST['passe']);
    $rol = 'membre';

    $sql = 'INSERT INTO `connexion`(`codeUsager`, `passe`, `role`) VALUES (:codeUsager,:passe,:rol)';
    $sth = $connexion->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute([
        'codeUsager' => $codeUsager,
        'passe' => $passe,
        'rol' => $rol,
    ]);
}

header('Location: index.php');
