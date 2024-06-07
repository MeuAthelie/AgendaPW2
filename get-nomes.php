<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$database = mysqli_connect('localhost', 'root', '', 'Agenda');

$query = "SELECT * FROM contatos";
$resultado = mysqli_query($database, $query);

$nomes = [];

while ($linha = mysqli_fetch_assoc($resultado)) {
    $nomes[] = $linha;
}

echo json_encode($nomes);

mysqli_close($database);
