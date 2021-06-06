<?php
    //Recoleccion de datos
    //declaro variables
    $nombre     = $_POST['nombre']; //Se usa el nombre y no el id
    $email      = $_POST['email'];
    $consulta   = $_POST['consulta'];
    //Generacion del mensaje
    $mensaje = "
        <strong>Nombre: </strong> $nombre <br/>
        <strong>Correo: </strong> $email <br/>
        <strong>Consulta: </strong> $consulta <br/>";
    
    mail(
        //destinatario 
        "info@dominio.com",
        //asunto
        "Consulta Web",
        //cuerpo
        $mensaje,
        //remitente y formato
        "From : $nombre <$email>
        \n Content-type: text/html
        \n charset =utf-8"
    );
    //Rediccionamiento
        header(
            "location: https://dominio.com/contacto.html"
        );
        //Esto se pone para que la pagina no quede en blanco y me redireccione a alguna pagina


?>