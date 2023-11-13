<?php

session_start();
@$conexion = new mysqli('localhost', 'root', '', 'dwes');
$fam = array();
$sql = "select * from familia where cod = 'CAMARA'";
$stock = mysqli_query($conexion,$sql);

while($filas = mysqli_fetch_assoc($stock)){         
    $fam[]=$f1=$filas;
}

$sql1 = "select * from familia where cod = 'CONSOL'";
$stock = mysqli_query($conexion,$sql1);

while($filas = mysqli_fetch_assoc($stock)){         
    $fam[]=$f2=$filas;
}

$sql2 = "select * from familia where cod = 'MULTIF'";
$stock = mysqli_query($conexion,$sql2);

while($filas = mysqli_fetch_assoc($stock)){         
    $fam[]=$f3=$filas;
}
$sql3 = "select * from familia where cod = 'IMPRES'";
$stock = mysqli_query($conexion,$sql3);

while($filas = mysqli_fetch_assoc($stock)){         
    $fam[]=$f14=$filas;
}

$imagenes = ["imagen1.png","imagen2.jpg","imagen3.jpg","imagen4.jpg"];

if(!$_GET){

    echo "FAMILIAS DE PRODUCTOS";

    echo '<form action="" method="GET">';
    for($var1 = 0; $var1 < sizeof($imagenes); $var1++){
        echo "<img src=\"$imagenes[$var1]\" height='100' width='100' align='middle'/>";
        $f = $fam[$var1]['cod'];
        echo "<a href=\"examenVista.php?enlace=$f\">".$fam[$var1]['nombre'].'</a> <br/>';   
    }
    echo "</from>";

}else{

    //var_dump($_GET);
    $_SESSION["familia"] = $_GET["enlace"];

    if(!$_POST){
        echo '<form action="" method="post">';
        echo '<input type="submit" name="nuevo" value="NUEVO PRODUCTO"><br/>';
        echo '<input type="submit" name="baja" value="BAJA PRODUCTO"><br/>';
        echo '<input type="submit" name="modificar" value="MODIFICACION PRECIO">';
        echo "</form>";  
    }else{

        if($_POST["nuevo"]){
            header("Location: examenVistaAlta.php");
        }else if($_POST["baja"]){
            header("Location: examenVistaBaja.php");
        }else if($_POST["modificar"]){
            header("Location: examenVistaModificar.php");
        }
    } 
}

$conexion->close();
?>