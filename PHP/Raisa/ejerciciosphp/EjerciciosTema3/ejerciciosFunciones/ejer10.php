<!DOCTYPE html>
<html >
<head>
<meta  charset=utf-8 />
<title>Ejercicio 10</title>
</head>
<body>
<?php

echo "<table border = 1>";
for($n1=1; $n1<=4;$n1++){
    echo "<tr>";
    for($n2=1; $n2<=4;$n2++){

        echo "<td>".potencia($n1,$n2)." </td>";

    }

    echo"<tr>";
}
echo "</table>";

function potencia($n1,$n2){

    $resultado = $n1**$n2;

    return $resultado." ";
}

?>
</body>
</html>