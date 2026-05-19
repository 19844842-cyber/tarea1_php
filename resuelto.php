<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$promedio = ($nota1 + $nota2 + $nota3) / 3;

echo "el promedio es:" . $promedio;

if ($promedio >=6) { 
    echo "resutado: aprobado";
} else {
    echo "resultado:reprobado";
}
?>