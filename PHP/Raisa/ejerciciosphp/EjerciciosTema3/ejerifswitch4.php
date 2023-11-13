<?php

$opcion = "a";
$n1 = 8;
$n2 = 6;

switch($opcion)
{
	case "s":
            echo $n1+$n2;
	    break;
	case "r":
    		echo $n1-$n2;
		break;
    case "m":
            echo $n1*$n2;
        break;
    case "d":
            echo $n1/$n2;
        break;

    default:
		echo "No se ha especificado ninguna opcion valida.";


}

?>