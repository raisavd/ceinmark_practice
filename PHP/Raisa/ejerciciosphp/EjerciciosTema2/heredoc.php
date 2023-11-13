<html>
<head>
<title>heredoc</title>
</head>
<body>

<?php
$n='heredoc';
$var=<<<p1
    Prueba de $n.
p1;
echo $var;
?>

</body>
</html>
