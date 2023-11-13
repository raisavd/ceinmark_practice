<?php 

if(!$_POST){

    $arraynombre = ["Jamos y queso","Napolitana","Muzzarela"];

    echo'
    <form action="" method="post" >

    <p>Nombre: <input type="text" name="nombre" size="20"/></p>
    <p>Direccion: <input type="text" name="direccion"  size="20"/></p>';

    for($var = 0; $var < sizeof($arraynombre) ; $var++){
        echo $arraynombre[$var].":";
        echo "<input type=\"checkbox\" name=\"tipo[]\" value=\"$arraynombre[$var]\"/>";
        echo "<p>Cantidad: <input type=\"text\" name=\"cantidad[]\"  size=\"5\"/></p>";
    }

    echo '<p><input type="submit"  name="submit" value="Confirmar" /></p>
        </form>';

}else{

var_dump($_POST);

    function escribir(){
        
        $tipo = $_POST['tipo'];
        $cantidad = $_POST['cantidad'];
        $var2 = 0;

        $ar=fopen("pizza.txt","w") or die("Problemas en la creacion"); 
        fwrite($ar,$_POST['nombre']); 
        fwrite($ar, "-");
        fwrite($ar,$_POST['direccion'].PHP_EOL);

        for($var1 = 0; $var1 < sizeof($cantidad); $var1++){                  

            if(strlen($cantidad[$var1]) != 0){

                fwrite($ar, $tipo[$var2]);        
                fwrite($ar, " - ");                                            
                fwrite($ar, $cantidad[$var1].PHP_EOL);
                $var2++;                
            }                
        }        
        
        fclose($ar);

    }       

    escribir();
}

?>