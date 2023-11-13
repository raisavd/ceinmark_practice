<html>
<head>
<title>Ejercicio p34</title>
</head>
<body>

<?php

    $a = 1;     /* ámbito global */
    function Prueba(){
        
        echo $a;    /* variable global */
    }

    Prueba();

    $a = 1;
    function Prueba2(){
        global $a;
        echo $a;
    }

    Prueba2();

    $a = 1;
    function Prueba3(){
        echo $GLOBALS["a"];
    }
    
    var_dump($GLOBALS);
    
    Prueba3();

?>

</body>
</html>