<!DOCTYPE html>
<html lang="en">

<head>
  <title>
    ALCALDIA LANDÁZURI (SANTANDER)
  </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/devices.css">
  <link rel="stylesheet" href="../css/hoja.css" >
</head>

<body>
  <?php

  session_start();
  @$estado = $_SESSION["estado"];
  if($estado=="si"){
        header("location:../SistemaAlcaldia/vista/principal.php");    
  }
  else{
       header("location:../SistemaAlcaldia/vista/loguin.php");   

  }
  ?>  

</body>
</html>