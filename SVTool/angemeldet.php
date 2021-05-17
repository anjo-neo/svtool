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
   /*    SESSION_START();
        
$myDbServer=$_SESSION['server'];//standard ip für localhost
    $myDbName=$_SESSION['DBname'];
    $myDbLogin=$_SESSION['Login']; //root
    $myDbLoginPW=$_SESSION['LoginPW'];*/
        include('db.php');
        




    
    try {
    $dbPDO = new PDO('mysql:host='.$myDbServer.';dbname='.$myDbName, $myDbLogin, $myDbLoginPW);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

    $passwort = abfrageSpezifisch($dbPDO,"pw","pwd",'b_id',$id);
    

 
        if($_POST['pw']==$passwort){   
          echo "<p>angemeldet</p><br>
          <br><a href='hauptseite.php'>hier geht es zur Hauptseite</a>";
            
            $_SESSION['login'] = 1;
            $_SESSION['user'] = $id;

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