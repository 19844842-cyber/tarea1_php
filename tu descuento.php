<?php
$compra =$_POST['compra'];

if($compra > 100) {
    $descuento = $compra * 0.20;
    $total = $compra - $descuento;

}else{
    echo "no tiene descuento";
    echo "total a pagar:" . compra;

}
?>