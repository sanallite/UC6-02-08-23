<?php
    // It's a me, Márcio! Yahoo! Lembrando que isso não é criptografia, apenas um embaralhamento da string.

    if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
        /* Verifica se o formulário foi enviado. */

        if ( isset($_POST["nome"]) && !empty($_POST["nome"]) ) {
            /* is set testa se a variável existe. */
            /* !empty (se não vazio) empty (vazio) */

            $nome = $_POST["nome"];
            echo "Olá " .$nome. "! Seja bem vindo!<br>";
        }

        else {
            echo "Por favor insira seu nome.<br>";
        }
    }

    if ( isset($_POST["msg"]) && !empty($_POST["msg"]) ) {
        $mensagem = $_POST['msg'];
        echo base64_encode($mensagem); 
        /* Codificando a variável e exibindo o resultado. */
        
        base64_decode($mensagem);
        /* Também é possível decodificar utilizando o resultado codificado da variável, no caso uma string cheia de letras e números. */

        /* base64_decode(base64_encode($mensagem));
            Também é possível decodificar uma mensagem que acabou de ser codificada, aparentemente. */

        echo "<br>Sua mensagem decodicada é: " .$mensagem;
        /* Decodificando a variável e exibindo o valor original, no caso a string com a mensagem enviada pela minha querida Nerissa. */
    }

    else {
        echo "Por favor, digite a sua mensagem.";
    }
?>

<form action="#" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <label for="msg">Mensagem:</label>
            <input type="text" name="msg" id="msg">
        </p>

        <button type="submit">Enviar</button>
        <!-- input type submit também funciona. -->
</form>