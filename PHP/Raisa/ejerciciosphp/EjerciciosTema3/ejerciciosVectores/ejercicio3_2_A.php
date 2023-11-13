<!DOCTYPE html >
<html>
<head>
<meta  charset=utf-8 />
<title>Ejercicio 3.2 A</title>
</head>
<body>

<?php

/*for($x = 0; $x < 4; $x++){
    
    $numeros[$x]=-1;
} 

for($i=0; $i < 4; $i++){

    $temp = rand(0,9);

    for($x = 0; ($x < $i) && ($temp != $numeros[$x]); $x++);

    if($temp == $numeros[$x]){
        $i--;
    }else{
        $numeros[$i] = $temp;
    }        
}*/

 if(!$_POST){ 

    echo '<form method="POST" action="">';     
    echo '<h3>Introduce 4 numeros</h3>';
    echo '<br/>';

    for($z = 1; $z <= 4; $z++){    
        echo'<input type="text" name="num[]" style="width: 5vw">';
    }   
 
    echo '<input type="submit" name="comprobar" value="Comprobar">';
    echo '</form>';


}else{ 

    include 'ejercicio3_2_B.php';

    $n = &distintos();
    $num = $_POST['num'];

    echo '<form action="" method="post">';
    echo '<h3>Introduce 4 numeros</h3>';
    echo "Numeros obtenidos al azar: ";  
    // echo "Numeros obtenidos al azar: $n[0], $n[1], $n[2], $n[3]";
    for($y = 0; $y < 4; $y++){  

        if($y<sizeof($n)-1){ //Para que no salga la coma

           echo "$n[$y], ";
    
        }else{
            echo "$n[$y]";

        }        
    }

    echo '<br/>';
    echo '<br/>';

    for($y = 0; $y < 4; $y++){  
         
        if($num[$y]==$n[$y]){
           
            echo "<input type=\"text\" name=\"num[]\" value=\"$num[$y]\" style=\"width: 5vw; border-color:green\">";
        }else{

            echo "<input type=\"text\" name=\"num[]\" value=\"$num[$y]\" style=\"width: 5vw; border-color:red\">";
        }

    }    

    echo '</form>';

}

?>

</body>
</html>