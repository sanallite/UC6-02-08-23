<?php
    $tel = $_POST['telefone'];

    if (preg_match("^\([0-9]{2}\)[ ]{0,1}[0-9]{4,5}-[0-9]{4}$^", $tel)) {
        echo "Telefone válido!";
    }

    /* if (preg_match("^\([0-9]{2}\)[ ]{0,1}[0-9]{4,5}-[0-9]{4}$^", $tel)) Adicionando o reconhecimento de um espaço entre os números com o [ ]{0,1} Podendo ter 0 espaços ou 1, assim de ambas as formas o telefone será reconhecido como válido. */
    else { 
        echo "Telefone inválido.";
    }
?>