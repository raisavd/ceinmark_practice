<!DOCTYPE html><html>
<head>
<meta charset="utf-8">
</head>
<body>
    
    <?php   
    $conexion=mysqli_connect("localhost","root","", "estudiantes") or die("Error en la conexion");      
    $est=array();   
    $sql="select * from estudiantes";
    $res=mysqli_query($conexion,$sql);
    while($reg =mysqli_fetch_assoc($res)){
    //vamos a guardar cada registro como un array asociativo
    //mysqli_fetch_assoc($res) es lo mismo que mysqli_fetch_array($res,MYSQLI_ASSOC) 
  
        $est[]=$reg;    
    }

    for($i=0; $i<sizeof($est);$i++){

        $id=$est[$i]['id'];
        $nom=$est[$i]['nombre'];
        $telefono=$est[$i]['telefono'];

        echo <<<visualizacion
        Identificación: <input type='text' value='$id'/>
        <br />
        Nombre Completo: <input type='text' value='$nom'/>
        <br />
        Teléfono: <input type='text' value='$telefono'/>
        <br />
        <hr />
        visualizacion;
    }
    
    ?>
</body>
</html>