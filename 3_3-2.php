<?php
if(isset($_POST['num'])){                                                       
$num = $_POST['num'];
echo "<table>";
for ($i = 0; $i <= 10; $i++) {
    $resultado = $num * $i;
    echo "<tr><td>$num x $i = </td><td>$resultado</td></tr>";
}
echo "</table>";
} 
?>

