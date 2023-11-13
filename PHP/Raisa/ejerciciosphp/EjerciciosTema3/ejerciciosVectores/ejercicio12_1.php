<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Formulario web</title>
     </head>
     <body>
          <form name="input" action="ejercicio12_2.php" method="post">
               Nombre del alumno: 
               <input type="text" name="nombre" />
               <br />
               <p>Módulos que cursa:</p>
               <input type="checkbox" name="modulos[]" value="DWES" /> Desarrollo web en entorno servidor
               <br />
               <input type="checkbox" name="modulos[]" value="DWEC" /> Desarrollo web en entorno cliente
               <br />
               <br />
               <input type="submit" value="Enviar" />
          </form>
     </body>
</html>
