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
    <div class="container">        
           <div class="row">              

                   <h1 class="text-center text-success"> BIENVENIDO A LA PLATAFORMA ALCALDIA </h1>
                  
                   <br>

                   <form action="../controlador/controlador.php" method="post">

                       <div>
                            <label for="rol" class="form-label"></label>
                       </div>
                       <div class="mb-2">
                           <label for="correoUsu" class="form-label">CORREO ELECTRONICO</label>
                           <input type="email" class="form-control" name="fcorreoUsu" id="correoUsu"> 
                       </div>
                       <br>
                       <div class="mb-2">
                           <label for="passwordUsu" class="form-label">CONTRASEÑA: </label>
                           <input type="password" place class="form-control" name="fpasswordUsu" id="passwordUsu"> 
                       </div>
                        <br>
                       <div >
                           <button type="submit" class="btn btn-success" name="fboton" value="ingresar">INICIAR SESION</button>
                       </div>
                   </form>


                   <?php
                    @$mensaje = $_GET['mensaje'];
                    if (isset($mensaje)){
                    if($mensaje=='incorrecto'){
                            echo '<div  class="alert alert-danger" role="alert"> usuario o clave incorrecto</div>';
                        }

                    }
                    ?>
            </div>               
    </div>
 
</body>
</html>