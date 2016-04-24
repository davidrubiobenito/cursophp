<?php

class coches {
    public $nombre;
    public $precio;  
    
    function __construct($nombre= 'Nombre del modelo', $precio = 0) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
    public function fichaCoche(){
        return "Modelo: ". $this->nombre . " , Precio: " .$this->precio;
    } 
}

class industrial extends coches{
    public $licencia;
    
    /*static permite acceder a una propiedad de una clase sin instanciarla*/
    static $terreno ='Agricola';
            
    function __construct($nombre= 'Nombre del modelo', $precio = 0, $licencia ='Tipo de licencia') {
        parent::__construct($nombre, $precio);
        $this->licencia =  $licencia;
    }   
    public function fichaCoche(){
        return  "Modelo: ". $this->nombre . 
                " , Precio: " .$this->precio .
                " , Licencia: " .$this->licencia;
    } 
    
}

$c= new coches();
$turismo1 = new coches('Seat Ibiza', 5870 );
$turismo2 = new coches('Ford Focus', 7790 );
$industrial1 = new industrial();
$industrial2 = new industrial('Fornd Tourneo', 7432, 'No requiere licencia');

echo $c->fichaCoche();
echo '<br/>';
echo $turismo1->fichaCoche();
echo '<br/>';
echo $turismo2->fichaCoche();
echo '<br/>';
echo $industrial1->fichaCoche();
echo '<br/>';
echo $industrial2->fichaCoche();
echo '<br/>';
/*acceso propiedad de una clase sin instanciarla*/
echo industrial::$terreno;
