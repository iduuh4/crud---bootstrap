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
        <div class="text-center">
            <h3>Adicionar Novo Usuário</h3>
            <p class="text-muted">Complete o formulário para adicionar um novo usuário!</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="create_action.php" method="POST" style="width:50vw; min-width:300px;">

                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Nome:</label>
                        <input name="primeiro_nome" type="text" class="form-control" placeholder="Carlos">
                    </div>

                    <div class="col mb-3">
                        <label class="form-label">Sobrenome:</label>
                        <input name="segundo_nome" type="text" class="form-control" placeholder="Eduardo">
                    </div>

                    <div class=" mb-3">
                        <label class="form-label">Email:</label>
                        <input name="email" type="email" class="form-control" placeholder="patinho@gmail.com">
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label>Gênero: </label> &nbsp;

                    <label>
                        <input type="radio" class="form-check-input" name="genero" id="masculino" value="masculino">
                        Masculino
                    </label>

                    &nbsp;
                    <label>
                        <input type="radio" class="form-check-input" name="genero" id="feminino" value="feminino">
                        Feminino
                    </label>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="adicionar">Adicionar</button>
                    <a href="index.php" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>