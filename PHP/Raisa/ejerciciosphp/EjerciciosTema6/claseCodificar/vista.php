<?php

class Vista{

    public function visualizar($est){

        /*for($i=0; $i<sizeof($est);$i++){
            $id=$est[$i]['id'];
            $nom=$est[$i]['nombre'];
            $telefono=$est[$i]['telefono'];
            echo <<<visualizacion
                Identificación: <input type='text' value='$id'/>
                <br />
                Nombre Completo: <input type='text' value='$nom'/>
                <br />
                Teléfono: <input type='text' value='$telefono'/>
                <br />
                <hr />
            visualizacion;
          }*/

        foreach($est as $estudiante){
        
            echo <<<visualizacion
                Identificación: <input type='text' value='$estudiante[id]'/>
                <br />
                Nombre Completo: <input type='text' value='$estudiante[nombre]'/>
                <br />
                Teléfono: <input type='text' value='$estudiante[telefono]'/>
                <br />
                <hr />
            visualizacion;
        }
    }
}

?>