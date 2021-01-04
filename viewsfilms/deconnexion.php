<?php
$_SESSION['utilisateur'] = null;

session_destroy();
header('Location: index.php');
