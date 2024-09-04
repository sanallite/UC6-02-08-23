<?php
    $senha = "coxinha123@";
    /* Colocando um caractere especial como um arroba, já torna a decriptação mais díficil. */

    echo "Senha original: " .$senha. "<br><hr>";

    echo "Criptografando utilizando o método MD5...<br>";

    echo md5($senha). "<br><hr>";
    /* Modo MD5 que criou um hash de 32 caracteres. */

    $hash = password_hash($senha, PASSWORD_DEFAULT);
    echo "Utilizando o modo hash para criptografar, que muda a cada atualização da página.<br>";

    echo $hash. "<hr>";

    echo "Verificando a senha:<br>";

    $senha = "coxinha";
    /* Mudando a senha propositalmente para conferir a verificação. */

    if (password_verify($senha, $hash)) {
        echo "Sua senha é: " .$senha;
    }

    else {
        header("location:cadastro.php");
    }
?>