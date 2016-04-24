<?php

$array = array('tutor 1', 'tutor 2', 'tutor 3');

foreach ($array as $valor) 
{
    echo "<b>Persona: </b> $valor <br /> \n";
}

$array2 = array('Pixelpro' => 'Paseo 1', 'Pixelpro2' => 'Calle 2', 'Pagina web' => 'Travesia 3');

foreach ($array2 as $clave => $valor) {
    echo "<b>$clave </b> $valor <br /> \n";
}

?>