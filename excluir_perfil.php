<?php
    session_start();
    include_once "db_connect.php";
    // Verifica se o usuário está logado
    if (!isset($_SESSION["usuario_logado"]) || $_SESSION["usuario_logado"] !== true) {
        // Se o usuário não está logado, redireciona para a página de login
        header("Location: entrar.php");
        exit;
    }
    // Obtém o ID do usuário da variável de sessão
    $id_usuario = $_SESSION["user_id"];
    // Verifica a conexão
    if ($mysqli->connect_error) {
        die("Falha na conexão: " . $mysqli->connect_error);
    }
    // Query para excluir o perfil do usuário do banco de dados
    $query = "DELETE FROM users WHERE id = $id_usuario";

    if ($mysqli->query($query) === TRUE) {
        // Perfil excluído com sucesso, redireciona para a página de login
        clearstatcache();
        session_destroy(); // Destroi a sessão para desconectar o usuário
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao excluir perfil: " . $mysqli->error;
    }
    // Fecha a conexão com o banco de dados
    $mysqli->close();
?>