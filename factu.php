<?php
$cliente = $_POST['cliente'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad_prod'];
$precio = $_POST['precio_u'];
$subtotal = $cantidad * $precio;
$total = $subtotal;

echo "Cliente: " . $cliente;
echo "<br>";
echo "Producto: " . $producto;
echo "<br>";
echo "Subtotal: " . $subtotal;
echo "<br>";
echo "Total a pagar: " . $total;
?>