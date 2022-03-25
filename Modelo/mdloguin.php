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
            $verificar = mysqli_query($this->_conexion,"SELECT rol , correoUsu , passwordUsu , numIdUsu
            FROM datospersonalesUsu D , usuarioAlcaldia U WHERE rol = '$this->_rol' and  correoUsu = '$this->_correoUsu' 
            and passwordUsu = '$this->_passwordUsu' and numIdUsu = '$this->_numIdUsu' ") 
            or die(mysqli_error( $this->_conexion));
            
            if(mysqli_num_rows($verificar)){
                $unusuario = mysqli_fetch_array($verificar);
                $this->_rol = $unusuario["rol"];
                $this->_correoUsu = $unusuario["correoUsu"];
                $this->_passwordUsu = $unusuario["passwordUsu"];
               
                return $this->_numIdUsu ;
            }
            return $this->_numIdUsu;
        }
        function getNombre(){
            return $this-> nombre;
    }
}
?> 
    
