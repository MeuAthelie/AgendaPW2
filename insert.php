<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    $conexao = mysqli_connect('localhost', 'root', '', 'Agenda');

    $conteudo = file_get_contents('php://input');

    parse_str($conteudo, $data);

    $nome = isset($data['nome']) ? $data['nome'] : null;
    $nome = str_replace('_', ' ', $nome);

    if ($nome) {
        $sql = "INSERT INTO contatos (nome) VALUES ('$nome')";
    
        if (mysqli_query($conexao, $sql)) {
            echo "Pessoa inserida com sucesso.";
        } else {
            echo "Erro ao inserir pessoa: " . myslqi_error($conexao);
        }
    }

    mysqli_close($conexao);