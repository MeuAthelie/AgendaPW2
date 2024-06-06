<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <script src="https://kit.fontawesome.com/8038ccf87d.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Agenda PW2</title>
</head>
<body>
    <div class="container">
        <div class="search-header">
            <div class="search-bar">
                <input type="text" name="pesquisa" id="pesquisa">
                <button type="button">
                    <i class="fa-solid fa-magnifying-glass fa-2xl"></i>
                </button>
            </div>
            <button type="button" class="borderless">
                <i class="fa-solid fa-square-plus fa-2xl"></i>
            </button>
        </div>
        <div class="contacts-container">
            <?php
                // Conexão com o banco de dados
                $conexao = mysqli_connect("localhost", "root", "", "Agenda");

                // Preparação e execução da query
                $query = "SELECT * FROM contatos";
                $query_snapshot = mysqli_query($conexao, $query);

                // Armazenamento dos dados em array
                $contact_index = 0;

                while ($contato = mysqli_fetch_assoc($query_snapshot)) {
                    $nome = $contato["nome"];
                    $telefone = $contato["telefone"];

                    echo "<div class=\"contact\" id=\"contact$contact_index\">
                        <p class=\"contact-info\">$nome</p>
                        <p class=\"contact-info\">$telefone</p>
                        <div>
                            <button type=\"button\">
                                <i class=\"fa-solid fa-pen fa-lg\"></i>
                            </button>
                            <button>
                                <i class=\"fa-solid fa-trash fa-lg red\"></i>
                            </button>
                        </div>
                    </div>";

                    $contact_index++;
                }
            ?>
        </div>
    </div>
</body>
</html>