<?php

$conexao = mysqli_connect("localhost", "usuario", "senha", "nome_do_banco");

$query = "SELECT * FROM contatos";
$result = mysqli_query($conexao, $query);

while ($contato = mysqli_fetch_assoc($result)) {
    echo "Nome: " . $contato['nome'] . "<br>" . "<br>";
}

mysqli_close($conexao);
?>