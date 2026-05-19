<?php
$num = $_POST['n'];

echo "--- TABLA DEL " . $num . " ---";
echo "<br><br>";
for ($i = 1; $i <= 10; $i++) {
    echo $num . " x " . $i . " = " . ($num * $i);
    echo "<br>";
}
?>