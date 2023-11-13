<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>3.13</title>
</head>
<body>

<?php

 $r=0;
 $n=9;
 $c=1;
 $cr=0;

do {

   $r=$n%$c;

   $c++; //1,2,3...

   if ($r==0){

      $cr++; // 0,1,2,break

    }

   //if ($cr>2){break;}

}while($c<=$n && $cr<=2); //1,2,3,4,5

	if($cr==1 || $cr==2){

		echo "El numero $n es primo";

	}else{ // $cr no es 1 ni 2

		echo "El numero $n no es primo";
	}

?>

</body>
</html>
