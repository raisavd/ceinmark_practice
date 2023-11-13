<?php

$arrayMayus=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
$arrayMinus=["a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z"];
$arrayNum=[0,1,2,3,4,5,6,7,8,9];
$arrayEspeciales=["?","!","¿","¡","_","-","*","/","%","$","."];

if(!$_POST){
    echo "<h4>Generador de contraseñas</h4>";
    echo "Selecciona los caracteres que quieres utilizar";
    echo '<form action="" method="post">';

    echo '<input type="checkbox" name="checkbox[$arrayMayus]">A-Z</input>';
    echo "<br/>";
    echo '<input type="checkbox" name="checkbox[$arrayMinus]">a-z</input>';
    echo "<br/>";
    echo '<input type="checkbox" name="checkbox[$arraynum]">0-9</input>';
    echo "<br/>";
    echo '<input type="checkbox" name="checkbox[$arrayEspeciales]">?!*-_.%%/</input>';
    echo "<br/>";

    echo "Num. de caracteres:";
    echo '<input type="text" name="numCant"/> ';
    echo "<br/>";
    echo '<input type="submit" name="generar" value="Generar"/>';
    echo "</form>";

}else{

    var_dump($_POST);
    function formulario(){

        echo "<h4>Generador de contraseñas</h4>";
        echo "<br/>";
        echo "Selecciona los caracteres que quieres utilizar";
        echo '<form action="" method="post">';
        
        if(isset($_REQUEST['checkbox[]'])){
            
            echo '<input type="checkbox" name="checkbox[$arrayMayus]">A-Z</input>';
            echo '<label style="color:red"><-- No puede quedar vacio</label>' ;
            echo "<br/>";            
            echo '<input type="checkbox" name="checkbox[$arrayMinus]">a-z</input>';
            echo "<br/>";
            echo '<input type="checkbox" name="checkbox[$arrayNum]">0-9</input>';
            echo "<br/>";
            echo '<input type="checkbox" name="checkbox[$arrayEspeciales]">?!*-_.%%/</input>';
            echo "<br/>";

            echo "Num. de caracteres:";
            echo '<input type="text" name="numCant"/>'; 
            echo "<br/>";        

        }else if(strlen($_POST['numCant'])==0){
            //checked = "checked"
            echo '<input type="checkbox" name="checkbox[$arrayMayus]">A-Z</input>';
            echo "<br/>";
            echo '<input type="checkbox" name="checkbox[$arrayMinus]">a-z</input>';
            echo "<br/>";
            echo '<input type="checkbox" name="checkbox[$arraynum]">0-9</input>';
            echo "<br/>";
            echo '<input type="checkbox" name="checkbox[$arrayEspeciales]">?!*-_.%%/</input>';
            echo "<br/>";

            echo "Num. de caracteres:";
            echo '<input type="text" name="numCant"/>';  
            echo '<label style="color:red"><-- No puede quedar vacio</label>' ;
            echo "<br/>";

        }else if(strlen($_POST['numCant'])==0 && isset($_REQUEST['checkbox[]'])){

            echo '<input type="checkbox" name="checkbox[$arrayMayus]">A-Z</input>';
            echo '<label style="color:red"><-- No puede quedar vacio</label>' ;
            echo "<br/>";            
            echo '<input type="checkbox" name="checkbox[$arrayMinus]">a-z</input>';
            echo "<br/>";
            echo '<input type="checkbox" name="checkbox[$arraynum]">0-9</input>';
            echo "<br/>";
            echo '<input type="checkbox" name="checkbox[$arrayEspeciales]">?!*-_.%%/</input>';
            echo "<br/>";

            echo "Num. de caracteres:";
            echo '<input type="text" name="numCant"/>';  
            echo '<label style="color:red"><-- No puede quedar vacio</label>' ;
            echo "<br/>";    

        }
        
        echo '<input type="submit" name="generar" value="Generar"/>';

    }

    function general(){

        $contrasena="";
        
        $nCant = $_POST['numCant'];
        $nCheck = sizeof($_POST['checkbox[]']);

        $cociente = $nCant/$nCheck;
        $resto = $nCant%$nCheck;
        $total = $cociente+$resto;

        str_shuffle($arrayMayus);
        str_shuffle($arrayMinus);
        str_shuffle($arrayNum);
        str_shuffle($arrayEspeciales);
        //substr(,);
        

    }
    

formulario();
}



?>