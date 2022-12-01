<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet', 
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24"', 
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo', 
        'precio' => 400,
        'disponible' => false
    ]
];

echo "<pre>";
var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE);//Obtiene String en formato .JSON es decir un arreglo de objetos.(Post)

$json_array = json_decode($json); //Obtiene arreglo asociativo a partir de String en formato .JSON(GET).

var_dump($json);
var_dump($json_array);
echo "</pre>";




include 'includes/footer.php';