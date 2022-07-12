<?php
    class loguin{
        private $_conexion;
        private $_idusuario;
        private $_iddatos;
        private $_rol;
        private $_correoUsu;
        private $_passwordUsu;
        private $_nombre1_Usu;
        

        function __construct($conexion,$rol,$correoUsu,$passwordUsu){
            $this-> _conexion = $conexion;
            $this-> _rol= $rol;
            $this-> _correoUsu = $correoUsu;
            $this-> _passwordUsu = $passwordUsu;
        }

        function verificar(){
            $verificar = mysqli_query($this->_conexion, "SELECT u.idusuarioAlcaldia, d.iddatosPersonales, u.rol , u.correoUsu , u.passwordUsu , d.nombre1_Usu
            FROM datospersonalesUsu D INNER JOIN  usuarioAlcaldia U ON u.idusuarioAlcaldia = d.iddatospersonalesUsu 
            WHERE u.idusuarioAlcaldia = '$this->_idusuario' AND  d.iddatosPersonales = '$this->_iddatos' AND   u.rol = '$this->_rol' AND u.correoUsu = '$this->_correoUsu' AND u.passwordUsu = '$this->_passwordUsu' AND d.nombre1_Usu = '$this->_num1_Usu'")
            or die(mysqli_error( $this->_conexion));
            
            if(mysqli_num_rows($verificar)){
                $unusuario = mysqli_fetch_array($verificar);
                $this->_idusuario   = $unusuario["idusuariosAlcaldia"];
                $this->_iddatos     = $unusuario["iddatosPersonales"];
                $this->_rol         = $unusuario["rol"];
                $this->_correoUsu   = $unusuario["correoUsu"];
                $this->_passwordUsu = $unusuario["passwordUsu"];
                $this->_nombre1_Usu = $unusuario["nombre1_Usu"];
                
                return $this->_idusuario;           
            }
            return $this->_idusuario;
           
        }
        function getNombre(){
            return $this-> _nombre1_Usu;
            
        }
    }
?> 
    
