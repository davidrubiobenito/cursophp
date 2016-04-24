<?php

$servidor = '192.168.1.50';
$nombrebbdd = 'marketpro';
$username = 'davidrubio';
$passwd = '1234567';

try
{
    $basededatos = new PDO(
        'mysql:host=' .$servidor .';dbname='.$nombrebbdd, $username, $passwd);
//    var_dump($basededatos);
    $basededatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $basededatos->exec("SET NAMES 'UTF8'");
}  
catch (Exception $e)
{
    echo 'Conexión no disponible';
    exit;
}
//echo 'Conexión realizada';

try {
    $resultado = $basededatos->query(
            "SELECT nombre, precio, img FROM ofertas ORDER BY sku ASC LIMIT 2");
} catch (Exception $ex) {
    echo 'No OK';
    exit;
}
/*
try {
    $resultado = $basededatos->query(
            "SELECT nombre, precio, img FROM ofertas WHERE sku=3");
} catch (Exception $ex) {
    echo 'No OK';
    exit;
}
 */
echo '<pre>';
var_dump($resultado->fetchAll(PDO::FETCH_ASSOC));
//var_dump($resultado->fetch(PDO::FETCH_ASSOC));