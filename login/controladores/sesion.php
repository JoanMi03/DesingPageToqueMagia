<?php
session_start();
include_once("controlador.php");
    if($_POST){
     $n=$_POST['usuario'];
     $p=$_POST['password'];

            $objeto= new Controlador();
           echo  $var=$objeto->login($n,$p);
             

              if($var){
            
              	 $res=$objeto->sesion($n,$p);
                 $fila = $res->fetch_assoc();
                 echo $fila['name'];
                 $_SESSION["usuario"]=$fila['name'];
               header("Location:shop.php");
              }

            
    }


?>