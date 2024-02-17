<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM crud_s");
if ($sql->rowCount() > 0) { //se tiver algum item no registro do db, FAÇA
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC); //fetchall para gerar um array, preechido se tiver algum item no registro, fazendo um array
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - EDUARDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar justify-content-center fs-3 mb-5" style="background-color: #595959;">
        CRUD - Eduardo
    </nav>

    <div class="container">
        <a href="create.php" class="btn btn-dark mb-3">Adicionar Usuário</a>

        <table class="table table-hover text-center table-dark table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $usuarios) : ?>
                    <tr>

                        <td><?php echo $usuarios['id'] ?></td>
                        <td><?php echo ucfirst($usuarios['primeiro_nome']) ?></td>
                        <td><?php echo ucfirst($usuarios['segundo_nome']) ?></td>
                        <td><?php echo $usuarios['email'] ?></td>
                        <td><?php echo ucfirst($usuarios['genero']) ?></td>
                        <td>
                            <a class="btn btn-outline-primary" href="update.php?id=<?php echo $usuarios['id']; ?>">Editar
                            </a>
                            <a class="btn btn-outline-danger" href="delete.php?id=<?php echo $usuarios['id']; ?>" onclick="return confirm('tem certeza q deseja excluir?')">Excluir
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>