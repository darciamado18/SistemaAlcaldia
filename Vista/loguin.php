<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../scss/style.scss"
    <title>INICIO DE SECION</title>
</head>
<body>
    <section class="container">
            <div class="login">
                <h1>Login</h1>
                <form method="post" action="mdloguin.php">
                    <p><input type="text" name="fcorreoUsu" 
                              placeholder="Ingrese Usuario"></p>
                    <p><input type="password" name="fpasswordUsu" 
                              placeholder="Contrase&ntilde;a"></p>
                    <p class="remember_me">
                        <label>
                            <input type="checkbox" name="recordarme" 
                                   value="false">
                            Recordar mis datos
                        </label>
                    </p>
                    <p class="submit"><input type="submit" value="Ingresar"></p>
                </form>
            </div>
    </section>
    
</body>
</html>l