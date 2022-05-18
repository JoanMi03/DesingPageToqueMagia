<?php
    include_once("./controladores/controlador.php");
    if($_POST){
      $n=$_POST['nombre'];
         $a=$_POST['usuario'];
            $p=$_POST['password'];

            $objeto= new Controlador();
            $objeto->alta_usuario($n,$p,$a);

            header("Location:login.php");
    }

 ?>