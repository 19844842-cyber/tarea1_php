<?php
$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];

if ($num1 < $num2) {
    $nummenor = $num1;
} else {
    $nummenor = $num2;
}

echo "El número menor es: " . $nummenor;
?>