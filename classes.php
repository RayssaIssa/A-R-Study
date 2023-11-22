<?php
require('db_connect.php');

function mysqli(){
    if (!isset($_SESSION))
        session_start();

    $host = "localhost";
    $dbname = "study";
    $usernamee = "root";
    $password = "";

    $mysqli = mysqli_connect($host, $usernamee, $password, $dbname);
    if (!$mysqli)
        die("<div class=\"alert alert-danger\" role=\"alert\"> Erro de conexão </div>");
    else
        return $mysqli;
}

class Notas{
    public function cadastro($email, $titulo, $descricao, $importancia)
    {
        $mysqli = mysqli();
        $sql = "INSERT INTO notas (titulo, descricao, importancia, email) VALUES (?,?,?,?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('ssis', $titulo, $descricao, $importancia, $email);
        $stmt->execute();

        if ($stmt->num_rows > 0) {
            echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cactus.php'>";
        } else {
            //Exibir alguma mensagem de erro
        }

        $mysqli->close();
        $stmt->close();
    }

    public function busca($email, $importancia)
    {
        $mysqli = mysqli();
        $sql = "SELECT * FROM notas WHERE email = ? AND importancia = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('ss', $email, $importancia);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                $id = $row['idnotas'];
                $titulo = $row['titulo'];
                $descricao = $row['descricao'];
                $importante = $row['importancia'];

                if ($importante == 1) {
                    $checkbox = <<< FECHARCHECKBOX
                    <input type="checkbox" class="form-check-input" name="urgente" value="1" checked>
                    FECHARCHECKBOX;
                } else {
                    $checkbox = <<< FECHARCHECKBOX
                    <input type="checkbox" class="form-check-input" name="urgente" value="1">
                    FECHARCHECKBOX;
                }
                $cards = <<<FECHARCARDS
                <form method="post" action="" autocomplete="off" id="card$id" class="anotacoes">
                    <div class="cardy">
                        <div class="cardy-body">
                            <input type="hidden" value="$id" name="idnotas">
                            <h5 class="cardy-title"><input type="text" autocomplete="off" value="$titulo" name="titulo_notas"></h5>
                            <textarea cols="40" rows="10" autocomplete="off" placeholder="Insira suas ideias aqui"
                            name="descricao_notas">$descricao</textarea>
                            <div class="controles" id="$id">
                                <div class="form-groupy">
                                    <div class="row">
                                        <div class="col-auto">
                                            <label for="urgente">Importante:</label>
                                        </div>
                                        <div class="col-auto">
                                            $checkbox
                                        </div>
                                    </div>
                                </div>
                                <button class="botaon" name="alterar_nota">Alterar</button>
                                <button class="botaon" name="excluir_nota">Excluir</button>
                            </div>
                        </div>
                    </div>
                </form>
                FECHARCARDS;

                echo $cards;
            }
        }
    }

    public function exclusao($idnotas, $email)
    {
        $mysqli = mysqli();
        $sql = "DELETE FROM notas WHERE email = ? AND idnotas = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('ss', $email, $idnotas);
        $stmt->execute();

        if ($stmt->num_rows > 0) {
            echo "<meta HTTP-EQUIV='refresh' CONTENT='0; URL=cactus.php'>";
        } else {
            //Exibir alguma mensagem de erro
        }

        $mysqli->close();
        $stmt->close();
    }

    public function alteracao($idnotas, $email,  $titulo, $descricao,  $importancia)
    {
        $mysqli = mysqli();
        $sql = "UPDATE notas SET titulo = ?, descricao = ?, importancia = ? WHERE idnotas = ? and email = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('ssiss', $titulo, $descricao, $importancia, $idnotas, $email);
        $stmt->execute();

        if ($stmt->num_rows > 0) {
            echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cactus.php'>";
        } else {
            //Exibir alguma mensagem de erro
        }

        $mysqli->close();
        $stmt->close();
    }

    public function exclusaoGeral($email)
    {
        $mysqli = mysqli();
        $sql = "DELETE FROM notas WHERE email = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();

        if ($stmt->num_rows > 0) {
            echo "<meta HTTP-EQUIV='refresh' CONTENT='0; URL=perfil.php'>";
        } else {
            //Exibir alguma mensagem de erro
        }

        $mysqli->close();
        $stmt->close();
    }
}