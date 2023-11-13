<?php 
$conex = mysqli_connect("localhost","root","","productos"); 
if ($conex) {
	$consulta = "SELECT * FROM productos";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $nombre = $row['nombre'];
	    $precio = $row['precio'];
	    ?>
        <div>
        	<h2><?php echo $nombre; ?></h2>
        	<div>
        		<p>
        			<b>PRECIO: </b> <?php echo $precio ?><br>
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
}
?>