<?php
    $cpf = $_POST['cpf'];

    if ( !preg_match("/^[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}$/", $cpf)) {
        echo "CPF inválido";
    }

    else {
        echo "CPF válido.";
    }
?>