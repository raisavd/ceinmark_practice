<?php	
//unset($_SERVER);
header('Content-Type: text/html; charset=UTF-8');

if (!isset($_SERVER['PHP_AUTH_USER'])) {	
header('WWW-Authenticate: Basic Realm="Contenido restringido"');
header('HTTP/1.0 401 Unauthorized');
echo "Usuario no reconocido!";
exit;
}
	
else { 
    if ($_SERVER['PHP_AUTH_USER']=="dwes"&&$_SERVER['PHP_AUTH_PW']==123){
        echo "Entrando...";
    }
} 

 ?>
