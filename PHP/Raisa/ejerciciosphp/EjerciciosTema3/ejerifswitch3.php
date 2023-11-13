<?php

$nota = 4;

if($nota>=5 AND $nota<6){
    echo "Aprobado";
}else if($nota>=6 AND $nota<7){
    echo "Bien";
}else if($nota>=7 AND $nota<8){
    echo "Notable";
}else if($nota>=8){
    echo "Sobresaliente";
}

echo "Suspendido";

?>