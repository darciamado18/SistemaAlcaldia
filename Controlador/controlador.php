<?php
    $ingreso = $_POST["fboton"];
    include_once("../modelo/mdconexion.php");
    $objeto = new Conexion();
    $conexion = $objeto->conectarbd();
    //verifica que el boton sea el de ingresar
    if($ingreso=='ingresar'){
        session_start();
        $rol      = $_POST["frol"];
        $correo   = $_POST["fcorreoUsu"];
        $password = $_POST["fpasswordUsu"];
        
       
        include_once("../modelo/mdloguin.php");
        $modelo = new loguin($objeto, $conexion,$rol,$correo,$password);
        $numIdUsu = $modelo->verificar();
        $nombreUsu = $modelo->getNombre();
        
        if($id > 0){
            $_SESSION["fnumIdUsu"]=$numIdUsu;
            $_SESSION["estado"]="si";
           
            header("location:../vista/principal.php");   
            
        }
        else{
            header("location:../vista/loguin.php?mensaje=incorrecto");
        }
    }
?>