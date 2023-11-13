<?php
session_start();

if(!$_SESSION){

    echo '<form action="ejerNombreEdad2.php" method="POST">
        Nombre: <input type="text" name="nombre" size="10"/>
        <br/>
        Edad (3-18): <input type="text" name="edad" size="5"/>
        <br/>
        <input type="submit" value="Enviar" />
    </form>';

}else{
    
//var_dump($_SESSION);

    echo '<form action="ejerNombreEdad2.php" method="POST">';

    if(isset($_SESSION['avisoN'])){
        echo "Nombre: <input type=\"text\" name=\"nombre\" size=\"10\"/>";
        echo "<label  style=\"color: red\">".$_SESSION['avisoN']."</label>";
        echo "<br/>";
    }else{
        echo "Nombre: <input type=\"text\" name=\"nombre\" size=\"10\" value=\"$_SESSION[nom]\"/>";
        echo "<br/>";
    }

    if(isset($_SESSION['avisoE'])){

        if(isset($_SESSION['edad'])){
            echo "Edad (3-18): <input type=\"text\" name=\"edad\" size=\"5\" value=\"$_SESSION[edad]\"/>";
            echo "<label  style=\"color: red\">".$_SESSION['avisoE']."</label>";
            echo "<br/>";
        }else{
            echo "Edad (3-18): <input type=\"text\" name=\"edad\" size=\"5\"/>";
            echo "<label  style=\"color: red\">".$_SESSION['avisoE']."</label>";
            echo "<br/>";
        }
        
    }else{
        echo " Edad (3-18): <input type=\"text\" name=\"edad\" size=\"5\" value=\"$_SESSION[edad]\"/>";
        echo "<br/>";
    }

    echo '<input type="submit" value="Enviar" />
    </form>';

    session_destroy();
}

?>

