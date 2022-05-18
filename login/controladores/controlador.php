<?php 
include_once './modelos/config.php';


class Controlador
{
	private $conexion;
	function __construct()
	{
		$this->conexion=new mysqli(HOST,USER,PASSWORD,DBNAME);
	}

	function alta_usuario($n,$e,$p){
	$consulta = "SELECT idusuario FROM usuario WHERE name='" . $n . "' AND email ='" . $p . "'";
    $res = $this->conexion->query($consulta);
     $nf=$res->num_rows;
          if($nf==0){
		$consulta = "INSERT INTO usuario (name, password, email) VALUES ('" . $n . "','" . $e . "','" . $p . "')";
        if ($this->conexion->query($consulta)) {
            echo "usuario registrado";
        } else {
            echo $this->conexion->connect_error;
        }
            }
            else echo "usuario duplicado";
	}

	function login($c,$e){
    $consulta = "SELECT * FROM usuario WHERE password='" . $e . "' AND email ='" . $c . "'";
    $res = $this->conexion->query($consulta);
    $nf=$res->num_rows;
    $bandera=false;
     if($nf==1)
     	$bandera=true;
     
      return $bandera;
	}
	 function sesion($c,$e){
    $consulta = "SELECT * FROM usuario WHERE password='" . $e . "' AND email ='" . $c . "'";
    $res = $this->conexion->query($consulta);

        
      return $res;

	 }
    }  
 ?>