<?php
require 'config.php';

$primeiro_nome = filter_input(INPUT_POST, 'primeiro_nome'); //pegando TODOS OS INPUTS DO FORMULARIO
$segundo_nome = filter_input(INPUT_POST, 'segundo_nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$genero = filter_input(INPUT_POST, 'genero');

if ($primeiro_nome && $segundo_nome && $email && $genero) {

    $sql = $pdo->prepare("SELECT * FROM crud_s WHERE email = :email "); //para pegar todos os usuarios no bd do campo email e ver se tem algum igual
    $sql->bindValue(':email', $email);
    $sql->execute();

    if ($sql->rowCount() === 0) {  // O nome de usuário não existe, então podemos adicioná-lo
        $sql = $pdo->prepare("INSERT INTO crud_s (primeiro_nome , segundo_nome, email, genero) VALUES (:primeiro_nome, :segundo_nome, :email, :genero)"); //prepare é para fzr requisição com o db e enviar os dados, o primeiro campo pegar no db e o segundo para alterar pegando os campos das variaveis
        $sql->bindValue(':primeiro_nome', $primeiro_nome); //primeiro campo para pegar no db e o segundo para alterar no db
        $sql->bindValue(':segundo_nome', $segundo_nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':genero', $genero);
        $sql->execute(); // para executar

        header("Location: index.php");
        exit;
    } else {
        header("Location: adicionar.php");
        exit;
    }
} else {
    header("Location: adicionar.php");
    exit;
}
