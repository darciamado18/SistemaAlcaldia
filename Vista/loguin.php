<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>loguin</title>
        <link rel="stylesheet" href="../css/estiloLoguin.css">
    </head>
    <body background="../imagenes/landazuri.jpg">
        
        <div class="container">
            <div class="row">
            <h1 class="text-center">BIENVENIDO A LA PLATAFORMA ALCALDIA</h1>   
            
                <form action="../controlador/controlador.php" method="POST">
                    <div class="mb-2">
                        <br>
                           <label for="correoUsu" class="form-label" >Correo Electronico:</label>
                           <input type="email" class="form-control" name="fcorreoUsu" id="correoUsu" placeholder="Escribe Su Correo"> 
                    </div>
                    <div class="mb-2">
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
    </body>

</html>