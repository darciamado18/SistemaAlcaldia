<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>loguin</title>
        <link href="../css/estiloLoguin.css">
    </head>

    <body background="../imagenes/landazuri.jpg">
        
        <div class="container">
           
                <h1 class="text-center">BIENVENIDO A LA PLATAFORMA ALCALDIA</h1>   
            
                <form action="../controlador/controlador.php" method="POST" class="form-signin">
                     ROL: 
                        <select name="rol">    
                            <option value="00">Administrador</option>    
                            <option value="01">Usuario</option>    
                        </select>
                    
                    <br> 
                    <br>

                    
                        <label for="correoUsu" class="sr-only" >Correo Electronico:</label>
                        <input type="email" class="form-control" name="fcorreoUsu" id="correoUsu" placeholder="Escribe Su Correo"> 
                   
                    <br>
                    <br>

                    
                        <label for="passwordUsu" class="form-label">Contraseña: </label>
                        <input type="password" class="login" name="fpasswordUsu" id="passwordUsu" placeholder="*********"> 
                    <br>
                    <br>    

                    
                        <button type="submit" class="btn btn-lg  btn-primary btn-block" name="fboton" value="ingresar">INICIAR SESION</button>
                    

                </form>
            
        </div>
    </body>
</html>