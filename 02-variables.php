<?php include 'includes/header.php';


$nombre = "Juan";


$nombre = "Juan 2";

echo $nombre;
var_dump($nombre);


//Definición de constante, propiamente no se define una variable, sino por el contrario un identificador con ese nombre y valor.
define('constante', "Este es el valor de la constante");
echo constante;



//Definición de constante(Sintaxis menos común)
const constante2 = "Hola 2";
echo constante2;

$nombreCliente = "Pedro";
$nombre_cliente = "Pedro";

include 'includes/footer.php';