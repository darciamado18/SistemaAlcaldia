<?php
    $ingreso = $_POST["fboton"];
    include_once("../modelo/mdconexion.php");
        $objeto = new Conexion();
        $conexion = $objeto->conectarbd();
        //verifica que el boton sea el de ingresar
        if($ingreso=='ingresar'){
            session_start();
                $rol         = $_POST["roles"]; 
                $correoUsu   = $_POST["fcorreoUsu"];
                $passwordUsu = $_POST["fpasswordUsu"];        
       
        include_once("../modelo/mdloguin.php");
            $modelo      = new loguin($objeto, $conexion,$rol,$correoUsu,$passwordUsu);
            $C = $modelo->__construct($conexion, $rol, $correoUsu, $passwordUsu);
            echo "PASO CONSTRUCTOR DE CONTROLADOR";
            $id          = $modelo->verificar();
            echo "pasa id";
            $nombre1_Usu = $modelo->getNombre();
        
        if($id > 0){
            $_SESSION["idUsuarioAlcaldia"]= $id;
            $_SESSION["nombre1_Usu"]      =$nombre1_Usu;
            
            header("location: principal.php");             
        } else{
            header("location:../vista/loguin.php?mensaje=incorrecto");
              }
    }
?>