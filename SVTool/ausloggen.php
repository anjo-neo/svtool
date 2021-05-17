<html>
<head>
    <title>
    ausgeloggt
    </title>
    
    </head>
    <body>
    <?php
        SESSION_START();
        $_SESSION['logged']=0;
                    echo"<a href='einloggen.html'>Du musst dich erst anmelden</a>";
        
        ?>
    
    
    
    </body>


</html>