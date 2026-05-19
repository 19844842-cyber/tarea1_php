<?php
$nombre =$_POST['nombre'];
$horas =$_POST['horas'];
$pago =$_POST['pago'];

$salario = $horas *$pago;

echo "empleado:" . $nombre;
echho "el salario total es:" . $salario;
?>