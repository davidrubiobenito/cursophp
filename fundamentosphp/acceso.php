<?php
//Base de datos
$usuario = "David";
$password = "1234";
?>

<?php

$nombre = $_GET['nombre'];
$pass = $_GET['pass'];

//echo '<pre>';
//var_dump($_GET);
//echo '</pre>';

if ($nombre != $usuario){
    echo 'El nombre introducido no es correcto';
}
elseif ($pass != $password) {
    echo 'El password no es correcto';
}
else{
    echo 'Bienvendo a bordo';
}


?>


