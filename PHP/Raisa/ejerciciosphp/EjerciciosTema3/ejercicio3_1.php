<!DOCTYPE html >
<html >
<head>
<meta  charset=utf-8 />
<title>Formulario 3.1</title>
</head>
<body>

<?php

if(!$_POST){	

    echo<<<formulario

    <form method="POST" action="">     
        Teclea un numero: 
        <input type="text" name="numero"> 
        <br /> 
        <input type="submit" name="multiplicar" value="Multiplicar"> 
    </form>

formulario;

}else if(!isset($_POST['comprobar'])){    

        $n = $_POST['numero'];
        var_dump($_POST);

        $var2=1;
        
        echo '<form action="" method="post">';

        for($var2;$var2<=10;$var2++){
            
            echo "$n x $var2 = <input type='text' name='$var2'>";
            echo "<br>";
            echo "<br>";
        }
        
        echo '<input type="submit" name="comprobar" value="Comprobar">';
        echo '<input type="hidden" name="oculto" value="'.$n.'"/>';
        echo '</form>';

    }else{ 

        for($var2=1;$var2<=10;$var2++){
            
            $resultado = $_POST['oculto']*$var2;

            if($resultado ==  $_POST["$var2"]){           
                echo $_POST['oculto']." x ".$var2 ." = ". $resultado . " Correcto";                  
	            echo "<br>";
            }
            else{
                echo $_POST['oculto']." x ".$var2 ." = ". $_POST["$var2"] . " Incorrecto";  
	            echo "<br>";
            }

        }
    }
?>

</body>
</html>