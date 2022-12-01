<?php include 'includes/header.php';


$numero1 = 30;
echo ++$numero1; //Se pone el ++ antes para que efectue primero el incremento y despues imprima el valor, ya que de lo contrario lo haría al revés

$numero1 += 5;
echo $numero1;

$numero2 = 30; 
echo --$numero2;


include 'includes/footer.php';