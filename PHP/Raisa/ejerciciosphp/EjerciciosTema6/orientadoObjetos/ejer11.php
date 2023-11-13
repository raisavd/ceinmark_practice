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

        var_dump($est);

        foreach($est as $indice => $ident){
            foreach($ident as $persona){
                $p[]=$persona;
            }            
        }

        var_dump($p);
        foreach($p as $i){
                echo <<<visualizacion
                Identificación: <input type='text' value='$i'/>
                <br />
                Nombre Completo: <input type='text' value='$i'/>
                <br />
                Teléfono: <input type='text' value='$i'/>
                <br />
                <hr />
            visualizacion; 
        } 
    ?>
</body>
</html>