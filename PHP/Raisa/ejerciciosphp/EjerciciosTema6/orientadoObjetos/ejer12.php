<!DOCTYPE html>
<html>
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
        $leyendas[]=array("Identificacion","Nombre completo","Telefono");
        var_dump($est);

        foreach($est as $indice => $ident){
                echo <<<visualizacion
                $leyendas[0]: <input type='text' value='$ident'/>
                <br />
                $leyendas[1]: <input type='text' value='$ident'/>
                <br />
                $leyendas[2]: <input type='text' value='$ident'/>
                <br />
                <hr />
            visualizacion;
                       
        }
    ?>
</body>
</html>