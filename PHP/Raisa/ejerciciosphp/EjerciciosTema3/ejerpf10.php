<?php

if(!$_POST){	

    echo<<<formulario
        <form method="POST" action=""> 

            <h1 align="center">Suscripcion electronica</h1>
            </br>

            Nombre: 
            <input type="text" name="nombre" style="margin-right:10px">
            Apellidos:
            <input type="text" name="apellidos" style="margin-right:10px">
            
                    
            Email:
            <input type="email" name="email">
            </br>
            </br>
            
                    
            Domicilio:
            <input type="text" name="domicilio">
            </br>
            </br>
            
            
            <div style="position:relative;">
            Interesado en los siguientes temas:
            </br>
            </br>
            <input type="checkbox" name="check1">Musica
            </br>
            <input type="checkbox" name="check2">Libros
            </br>
            <input type="checkbox" name="check3">Deportes
            </br>
            <input type="checkbox" name="check4">Cine             
            </div>    


            <div style="position:absolute; top:162; left:300;">
            Sexo:
            </br>
            </br>
            <input type="radio" name="radio1" value="Hombre">Hombre
            </br>
            <input type="radio" name="radio1" value="Mujer">Mujer
            </div>
            </br>
            </br>
            
            
            Dia de la semana que le interesa recibirlo:
            </br>
            </br>
            <select name="semana"> 
                <option  selected="selected"  value="0">Dia de la semana</option>
                <option value="lunes">Lunes</option> 
                <option value="martes">Martes</option>
                <option value="miercoles">Miercoles</option> 
                <option value="jueves">Jueves</option> 
                <option value="viernes">Viernes</option> 
            </select> 
            </br>
            </br>
            
            
            Su opinion:
            </br>
            </br>
            <textarea name="opinion"></textarea>
            </br>
            </br>
            
            
            <input type="submit" value="Enviar datos"> 
            <input type="reset" value="Borrar todo"> 

        </form>
formulario;
}

else{  

    echo "El nombre es: ";  
    echo $_POST['nombre'];
    echo "</br>";


    echo "El apellido es: ";  
    echo $_POST['apellidos'];
    echo "</br>";
    

    echo "El email es: ";  
    echo $_POST['email'];
    echo "</br>";


    echo "El domicilio es: ";  
    echo $_POST['domicilio'];
    echo "</br>";    


    if(isset($_POST['check1'])){        
        echo "Su interes es la musica <br>";
    }
    if(isset($_POST['check2'])){
        echo "Su interes son los libros <br>";
    }
    if(isset($_POST['check3'])){
        echo "Su interes son los deportes <br>";
    }
    if(isset($_POST['check4'])){
        echo "Su interes es el cine <br>";
    }


    if(isset($_POST['radi1'])){
        echo "Es". $_POST['radio1'] ."<br>";
    }  


    echo "El dia se la semana es: ";  
    echo $_POST['semana'];
    echo "</br>";


    echo "Su opinion es: ";  
    echo $_POST['opinion'];

}

    
?>