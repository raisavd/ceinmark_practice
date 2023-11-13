<?php

    session_start();

    @$conexion = new mysqli('localhost', 'root', '', 'dwes');
    $prodF = $conexion->query("select * from producto where familia = '$_SESSION[familia]'");
        
    while($filas = mysqli_fetch_assoc($prodF)){         
        $productos[]=$filas;
    }

    if(!$_POST){
        echo "Modificar un producto de la familia ".$_SESSION["familia"];
        echo '<form method="POST" action="">';
        echo "Productos: ";
        echo ' <select name="productos"> ';

        foreach ($productos as $op){
                
            echo " <option value=".$op['cod'].">".$op['nombre_corto']."</option> "; 
                        
        }  
        
        echo '<input type="submit" value="Enviar">';
        echo "</form>"; 

    }else{
        //var_dump($_SESSION);
        //var_dump($_POST);
        $_SESSION["prod"] = $_POST['productos'];

        $resultado = $conexion->query("select PVP from producto where cod = '$_SESSION[prod]'");
    
        while($filas = mysqli_fetch_assoc($resultado)){         
            $precio=$filas;
        }

        echo '<form method="POST" action="examenVistaModificar2.php">';
        echo "El precio de ".$_SESSION['prod']." es $precio[PVP]";
        echo "<br/> <input type='number' name='pr'>";
        echo '<input type="submit" name="modificar" value="Enviar">';
        echo "</from>";
        
    }
?>