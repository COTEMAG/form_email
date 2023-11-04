<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        body{
            text-align. center;
        }

    </style>
</head>
<body>

   <form action="index.php" method="POST">

   <input type="text" id="nombre" name="nombre"> <br>
   <input type="email" name="email" id="email"> <br>
   <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea> <br>
   <input type="submit" value="enviar">

   </form>

   <?php

   if(isset($_POST["enviar"])){
     $nombre=$_POST["nombre"];
     $email=$_POST["email"];
     $mensaje=$_POST["mensaje"];

     $destino="jbdaconte@gmail.com";
     $asunto="Mensaje de $email";
     $contenido="Nombre: $nombre \n" . "Email: $email \n" . "Mensaje: $mensaje";

     $header="From: micorreo@correo.com";

     $mail=mail($destino,$asunto,$contenido,$header);

     if($mail){
        echo "Se mandó";
     }

     else{
        echo "No se mandó";
     }
    
   }

   ?>
    
</body>
</html>