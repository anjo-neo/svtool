<html>
<head>

    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <?php
    SESSION_START();
    
    $myDbServer="127.0.0.1";//standard ip für localhost
    $myDbName="umfrage";
    $myDbLogin="root"; //root
    $myDbLoginPW="";
    
    //Gibt einen spezifischen Wert für einen Benutzer wieder
     function abfrageSpezifisch ($DB,$tabelle,$gebrauchteSpalte,$verwendetID,$gebrauchtID){
                $wertAusgeben=$DB->query("SELECT $gebrauchteSpalte FROM $tabelle WHERE $verwendetID=$gebrauchtID");
               
               foreach($wertAusgeben as $row){
            $ausgabe=$row[$gebrauchteSpalte];
                   }
               return ($ausgabe);
               }
    
    //enthält die ganze Datenbankabfrage, die dann verarbeitet wird
    function abfrageUnspezifisch($DB,$tabelle,$gebrauchteSpalte){
        $wertAusgeben = $DB->query("SELECT $gebrauchteSpalte FROM $tabelle");
        return ($wertAusgeben);
    }
    
   function abfrageSpezifischVieleWerte($DB,$tabelle,$gebrauchteSpalte,$verwendetID,$gebrauchtID){
       $wertAusgeben = $DB->query("SELECT $gebrauchteSpalte FROM $tabelle WHERE $verwendetID=$gebrauchtID");
       return($wertAusgeben);
   }
    
    

    
    ?>

    
    
    </body>
    
</html>