<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>3.13</title>
</head>
<body>
  <?php
 $r=0;$n=5;$c=1;$cr=0;
do {
   $r=$n%$c;
   $c++;
   if ($r==0){
      $cr++;
      }
   if ($cr>2){break;}
}while($c<=$n);
	if($cr==1 || $cr==2){
		echo "El numero $n es primo";
	}else{
		echo "El numero $n no es primo";
	}
 ?>
</body>
</html>
