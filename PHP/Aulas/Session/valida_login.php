<?php
    $usuarios = array(
        array('usuario' => 'José', 'email' =>'jcruqui@gmail.com','senha'=> '123456'),
        // usuário é a posição do index, José é o valor dessa posição, com o mesmo processo ocorrendo para o e-mail e a senha.
        array('email'=>'zezao@gmail.com','senha'=> 'jose123'),
        array('email'=>'teste@gmail.com','senha'=> '123456'),
        array('email'=>'admin@gmail.com','senha'=> 'admin'),
        array('usuario' => 'Márcio', 'email' =>'agent47@gov.com','senha'=> 'nerissa', 'status' => 'adm'),
        /* Adicionando outro índice com o nome de status, que tem o valor adm, e será usado para identificar quem terá os privilégios de administrador da página. */
    );
    // A variável usuarios contem seis arrays diferentes.

    foreach( $usuarios as $user ){
        if ( $user['email']==$_POST['email'] && $user['senha']==$_POST['senha'] ) {
            $usuario_autenticado = true;
            session_start();
            $_SESSION['usuario'] = $user['usuario'];
            $_SESSION['status'] = $user['status'];
        }
    }
    // Para cada valor dentro de usuários, o valor atual será atribuido a variável user, e se user com o índices email e senha tiverem os mesmos valores dos inputs email e senha, a variável usuário autenticado será atribuída o valor verdadeiro, e então iníciará a sessão daquele usuário e como está abaixo, redicionará o usuário para a página menu, caso contrário, criará e atribuirá, atráves do metódo GET, a variável login com o valor erro.

    if ( $usuario_autenticado ){
        header('location:menu.php');
    }
    /* Se a variável existe e é verdadeira o usuário será direcionada para a página menu.php */

    else {
        header('location:login.php?login=erro');
        /* O símbolo ? (Ponto de interrogação) indica que o login vai estar sendo passado pelo metódo GET */
    }
?>