<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INICIO DE SESION (ALCALDIA MUNICIPAL DE LANDÁZURI)</title>
        <link  rel="stylesheet"   href="../css/estilologuin.css">
        
    </head>

    <body background="../imagenes/landazuri.jpg">     

        <div div class="container">
            <div class="row">  
                <div class="col-lg-15">       
                 
                <h1 class="text-center">
                <h1 class="text-primary">
                    BIENVENIDO A LA PLATAFORMA ALCALDIA
                </h1>
                </h1>   
            
                <form action="../controlador/controlador.php" method="POST" class="form-label">
                     ROL: 
                        <select name="frol">    
                            <option value="seleccione">    Seleccione    </option>
                            <option value="administrador"> Administrador </option>    
                            <option value="usuario">       Usuario       </option>    
                        </select>                    
                    <br> 
                    <br>
                    <div class="mb-0">                   
                        <label for="correoUsu" class="form-label" >CORREO ELECTRONICO:</label>
                        <input type="email" class="form-control" name="fcorreoUsu" id="correoUsu" placeholder="Escribe Su Correo">                    
                    </div>
                    <br>
                    <br>
                    <div class="mb-0">                    
                        <label for="passwordUsu" class="form-label">CONTRASEÑA: </label>
                        <input type="password" class="form-control" name="fpasswordUsu" id="passwordUsu" placeholder="*********"> 
                    </div>
                        <br>
                        <br>
                    
                    <?php
                    @$mensaje = $_GET['mensaje'];
                    
                        if ($mensaje == 'incorrecto') {
                            echo '<div class = "alert alert-danger" role = "alert"> <h1 style = "color:black;">USUARIO O CLAVE O ROL INCORRECTO</h1></div>';
                        }
                    ?>   

                    <div>                   
                        <button type="submit" class="btn btn-success  btn-primary btn-block" name="fboton" value="ingresar">INICIAR SESION</button>
                    </div>
                </form>  
                </div>
            </div>          
        </div>
    </body>
</html>