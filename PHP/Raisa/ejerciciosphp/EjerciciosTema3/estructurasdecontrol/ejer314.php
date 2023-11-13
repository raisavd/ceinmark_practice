<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>3.14</title>
</head>
<body>
   <?php
 $r=0;$n=5;$cr=0;
for($c=1;$c<=$n;$c++){
   $r=$n%$c;
   if ($r==0){
      $cr++;
      }
   if ($cr>2){break;}
}
if($cr==1 || $cr==2){
          echo "El numero $n es primo";
}else{
		echo "El numero $n no es primo";
}
 ?>
</body>
</html>
