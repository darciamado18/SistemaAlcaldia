<?php
    $ingreso = $_POST["fboton"];
    include_once("../modelo/mdconexion.php");
        $objeto = new Conexion();
        $conexion = $objeto->conectarbd();
        //verifica que el boton sea el de ingresar
        if($ingreso == 'ingresar'){
            session_start();
                $rol         = $_POST["frol"]; 
                $correoUsu   = $_POST["fcorreoUsu"];
                $passwordUsu = $_POST["fpasswordUsu"];        
       
        include_once("../modelo/mdloguin.php");

            $modelo      = new loguin($conexion,$rol,$correoUsu,$passwordUsu);
            $id          = $modelo->verificar();
            $nombre1_Usu = $modelo->getNombre();
        
        if($id > 0){
            $_SESSION["idusuarioAlcaldia"]= $id;
            $_SESSION["nombre1_Usu"]      =$nombre1_Usu;            
            header("location:../vista/principal.php");             
        } else{
            header("location:../vista/loguin.php?mensaje=incorrecto");
              }
    }
?>