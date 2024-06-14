<?php
    $conexao = mysqli_connect('localhost', 'root', '');

    $sql = "create database if not exists Agenda";
    mysqli_query($conexao, $sql);

    $conexao = mysqli_connect('localhost', 'root', '', 'Agenda');

    $sql = "create table if not exists contatos (
        id int not null auto_increment primary key,
        nome varchar(45)
    )";

    mysqli_query($conexao, $sql);

    mysqli_close($conexao);

    header('location: contatos.html');
    exit;
