<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/bem_vindo_aluno.php">Início</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lista de Alunos</li>
                        <li class="breadcrumb-item"><a href="/aluno.php">Cadastro e edição de alunos</a></li>
                        <li class="breadcrumb-item"><a href="/bootstrap_aluno.php"> Cadastro de Aluno</a></li>
                    </ol>
                </nav>


            </div>
        </div>


        <div class="card">

        </div>
        <div class="card-body">
            <a href="#" class="btn btn-outline-primary"><i class="fas fa-plus"></i> Cadastrar</a>

        </div>
    </div>
    </div>


    </div>
    </div>
    <div class="container">
        <div class="row"></div>
        <div class="col-12">
            <h1>Lista de Alunos</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nome</td>
                            <td>CPF</td>
                            <td>Ação</td>
                        </tr>


                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Guilherme</td>
                            <td>000.000.000-00</td>
                            <td>
                                <a href="/aluno.php?id=1"> <button type="button" class="btn btn-warning"><i class="far fa-edit"></i>
                                        Editar</button>
                                </a>
                                <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                                    Excluir</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Julio</td>
                            <td>123.123.123-12</td>
                            <td>
                                <a href="/aluno.php?id=2"> <button type="button" class="btn btn-warning"><i class="far fa-edit"></i>
                                    Editar</button>
                                </a>
                                <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                                    Excluir</button>
                            </td>
                        </tr>
                    </tbody>

                </table>

            </div>


        </div>


    </div>
    <script src="/js/all.min.js"></script>
</body>

</html>