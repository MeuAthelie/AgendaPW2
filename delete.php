<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    $conexao = mysqli_connect("localhost", "root", "", "Agenda");

    $conteudo = file_get_contents('php://input');

    parse_str($conteudo, $data);

    $id = isset($data['id']) ? $data['id'] : null;

    if ($id) {
        $sql = "DELETE FROM contatos WHERE id = ('$id')";

        if (mysqli_query($conexao, $sql)) {
            echo "Pessoa excluída com sucesso.";
        } else {
            echo "Falha ao excluir pessoa.";
        }
    }
        mysqli_close($conexao);