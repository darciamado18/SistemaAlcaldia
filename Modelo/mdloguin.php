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
            $this-> _conexion    = $conexion;
            $this-> _rol         = $rol;
            $this-> _correoUsu   = $correoUsu;
            $this-> _passwordUsu = $passwordUsu;        
        }        

        function verificar(){ 
            $verificar = mysqli_query( $this->_conexion, "SELECT u.idusuarioAlcaldia, d.iddatospersonales, u.rol , u.correoUsu , u.passwordUsu , d.nombre1_Usu
            FROM usuarioAlcaldia u INNER JOIN datospersonalesUsu d ON u.idusuarioAlcaldia = d.iddatospersonales 
            WHERE  u.rol = '$this->_rol' AND u.correoUsu = '$this->_correoUsu' AND u.passwordUsu = '$this->_passwordUsu' ")
            or die(mysqli_error( $this->_conexion));
                       
            if(mysqli_num_rows($verificar)){
                $unusuario = mysqli_fetch_array($verificar);
                $this->_idusuario   = $unusuario["idusuarioAlcaldia"];
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
    
