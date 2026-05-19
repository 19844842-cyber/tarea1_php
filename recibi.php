<?php
$palabra_del_usuario = $_POST['palabra'];
$total_letras = strlen($palabra_del_usuario);

echo "Escribiste la palabra: " . $palabra_del_usuario;
echo "<br>"; 
echo "Esa palabra tiene " . $total_letras . " letras.";

?>