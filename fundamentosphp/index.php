<?php
   $nombre = "David";
   $titulo = "Acceso Usuarios";
   
//   define("DOMINIO", "davidbelen.com");
//   echo DOMINIO;
   
//   $coches = array('seat', 'ford', 'fiat', 'volvo');
   
//   $coches[2]="Nuevo Fiat";
//   $coches[]="Nuevo Fiat";
//   print_r($coches);
//   echo "<hr>";
//   var_dump($coches);
   
?>


<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $titulo ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
        <header>
            <h1><?php echo $titulo ?></h1>
        </header>
        
        <div>
            <form name="input" action="acceso.php" method="get">
                Nombre:
                <input type="text" name="nombre" />
                <br>
                Password:
                <input type="password" name="pass" />
                <input type="submit" value="Enviar" />                
            </form>
        </div>        
    </body>   
        
    <footer>
        <div>By <?php echo $nombre; ?></div>
    </footer>  
    
       
</html>
