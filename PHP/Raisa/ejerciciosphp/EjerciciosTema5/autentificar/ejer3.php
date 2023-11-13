<?php
//unset($_SERVER);
$conexion=mysqli_connect("localhost","root","", "dwesTema5") or die("Error en la conexion");

header('Content-Type: text/html; charset=UTF-8'); //<-- header para las ñ

if (!isset($_SERVER['PHP_AUTH_USER'])) {	
header('WWW-Authenticate: Basic Realm="Contenido restringido"');
header('HTTP/1.0 401 Unauthorized');
echo "Has pulsado CANCELAR";
exit;
}
	
else { 
 
    $usuario = $_SERVER['PHP_AUTH_USER'];
    $contr = $_SERVER['PHP_AUTH_PW'];

    $registros=mysqli_query($conexion,"select * from usuarios where usuario = '$usuario' and contrasena = md5('$contr')") or die("Problemas en el select:".mysqli_error());
    
    $existe = mysqli_num_rows($registros);
    
    if($existe != 0 ){
        echo "Usuario y contraseña CORRECTAS";
    }else{
       echo "Usuario o contraseña INCORRECTAS";
    }
} 

?>