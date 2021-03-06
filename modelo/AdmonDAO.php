<?php
require_once("../class/conexion_db.php");
class AdmonDAO extends Conectar{
    private $admons;

    public function __construct(){
        $this->admons=array();
    }   

    //Metodo que permite leer solicitudes de los usuarios
    public function read_solicitudes(){
        $sql="select * from solicitud_admon";
        $resul=mysqli_query($this->con(),$sql);
        while($row=mysqli_fetch_assoc($resul)){
            $this->admons[]=$row;
        }
        return $this->admons;
    }
    //Metodo que permite leer solicitudes para desactivar cuenta
    public function read_solicitudes_cuenta(){
        $sql="select * from solicitud_admon where id_tipo_solicitud=1";
        $resul=mysqli_query($this->con(),$sql);
        while($row=mysqli_fetch_assoc($resul)){
            $this->admons[]=$row;
        }
        return $this->admons;
    }
    //Metodo que permite leer los tipos de solicitudes existentes
    public function read_tipo_solicitudes(){
        $sql="select * from solicitud";
        $resul=mysqli_query($this->con(),$sql);
        while($row=mysqli_fetch_assoc($resul)){
            $this->admons[]=$row;
        }
        return $this->admons;
    }
    //Metodo que permite leer una solicitud en especifico para ser atendida
    public function read_solicitud_atender($id_solicitud){
        $sql="select * from solicitud_admon where id_solicitud_admon=$id_solicitud";
        $resul=mysqli_query($this->con(),$sql);
        while($row=mysqli_fetch_assoc($resul)){
            $this->admons[]=$row;
        }
        return $this->admons;

    }
    //Metodo que permite actualizar el estado de una solicitud atendida
    public function update_solicitud($id_solicitud){
        $estado = "Atendido";
        $sql = "UPDATE solicitud_admon SET estado = '$estado' WHERE id_solicitud_admon = $id_solicitud";

        $resul = mysqli_query($this->con(),$sql);

        return $resul;
    }

     //Metodo que permite actualizar el estado de un usuario a desactivo
     public function update_estado_user($id_usuario,$estado){
         
        $sql = "UPDATE usuario SET estado = '$estado' WHERE id_usuario = $id_usuario";

        $resul = mysqli_query($this->con(),$sql);

        return $resul;
    }

}

?>