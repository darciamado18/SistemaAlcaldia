<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loguin</title>
    <link href="../boodstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/hoja.css" >
</head>
<body background="../imagenes/desc5.jpg">
<div class="container w-100  mt-5 mb-5 ">
       
       <div class="row ">
           <div class="col-1 col-md-3 col-lg-4"></div>
           <div class="col-10 col-md-6 col-lg-4 colcontainerH p-2 fondodegradado">
               <div class="row  ">
                   

                   <h4 class="fw-bold  text-center py-4">BIENVENIDOS</h4>

                   <form action="../controlador/Controlador.php" method="post">
                      
                       <div class="mb-2">
                            <select name="frol">
                            <option selected value="0"> Elige una opción </option>
                            <optgroup label="rol_"> 
                            <option value="1">Administrador </option>
                            <option value="2">Usuario       </option>
                        </div>
                        <br> 

                       <div class="mb-2">
                           <label for="correo" class="form-label" placeholder="nombre@sucorreo.com" required autofocus >CORREO ELECTRONICO: </label>
                           <input type="email" class="form-control" name="fcorreoUsu"> 
                       </div>
                       <br>
                       <div class="mb-2">
                           <label for="password" class="form-label">CONTRASEÑA: </label>
                           <input type="password" place class="form-control" name="fpasswordUsu"> 
                       </div>
                       <div class="d-grid">
                           <button type="submit" class="btn btn-primary botones" name="fboton" value="ingresar">INICIAR SESION</button>
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
               <div class="row mt-4 " >
                   <img src="../imagenes/fgh.PNG" width="200" >
               </div>
           </div>
           <div class="col-1 col-md-3 col-lg-4"></div>
       </div>
       
   </div>

   <script src="../boodstrap/bootstrap.bundle.js"></script>    
</body>
</html>