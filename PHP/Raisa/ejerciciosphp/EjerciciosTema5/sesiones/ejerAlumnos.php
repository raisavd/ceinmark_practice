<?php
session_start();


if(!$_POST){

    echo<<<formulario
        <form method="POST" action="ejerAlumnos.php">
        
        Introduce el email del alumno <input type="text" name="correo">
        <input type="submit" name="boton" value="Enviar">

        </form>
    formulario;

}else{
    
    $conexion=mysqli_connect("localhost","root","", "alumnos") or die("Error en la conexion");

    $registros=mysqli_query($conexion,"select nombre from alumno where email = '$_POST[correo]'") or die("Problemas en el select:".mysqli_error());

    while ($reg=mysqli_fetch_array($registros)){
        
        $aNombre = $reg['nombre'];
    }  

    $existe = mysqli_num_rows($registros);

    if($existe != 0){
        
        $_SESSION['nomAlumno'] = $aNombre; 
    }

    echo "<a href=\"ejerAlumnos2.php\">Acceder</a>";
}





?>