<html>
<head>
    <title>Bestätigung</title>
    <meta charset="utf-8">
    </head>
<body>
    
    
            <?php
/*SESSION_START();
    
     $myDbServer=$_SESSION['server'];//standard ip für localhost
    $myDbName=$_SESSION['DBname'];
    $myDbLogin=$_SESSION['Login']; //root
    $myDbLoginPW=$_SESSION['LoginPW'];*/
    
    include('db.php');

    //--------Verbindung erstellen und DB �ffnen---------
    
    try {
    $dbPDO = new PDO('mysql:host='.$myDbServer.';dbname='.$myDbName, $myDbLogin, $myDbLoginPW);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

    $ergRequest=0;
   
 
    $name=$_POST['name'];
    $pw=$_POST['pw'];
    $rechte=$_POST['rechte'];
    
    
    $einsortierenBe=$dbPDO->prepare("INSERT INTO benutzer(name,rechte) VALUES(?,?)");
    $einsortierenBe->execute(array($name,$rechte));
    $einsortierenPW=$dbPDO->prepare("INSERT INTO pw(b_id,pwd) VALUES(?,?)");
        $ergRequest="SELECT MAX(b_id) FROM benutzer";
    foreach($dbPDO->query($ergRequest) as $row){
        $einsortierenPW->execute(array($row['MAX(b_id)'],$pw));
    }
   
      
    
    echo"<p>Registrierung ist erfolgt</p>";
      echo "<p>Deine Kundennummer ist: ";
foreach($dbPDO->query($ergRequest) as $row){
    echo $row['MAX(b_id)'];
}
    echo "<br>Du brauchst sie zur Anmeldung</p>";
    echo "<br>
    <nav>
    <ul>
    <li><a href='startseite.html'>Startseite</a></li>
    <li><a href='einloggen.html'>LogIn</a></li>
    </ul>
    </nav>";
    
    ?>
    </body>
</html>