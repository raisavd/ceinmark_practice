<html>
<body>
 <?php
 $var1=7;
 if ($var1<5){
	echo "Suspenso";
}elseif(($var1>=5) AND($var1<6)){
	echo "Aprobado";
}elseif(($var1>=6) AND ($var1<7)){
	echo "Bien";
}elseif(($var1>=7) AND ($var1<8)){
	echo "Notable";
}elseif($var1>=8){
	echo "Sobresaliente";
}
 ?>
</body>
</html>