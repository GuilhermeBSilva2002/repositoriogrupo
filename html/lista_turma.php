<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Turmas</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/bem_vindo_turma.php">Início</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lista de Turmas</li>
                        <li class="breadcrumb-item"><a href="/bootstrap_turma.php"> Cadastro de Turmas</a></li>
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
            <h1>Lista de Turmas</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Turma</td>
                            <td>Quantidade de Alunos</td>
                            <td>Data de Início</td>
                            <td>Data de Encerramento</td>
                            <td>Ação</td>
                        </tr>


                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Turma A</td>
                            <td>12</td>
                            <td>15-07-2024</td>
                            <td>03-10-2024</td>
                            <td>
                                <a href="/turma.php?id=1"> <button type="button" class="btn btn-warning"><i class="far fa-edit"></i>
                                        Editar</button>
                                </a>
                                <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                                    Excluir</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Turma B</td>
                            <td>15</td>
                            <td>10-02-2023</td>
                            <td>23-04-2023</td>
                            <td>
                                <a href="/turma.php?id=2"> <button type="button" class="btn btn-warning"><i class="far fa-edit"></i>
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