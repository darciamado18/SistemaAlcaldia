<?php
    $ingreso = $_POST["fboton"];
    include_once("../modelo/conexion.php");
    $objeto = new Conexion();
    $conexion = $objeto->conectarbd();
    //verifica que el boton sea el de ingresar
    if($ingreso=='ingresar'){
        session_start();
        $correoUsu = $_POST["correoUsu"];
        $passwordUsu = $_POST["passwordUsu"];
    

        include_once("../modelo/loguin.php");
        $modelo = new loguin($conexion,$rol,$correoUsu,$passwordUsu,$numIdUsu);
        $numIdUsu = $modelo->verificar();
        $nombreUsu = $modelo->getNombre();
        
        if($id > 0){
            $_SESSION["numIdUsu"]=$numIdUsu;
            $_SESSION["estado"]="si";
            $_SESSION["nombre"]=$nombreUsu;
            header("location:../vista/principal.php");   
            
        }
        else{
            header("location:../vista/loguin.php?mensaje=incorrecto");
        }
    }
?>