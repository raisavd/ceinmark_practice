<?php

session_start();

recoge('nombre');

function recoge($var){    
    $tmp = is_null($_REQUEST[$var])?"": trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
    
    return $tmp;
}

$tmp = recoge('nombre');

if($tmp == ""){

    $_SESSION['avisoN'] = "El nombre no puede quedar vacio";  
    header("Location:ejerNombreEdad.php");

}

if(empty($_POST['edad'])){
    $_SESSION['nom'] = $tmp;
    $_SESSION['avisoE'] = 'La edad no puede quedar vacia';
    header("Location:ejerNombreEdad.php");
}else if(!is_numeric($_POST['edad'])){
    $_SESSION['nom'] = $tmp;
    $_SESSION['avisoE'] = 'La edad tiene que ser un numero';
    $_SESSION['edad'] = $_POST['edad'];
    header("Location:ejerNombreEdad.php");
}else if($_POST['edad']<3 || $_POST['edad']>18){
    $_SESSION['nom'] = $tmp;
    $_SESSION['avisoE'] = 'La edad tiene que ser entre 3 y 18 años';
    $_SESSION['edad'] = $_POST['edad'];
    header("Location:ejerNombreEdad.php");
}else{
    echo "Nombre: ".$tmp;
    echo "<br/>";
    echo "Edad: ".$_POST['edad'];
}

?>