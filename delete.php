<?php
require 'config.php';

$id = filter_input(INPUT_GET, 'id'); //pegando se tem algo no input id
if ($id) { //condição caso tenha algum dado
    $sql = $pdo->prepare("DELETE FROM crud_s WHERE id = :id"); //deletar do bd
    $sql->bindValue(':id', $id);
    $sql->execute();
}

header("Location: index.php");
exit;
