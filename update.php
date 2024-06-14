<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    $conexao = mysqli_connect('localhost', 'root', '', 'Agenda');

    $conteudo = file_get_contents('php://input');

    parse_str($conteudo, $data);

    $id = isset($data['id']) ? $data['id'] : null;
    $nome = isset($data['nome']) ? $data['nome'] : null;

    if ($id && $nome) {
        $sql = "update contatos set nome = '$nome' where id = '$id'";

        if (mysqli_query($conexao, $sql)) {
            echo "Contato alterado com sucesso.";
        } else {
            echo "Erro ao editar contato.";
        }
    } else {
        echo "Nenhum dado.";
    }

    mysqli_close($conexao);
