<?php

$nombre = 'David';
$moneda = ' €';
$titulos = array(   
                    'iBeneficio' => 'iBeneficio', 
                    'Entradas' => 'Entradas', 
                    'Gastos' => 'Gastos', 
                    'TotalFac' => 'Total Facturas',
                    'TotalGas' => 'Total Gastos',
                    'TotalBen' => 'Total Beneficio'
);

$entradas = array(  'Enero' => '1000', 
                    'Febrero' => '200', 
                    'Marzo' => '345' ,
                    'Abril' => '1260' ,
                    'Mayo' => '4000'
);

$gastos = array(    'Enero' => '300', 
                    'Febrero' => '300', 
                    'Marzo' => '345' ,
                    'Abril' => '60' ,
                    'Mayo' => '70'
);

?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $titulos['iBeneficio'] ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
        <header>
            <h1 style="color: red; text-align:center ">
                <?php echo  $titulos['iBeneficio'] ?>
            </h1>
        </header>        
        <div>
            <h2 style="color: gray; font-weight: bold;">
                <?php echo  $titulos['Entradas'] ?>
            </h2>            
            <ul style="padding-left: 0px;">
            <?php
                foreach ($entradas as $key => $value) {
                    echo "<li style='color: gray; list-style:none;'><b>$key : </b> $value $moneda</li>\n";
                }
            ?>  
            </ul>
        </div>        
        <div>
            <h2 style="color: gray; font-weight: bold">
                <?php echo  $titulos['Gastos'] ?>
            </h2>
            <ul style="padding-left: 0px;">
            <?php
                foreach ($gastos as $key => $value) {
                    echo "<li style='color: gray; list-style:none;'><b>$key : </b> $value $moneda</li>\n";
                }
            ?>  
            </ul>  
        </div>        
        <div>            
            <ul style="padding-left: 0px;">
            <?php
                $valentr=0;
                foreach ($entradas as $value) {
                    $valentr = $valentr + $value;
                }
                
                $valgast=0;
                foreach ($gastos as $value) {
                    $valgast = $valgast + $value;
                }
                
                $valbene = $valentr - $valgast;
                if($valbene <=0){
                    $color = 'red';
                }
                else{
                    $color = 'green';
                }
                
                echo "<li style='color: gray; list-style:none;'><b>"
                    .$titulos['TotalFac']." : </b> $valentr $moneda</li>\n";
                
                echo "<li style='color: gray; list-style:none;'><b>"
                    .$titulos['TotalGas']." : </b> $valgast $moneda</li>\n";
                
                echo "<li style='color: gray; list-style:none;'><b>"
                    .$titulos['TotalBen']." : </b> <span style='color: $color'>$valgast $moneda</span></li>\n";
            ?>                  
            </ul>  
        </div>        
    </body>   
        
    <footer>
        <div style='color: gray;'>By <?php echo $nombre; ?></div>
    </footer>  
    
       
</html>



