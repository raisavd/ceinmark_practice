<html>
<head>
<title>Métodos Estáticos</title>
<meta  charset="utf-8" />
</head>
<body>
<?php
class Cadena {
  public static function largo($cad)
  {
    return strlen($cad);
  }
  public static function mayusculas($cad)
  {
    return strtoupper($cad);
  }
  public static function minusculas($cad)
  {
    return strtolower($cad);
  }
}


$c='Hola';
echo 'Cadena original:'.$c;
echo '<br>';
echo 'Largo:'.Cadena::largo($c);
echo '<br>';
echo 'En mayúsculas:'.Cadena::mayusculas($c);
echo '<br>';
echo 'En minúsculas:'.Cadena::minusculas($c);
?>
</body>
</html>
