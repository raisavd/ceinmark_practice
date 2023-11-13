<html>
<body>
 
<?php

$var1=1;

while($var1<100){

	echo "$var1, ";

	if($var1%10==0){
		
		echo "<br/>";
	}

	$var1++;
}

echo "$var1";
 
?>
</body>
</html>