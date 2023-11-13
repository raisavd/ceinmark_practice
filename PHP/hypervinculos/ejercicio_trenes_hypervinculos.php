<?php
    $registrosContados = false; //nos lo ponemos a false para cuando ejecutemos el programa nos cuente solo una vez el $totalregistros

    if (isset($_GET['posicion'])) { //lo tenemos en la variable de enlace que es la posicion que guarda en inicio de datos

        $inicioDatos = $_GET['posicion'];
    }
    else{
        $inicioDatos = 0; //si no existe es que esta a 0
        }

    $conexion = mysqli_connect("localhost","root","JulenMusi123!", "trenes") or die ("Error en la conexion"); //conexio a la base de datos

    if ($registrosContados == false) { //lo ponemos a false para que solo lo haga una vez

        //hacer la consulta de cuantos registros hay en la tabla de recorridos
        $totalRegistros = mysqli_query($conexion,
                            "SELECT COUNT(*)
                             FROM recorridos
                            ") or die ("Problemas en el select");

        if($reg = mysqli_fetch_array($totalRegistros)){ //nos guarda el totalderegistrs que hay en la variable contadorregistros
            $contadorRegistros = $reg[0];
        }

    $registrosContados = true; //lo ponemos a true para cuando pinchemos el enlace no vuelva hacer otra select 
  }

    //hacemos selct normal que nos saca los registros de la tabla recorridos de 2 en 2 y utilizamos LIMIT para ponerle limite de 2
    $registros = mysqli_query($conexion,
                        "SELECT tren,estacion
                         FROM recorridos
                         LIMIT $inicioDatos,2 
                        ") or die ("Problemas en el select");

    while ($reg = mysqli_fetch_array($registros)){  //nos muestra los datos de tren y estacion

        echo "Tren: ".$reg['tren']."<br>";
        echo "ESTACION: ".$reg['estacion']."<br>";
        echo "<hr>";
    }

    //cada operacion se guarda en una variabble distinta que luego se va a poner en la misma variable del enlace.Estas se guardan en posicion "Es un bucle extraño"
    $anteriorRegistro = $inicioDatos-2;
    $siguienteRegistro = $inicioDatos+2;

    //cuando es 0 me sale anterior en negro para no pinchar
    if ($inicioDatos != 0){
        echo "<a href='?posicion=$anteriorRegistro'>Anterior</a>";
    }
    else{
        echo "Anterior";
    }

        //si el numero del siguiente registro es mayor que el numero total de registros no aparecerá el enlace de siguiente
    if ($siguienteRegistro < $contadorRegistros) {
        echo "<a href='?posicion=$siguienteRegistro'>Siguiente</a>";
    }
    else{
        echo "Siguiente";
    }

    //cerramos conexion de la base de datos
    mysqli_close($conexion);



?>






   