<?php
    class Conexion{
        function conectarbd(){
            $conexion = mysqli_connect("localhost","root","","sistemaalcaldia");
            mysqli_query($conexion, "SET NAMES 'utf8' ");
            return $conexion;
        }

        function desconectar($conexion){
            mysqli_close($conexion);
        }
    }
?>  