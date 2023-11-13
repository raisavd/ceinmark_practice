<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Desarrollo Web</title>
     </head>
     <body>
        <?php
            //var_dump($_POST);
            $nombre = $_POST['nombre'];

            if(!isset($_POST['modulos']) && strlen($nombre) == ''){

                echo '<form name="input" action="ejercicio12_2.php" method="post">';
                echo 'Nombre del alumno: ';
                echo "<input type=\"text\" name=\"nombre\"/>";
                echo '<label  style="color: red"> <-- Debe introducir un nombre!! </label>';
                echo '<br />';
                echo '<p>Módulos que cursa:</p>';
                echo '<input type="checkbox" name="modulos[]" value="DWES" /> Desarrollo web en entorno servidor  ';
                echo '<label  style="color: red"> <-- Debe escoger al menos uno!! </label>';
                echo '<br />';
                echo '<input type="checkbox" name="modulos[]" value="DWEC" /> Desarrollo web en entorno cliente';
                echo '<br />';
                echo '<br />';
                echo '<input type="submit" value="Enviar" />';
                echo '</form>';
                
            }else if(strlen($nombre) == ''){
                
                $modulos = $_POST['modulos'];

                echo '<form name="input" action="ejercicio12_2.php" method="post">';
                echo 'Nombre del alumno: ';
                echo '<input type="text" name="nombre" />';
                echo '<label  style="color: red"> <-- Debe introducir un nombre!! </label>';
                echo '<br />';
                echo '<p>Módulos que cursa:</p>';
                
                if(sizeof($modulos)==2){
                    echo "<input type=\"checkbox\" name=\"modulos[]\" value=\"DWES\" checked=\"checked\"/> Desarrollo web en entorno servidor";
                    echo '<br />';
                    echo "<input type=\"checkbox\" name=\"modulos[]\" value=\"DWEC\" checked=\"checked\"/> Desarrollo web en entorno cliente";
                }else if($modulos[0] == "DWES") {
                    echo "<input type=\"checkbox\" name=\"modulos[]\" value=\"DWES\" checked=\"checked\"/> Desarrollo web en entorno servidor";
                    echo '<br />';
                    echo "<input type=\"checkbox\" name=\"modulos[]\" value=\"DWEC\"/> Desarrollo web en entorno cliente";
                }else if($modulos[0] == "DWEC"){
                    echo "<input type=\"checkbox\" name=\"modulos[]\" value=\"DWES\"/> Desarrollo web en entorno servidor";
                    echo '<br />';
                    echo "<input type=\"checkbox\" name=\"modulos[]\" value=\"DWEC\" checked=\"checked\"/> Desarrollo web en entorno cliente";
                }

                echo '<br />';
                echo '<br />';
                echo '<input type="submit" value="Enviar" />';
                echo '</form>';
            
            }else if(!isset($_POST['modulos'])){

                echo '<form name="input" action="ejercicio12_2.php" method="post">';
                echo 'Nombre del alumno: ';
                echo "<input type=\"text\" name=\"nombre\" value=\"$nombre\"/>";
                echo '<br />';
                echo '<p>Módulos que cursa:</p>';
                echo '<input type="checkbox" name="modulos[]" value="DWES" /> Desarrollo web en entorno servidor  ';
                echo '<label  style="color: red"> <-- Debe escoger al menos uno!! </label>';
                echo '<br />';
                echo '<input type="checkbox" name="modulos[]" value="DWEC" /> Desarrollo web en entorno cliente';
                echo '<br />';
                echo '<br />';
                echo '<input type="submit" value="Enviar" />';
                echo '</form>';
                
            }else{

                $nombre = $_POST['nombre'];
                $modulos = $_POST['modulos'];

                print "Nombre: ".$nombre."<br />";

                //var_dump($_POST);
                
                if(sizeof($modulos)==2){
                    print "Modulo: ".$modulos[0]."<br />";
                    print "Modulo: ".$modulos[1]."<br />";
                }else{
                    print "Modulo: ".$modulos[0]."<br />";
                }
            }
        ?>
     </body>
</html>
