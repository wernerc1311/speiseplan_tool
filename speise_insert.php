<?php
        include_once('db.php');
        $speise_name = $_POST['speise_name'];
        $speise_kategorie = $_POST['speise_kategorie'];
        $speise_beschreibung = $_POST['speise_beschreibung'];
        if(mysql_query("INSERT INTO speise VALUES(NULL, '$speise_name', '$speise_kategorie', '$speise_beschreibung')"))
         echo "Erfolgreich hinzugefügt!";
        else
         echo "Fehler beim Hinzufügen!";
?>