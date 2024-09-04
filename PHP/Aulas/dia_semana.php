<?php
    $diaSemana = array("Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado");

    $data = date("d-m-Y");
    /* O Y maiúsculo mostra o ano completo, 2023, enquanto o minísculo apenas os dois últimos digitos, 23, D e M maiúsculos também tem varíações. */
    $diaSemana_numero = date( "w", strtotime($data) );

    echo "A data de hoje é: " .$data. "</br>";
    echo "Hoje é " .$diaSemana[$diaSemana_numero];
?>