<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
sec_session_start(); // Unsere selbstgemachte sichere Funktion um eine PHP-Sitzung zu starten.
 
if (isset($_POST['username'], $_POST['p'], $_POST['newp'])) {
    $username = $_POST['username']; // Der entsprechende Benutzername.
    $password = $_POST['p']; // Das aktuelle Passwort.
    //$newpassword = $_POST['newp']; // Das neue Passwort.
    if (changepw($username, $password, $mysqli) == true) {
        // Login erfolgreich 
        header('Location: ../index.php');
    } else {
        // Login fehlgeschlagen 
        header('Location: ../index.php?error=1');
    }
} else {
    // Die korrekten POST-Variablen wurden nicht zu dieser Seite geschickt. 
    echo 'Invalid Request';
}
?>