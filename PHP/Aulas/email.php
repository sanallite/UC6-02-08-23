<?php
    $mail = $_POST['mail'];

    if ( filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        echo $mail;
        echo "<br>E-mail válido.";
    }

    else {
        echo $mail;
        echo "<br>E-mail inválido, digite novamente.";
    }
?>