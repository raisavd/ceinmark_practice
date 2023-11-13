<html>
<body>
<?php

$var2=100;

while($var2>0){
	
	echo "$var2, ";
	
	$var2=$var2-2;

	if($var2%20==0){
		
		echo "<br/>";
	}
}

echo "$var2";

?>
</body>
</html>