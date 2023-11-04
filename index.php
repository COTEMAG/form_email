<?php

// if "email" variable is filled out, send email

if (isset($_REQUEST['email'])) {

    //Email information

    $destino = "directcafe123@gmail.com";

    $email = $_REQUEST['email'];

    $asunto = $_REQUEST['subject'];

    $mensaje = $_REQUEST['message'];

    //Send email

    mail($destino, $asunto, $mensaje, "From:" . $email);

    //Email response

    echo "Gracias por nada!";
}

//if "email" variable is not filled out, display the form

else { ?>

    <form method="post">
        Email: <input name="email" type="text" />

        Asunto: <input name="subject" type="text" />

        Mensaje: <textarea name="message" rows="15" cols="40"></textarea>

        <input type="submit" value="Submit" />
    </form>

<?php } ?>