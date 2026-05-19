<?php
$limite = $_POST['n'];
$suma = 0;

for ($i = 1; $i <= $limite; $i++) {
    $suma = $suma + $i;
}
echo "La suma de los numeros desde 1 hasta " . $limite . " es: " . $suma;
?>