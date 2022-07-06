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
<div class="container ">
       
      

           <div class="row  ">                  

                   <h1 class="fw-bold  text-center py-4">BIENVENIDO A LA PLATAFORMA ALCALDIA</h1>

                   <form action="../controlador/controlador.php" method="post">

                       <div class="mb-2">
                           <label for="email" class="form-label">Correo Electronico</label>
                           <input type="email" class="form-control" name="femail"> 
                       </div>
                       <br>
                       <div class="mb-2">
                           <label for="password" class="form-label">CONTRASEÑA: </label>
                           <input type="password" place class="form-control" name="fcontraseña"> 
                       </div>
                        <br>
                       <div class="d-grid">
                           <button type="submit" class="btn btn-primary botones" name="fboton" value="ingresar">INICIAR SESION</button>
                       </div>
                   </form>




</body>
</html>