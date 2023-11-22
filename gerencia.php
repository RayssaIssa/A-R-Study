<?php

function gerente()
{
    if (!isset($_SESSION)) {
        session_start();
    }

    $notas = new Notas();

    if (isset($_POST['criar_notas'])) {
        $notas->cadastro($_SESSION['email'], $_POST['titulo_notas'], $_POST['descricao_notas'], isset($_POST['urgente']) ? $_POST['urgente'] : 0);
    }

    if (isset(($_POST['excluir_nota']))) {
        $notas->exclusao($_POST['idnotas'], $_SESSION['email']);
    }

    if (isset(($_POST['alterar_nota']))) {
        $notas->alteracao($_POST['idnotas'], $_SESSION['email'],  $_POST['titulo_notas'], $_POST['descricao_notas'], isset($_POST['urgente']) ? $_POST['urgente'] : 0);
    }
}

?>