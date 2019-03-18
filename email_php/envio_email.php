<?php

    if(isset($_POST['email'])){
        $nombre_usuario = $_POST['nombre'];
        $email_usuario = $_POST['email'];


        //$email_cuki = "mcruzdiazcalderon@gmail.com";
        $email_cuki = "gempopoker@gmail.com";
        $asunto = "Nuevo email...";

        $cuerpo_email = "Buenos días, soy ' . $nombre_usuario . ' me pongo en contacto contigo para...";
        $email_del_usuario = $_POST['email'];
        $headers = "From: . $email_del_usuario .";
        mail($email_cuki, $asunto, $cuerpo_email, $headers);

    }

?>