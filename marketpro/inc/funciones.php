<?php

    function portada($oferta_id, $oferta)
    {
        $salida="";
        $salida=$salida . '<div class="col-lg-4">';
        $salida=$salida . '<h2>' . $oferta['nombre'] . '</h2>';
        $salida=$salida . '<img src="' . $oferta['imagen'] .'" alt="' . $oferta['nombre'] . 
            'class="img-rounded">';           
        $salida=$salida . '<p>' . $oferta['introDescripcion'] .'</p>';   
        $salida=$salida . '<p><a class="btn btn-danger" href="oferta/'. $oferta_id . '" >Antes ' 
            . $oferta['precio'] . '<strong> Ahora ' . $oferta['precioOferta'] 
            . '</strong></a></p>';   
        $salida=$salida . '</div>';         
        
        return $salida;
    }


    $ofertas = array();
    $ofertas[001] = array(
        'nombre' =>'SPA para 2',
        'introDescripcion' =>'Vive un meomento...',
        'descripcion' =>'No te puedes perder',
        'imagen' =>'../img/spa.jpg',
        'precio' =>79,
        'precioOferta' =>19,
    );
    $ofertas[002] = array(
        'nombre' =>'Especial Sushi',
        'introDescripcion' =>'El autentico sabor de Japón en Barcelona',
        'descripcion' =>'No te puedes perder',
        'imagen' =>'../img/sushi.jpg',
        'precio' =>389,
        'precioOferta' =>49,
    );
    $ofertas[003] = array(
        'nombre' =>'Carnes a la brasa',
        'introDescripcion' =>'Chuletón de ternera con patatas',
        'descripcion' =>'No te puedes perder',
        'imagen' =>'../img/carne.jpg',
        'precio' =>249,
        'precioOferta' =>59,
    );
    $ofertas[004] = array(
        'nombre' =>'Lavado de coche',
        'introDescripcion' =>'Nosotros lo hacemos por usted',
        'descripcion' =>'No te puedes perder',
        'imagen' =>'../img/car.jpg',
        'precio' =>19,
        'precioOferta' =>9,
    );
?>