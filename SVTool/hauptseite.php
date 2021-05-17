<html>
<head>
   <title>Hauptseite</title> 
    <meta charset="utf-8">
    
    </head>
    <body>
    <?php
        
        

        
        include('db.php');

    //--------Verbindung erstellen und DB �ffnen---------
    
    try {
    $dbPDO = new PDO('mysql:host='.$myDbServer.';dbname='.$myDbName, $myDbLogin, $myDbLoginPW);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
        
        
        
        if($_SESSION['login']==1){
            
           
            
            
            $name = abfrageSpezifisch($dbPDO,'benutzer','name','b_id',$_SESSION['user']);
            $rechte = abfrageSpezifisch($dbPDO,'benutzer','rechte','b_id',$_SESSION['user']);
            $svVerschieden = abfrageUnspezifisch($dbPDO,'treffen','t_id');
            echo"<p>Hallo $name</p>";
 
            
            if($rechte == "a"){
                echo"<p>    Hier können neue SVs erstellt werden:</p>";
                include("formularSV.html");
                
                echo"<p>Hier können Umfragen erstellt werden:</p>";
                include("formularUmfrage.html");
                
                echo"<p>Einen Benutzer registrieren:</p>";
                include('registrierung.html');

            }
            echo"<p>Umfrage Ergebnisse von allen SVs:";
            foreach($svVerschieden as $row){
                $zz=1;
                $umfrageVerschieden = abfrageSpezifischVieleWerte($dbPDO,'umfragen','ja,nein,vielleicht,fragetext','treffen',$row['t_id']);
                
                echo $zz."<p>.Schülerversammlung:</p>";
                foreach($umfrageVerschieden as $rowrow){
                    $z=1;
                    echo $z."<p>Umfrage: </p>".$rowrow['fragetext']."<ul><li>ja:".$rowrow['ja']."</li><li>nein".$rowrow['nein']."<li>vielleicht:".$rowrow['vielleicht']."</li></ul>";
                    $z=$z+1;
                }
                $zz=$zz+1;
                
            }
            
                        echo"<br><br><a href='ausloggen.php'>Ausloggen</a>";
        }
        
        
        
        else{
            echo"<a href='einloggen.html'>Du musst dich erst anmelden</a>";
        }
        
        ?>
    
    
    
    </body>
</html>