<?php
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$salarioEmpleado=$_POST['salario'];

echo 'Tu nombre es: '.$nombre.'<br>';
echo 'Tu salario es:'.($salarioEmpleado*15).'<br>';
if($edad>=18){
    echo 'Es mayor de edad y te puedo pagar'.'<br>';
}
else{
    echo 'Es menor de edad y trae s tu tutor'.'<br>';
}
echo '<a href="index.php">Regresar</a>';
?>