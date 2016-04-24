<?php require_once('./inc/conf.php'); ?>
<?php include(ROOT.'/inc/funciones.php'); ?>
<?php 
    $tituloPagina = "Inicio Marketpro";
    $pagina ="inicio";
    include include(ROOT.'/inc/header.php');
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenidos a Marketpro</h1>
        <p>Tu tienda de confianza donde conseguir descuentos</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Ver más &raquo;</a></p>
      </div>
    </div>
    <!-- Ofertas -->
    <div class="container">        
        <div class="row">
            <?php 
//                foreach ($ofertas as $oferta_id => $oferta){    
//                    echo portada($oferta_id , $oferta);
//                }
                $x=1;
                $ofertas;
                while ($x<=3 and list($oferta_id, $oferta) = each($ofertas) )
                {
                    echo portada($oferta_id, $oferta);
                    $x++;
                }
            ?>
        </div>
        <hr>        
    </div> <!-- /Ofertas -->   

<?php include(ROOT.'/inc/footer.php'); ?>
