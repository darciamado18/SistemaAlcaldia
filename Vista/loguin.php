<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loguin</title>
    <link href="../bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css" >
</head>
<body background="../imagenes/saman.jpg">
<div class="container w-100  mt-5 mb-5 ">

                 
            <div class="login">
                <h1>INICIO DE SESIÓN</h1> 
                   <form action="../controlador/controlador.php" method="post">                        
                        <p> <input for="frol" class="form-label">ROL:
                            <select name="frol">
                            <option selected value="0"> Elige una opción </option>
                            <optgroup label="rol_"> 
                            <option value="1">Administrador </option>
                            <option value="2">Usuario       </option>
                            </p>
                                           
                        <p> CORREO ELECTRONICO: <input type="text" name="fcorreoUsu" placeholder="nombre@sucorreo.com"> 
                        </p>                       
                      
                        <p>CONTRASEÑA:<input type="password"  name="fpasswordUsu" placeholder="***********"> </p>
                        <p class="submit"><center> <input type="submit" name="fboton" value="INGRESAR"></center> </p>
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
                   <img src="../imagenes/aprobado.png" width="100" >
               </div>
           </div>
           <div class="col-1 col-md-3 col-lg-4"></div>
       </div>
       
   </div>

   <script src="../bootstrap/bootstrap.bundle.js"></script>    
</body>
</html>