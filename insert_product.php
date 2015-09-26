<?php
        include_once('db.php');
        
        // Übergabe der Variablen
        $produktname   = $_POST['produktname'];
        $zusatzstoff1  = $_POST['zusatzstoff1'];
        $zusatzstoff2  = $_POST['zusatzstoff2'];
        $zusatzstoff3  = $_POST['zusatzstoff3'];
        $zusatzstoff4  = $_POST['zusatzstoff4'];
        $zusatzstoff5  = $_POST['zusatzstoff5'];
        $zusatzstoff6  = $_POST['zusatzstoff6'];
        $zusatzstoff7  = $_POST['zusatzstoff7'];
        $zusatzstoff8  = $_POST['zusatzstoff8'];
        $zusatzstoff9  = $_POST['zusatzstoff9'];
        $zusatzstoff10 = $_POST['zusatzstoff10'];
        $allergen1 	   = $_POST['allergen1'];
        $allergen2 	   = $_POST['allergen2'];
        $allergen3 	   = $_POST['allergen3'];
        $allergen4 	   = $_POST['allergen4'];
        $allergen5 	   = $_POST['allergen5'];
        $allergen6 	   = $_POST['allergen6'];
        $allergen7 	   = $_POST['allergen7'];
        $allergen8 	   = $_POST['allergen8'];
        $allergen9 	   = $_POST['allergen9'];
        $allergen10    = $_POST['allergen10'];
        $allergen11    = $_POST['allergen11'];
        $allergen12    = $_POST['allergen12'];
        $allergen13    = $_POST['allergen13'];
        $allergen14    = $_POST['allergen14'];
        
        if(mysql_query("INSERT INTO produkt VALUES(NULL, '$produktname')"))
         echo "Erfolgreich hinzugefuegt!";
        else
         echo "Fehler beim Hinzufügen!";
?>