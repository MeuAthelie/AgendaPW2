<?php
$conexao = mysqli_connect("localhost", "sa", "senha", "agenda");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];


    $sql = "INSERT INTO contatos(nome) VALUES ('$nome')";
    if (mysqli_query($conn, $sql)) {
        echo "Pessoa inserida com sucesso!";
    } else {
        echo "Erro ao inserir pessoa: " . mysqli_error($conn);
    }
}

header("Location: lista_contatos.php");
exit;
?>
