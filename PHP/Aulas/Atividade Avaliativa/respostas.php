<?php
    if ( isset( $_POST['p2op2'] ) || isset( $_POST['p2op1'] ) || isset( $_POST['p2op3'] ) ) {
        if ( isset( $_POST['p2op1'] ) && !isset( $_POST['p2op2'] ) && !isset( $_POST['p2op3'] ) ) {
            echo "Acertou!";
            $resposta2 = true;
        }

        else {
            echo "Errou!";
        }
    }