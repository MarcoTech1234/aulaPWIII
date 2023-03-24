<?php

include('../../conexao/conn.php');

try {

    $sql = "INSERT INTO CONTATO (NOME, TELEFONE, CELULAR, EMAIL) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_REQUEST['NOME'],
        $_REQUEST['TELEFONE'],
        $_REQUEST['CELULAR'],
        $_REQUEST['EMAIL']
    ]);
    $dados = array(
        'type' => 'success',
        'mensagem' => 'Registro salvo com sucesso!'
    );
    
} catch (PDOException $e) {
    $dados = array(
        'type' => 'error',
        'mensagem' => 'Erro ao salvar o registro: '. $e
    );

}

echo json_encode($dados);