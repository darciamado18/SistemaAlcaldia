<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loguin</title>
    <link rel="stylesheet" href="../css/estiloLoguin.css"    
</head>

<body background="../imagenes/landazuri.jpg">

    <div>
    <h1 class="text-center">
      <h1 class="text-primary">
         BIENVENIDO A LA PLATAFORMA ALCALDIA 
      </h1>   
    </h1>
    </div>

    <div class="container">        
           <div class="row">  
                <div class="col-lg-15">    

                   <br>

                   <form action="controlador.php" method="post">

                       <div>

                            <label for="rol" class="form-label">ROL:</label>
                            <select name="frol">  
                          
                            <optgroup label="rol_"> 
                            <option value="0">Administrador </option>
                            <option value="1">Usuario       </option>
                        
                       </div>
                       <br>
                       <br>
                       <div class="mb-0">
                        <br>
                           <label for="correoUsu" class="form-label" >Correo Electronico:</label>
                           <input type="email" class="form-control" name="fcorreoUsu" id="correoUsu" placeholder="Escribe Su Correo"> 
                       </div>
                       <br>
                       <div class="mb-0">
                           <label for="passwordUsu" class="form-label">CONTRASEÑA: </label>
                           <input type="password" place class="form-control" name="fpasswordUsu" id="passwordUsu" placeholder="*********"> 
                       </div>
                        <br>
                       <div >
                           <button type="submit" class="btn btn-success" name="fboton" value="ingresar">INICIAR SESION</button>
                       </div>
                   </form>


                   
                </div>
            </div>               
    </div>
    <?php
                    @$mensaje = $_GET['mensaje'];
                    if (isset($mensaje)){
                    if($mensaje=='incorrecto'){
                            echo '<div  class="alert alert-danger" role="alert"> usuario o clave incorrecto</div>';
                        }

                    }
                    ?>
 
</body>
</html>