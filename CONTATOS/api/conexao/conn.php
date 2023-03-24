<?php 

    $host = 'localhost';
    $dbname = 'contato';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "conexão com o banco de dados ".$dbname." foi realizado com sucesso";
    } catch (PDOException $e) {

        echo "ERRO :". $e->getMessage;

    }