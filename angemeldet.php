<html lang=de>
    <head>
    <title>Startseite</title>
        <meta charset="utf-8">
        
    </head>
    <body>

       <?php 
        $id=$_POST['benutzer'];
        $pw=$_POST['pw'];
        $passwort=0;
        
        
     $myDbServer="127.0.0.1";//standard ip für localhost
    $myDbName="umfrage";
    $myDbLogin="root"; //root
    $myDbLoginPW="";

    
    try {
    $dbPDO = new PDO('mysql:host='.$myDbServer.';dbname='.$myDbName, $myDbLogin, $myDbLoginPW);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
        $anmeld=$dbPDO->query("SELECT pwd FROM pw WHERE b_id=$id");
    
    
   
    
    foreach($anmeld as $row){
        $passwort=$row['pwd'];
    }
    
 
        if($_POST['pw']==$passwort){   
          echo "<p>angemeldet</p><br>";


 }
    
    if($_POST['pw']!=$passwort){
        
        echo "<p> falsche Eingabe, versuche es erneut</p>";
        echo "<nav>
    <ul>
    <li><a href='startseite.html'>Startseite</a></li>
    <li><a href='einloggen.html'>LogIn</a></li>
    </ul>
    </nav>";
        
    }

  //-------------schliessen DB Verbindung---------------
  $dbPDO=NULL;

        
        
        
    ?>
    
    </body>
</html>

