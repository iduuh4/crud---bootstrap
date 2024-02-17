<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$primeiro_nome = filter_input(INPUT_POST, 'primeiro_nome');
$segundo_nome = filter_input(INPUT_POST, 'segundo_nome');
$email = filter_input(INPUT_POST, 'email');
$genero = filter_input(INPUT_POST, 'genero');

if ($id && $primeiro_nome && $primeiro_nome && $email && $genero) {
    $sql = $pdo->prepare("UPDATE crud_s SET primeiro_nome = :primeiro_nome, segundo_nome = :segundo_nome, email = :email, genero = :genero WHERE id = :id");
    $sql->bindValue(':primeiro_nome', $primeiro_nome); //todos os itens q irei trocar na minha query/tabela
    $sql->bindValue(':segundo_nome', $segundo_nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue('genero', $genero);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("Location: index.php");
    exit;
} else {
    header("Location: update.php");
    exit;
}
