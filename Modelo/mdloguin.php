<?php
    class loguin{
        private $_conexion;
        private $_rol;
        private $_correoUsu;
        private $_passwordUsu;
        private $_numIdUsu;

        function __construct($conexion,$rol,$correoUsu,$passwordUsu, $numIdUsu){
            $this-> _conexion = $conexion;
            $this-> _rol= $rol;
            $this-> _correoUsu = $correoUsu;
            $this-> _passwordUsu = $passwordUsu;
            $this-> _numIdUsu = $numIdUsu;                
        }

        function verificar(){
            $verificar = mysqli_query($this->_conexion, "SELECT U.idusuarioAlcaldia, D.iddatosPersonales, U.rol , U.correoUsu , U.passwordUsu , D.numIdUsu
            FROM datospersonalesUsu D INNER JOIN  usuarioAlcaldia U ON U.idusuarioAlcaldia = D.iddatospersonalesUsu " )
            or die(mysqli_error( $this->_conexion));
            
            if(mysqli_num_rows($verificar)){
                $unusuario = mysqli_fetch_array($verificar);
                $this->_rol = $unusuario["frol"];
                $this->_correoUsu = $unusuario["fcorreoUsu"];
                $this->_passwordUsu = $unusuario["fpasswordUsu"];
               
                return $this->_numIdUsu ;
            }
            return $this->_numIdUsu;
        }
        function getNombre(){
            return $this-> nombre;
    }
}
?> 
    
