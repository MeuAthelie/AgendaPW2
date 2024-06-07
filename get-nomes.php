<?php
    $database = new mysqli('localhost', 'root', '', 'Agenda');

    function getNomes() {
        global $database;
        
        $query = "SELECT * FROM contatos";
        $resultado = $database->query($query);

        $nomes = [];

        while ($linha = $resultado->fetch_assoc()) {
            $nomes[] = $linha;
        }

        return $nomes;
    }
