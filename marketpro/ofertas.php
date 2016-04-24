<?php include './inc/funciones.php'; ?>
<?php 
    $tituloPagina = "Ofertas Destacadas";
    $pagina ="ofertas";
    include './inc/header.php';
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenidos a Marketpro</h1>
        <p>Tu tienda de confianza donde conseguir descuentos</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Ver más &raquo;</a></p>
      </div>
    </div>
    <!-- Destacados -->
    <div class="container">        
        <div class="row">
            <?php 
                foreach ($ofertas as $oferta_id => $oferta){    
                    echo portada($oferta_id , $oferta);
                }
            ?>
        </div>
        <hr>        
    </div> <!-- /Destacados -->   

<?php include './inc/footer.php'; ?>
