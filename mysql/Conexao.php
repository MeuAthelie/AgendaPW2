<?php
$conexao = mysqli_connect("localhost", "sa", "senha", "agenda");


$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];


$query = "INSERT INTO contatos (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
mysqli_query($conexao, $query);

header("Location: lista_contatos.php");
exit;
?> 
