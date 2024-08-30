<!DOCTYPE html>
<html lang="pt-BR">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro e edição de turma</title>
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
                                                <li class="breadcrumb-item"><a href="/lista_turma.php">Lista de Turmas</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Cadastro e edição de turmas</li>
                                                <li class="breadcrumb-item"><a href="/bootstrap_turma.php">Cadastro de Turmas</a></li>
                                        </ol>
                                </nav>
                        </div>
                </div>
                <div class="row">
                        <div class="col-12">
                                <div class="card">
                                        <div class="card-header">
                                                <h3>Cadastro e edição de turma</h3>
                                        </div>
                                        <div class="card-body">
                                                <div class="col-12">
                                                        <div class="alert alert-warning" role="alert">
                                                                Todos os campos sinalizados com
                                                                <span class="text-danger">*</span> são de preenchimento obrigatórios
                                                        </div>
                                                </div>
                                                <form id="form">
                                                        <div class="form-floating mb-3">
                                                              
                                                                <label for="floatingInput"></label>
                                                                <select id="nome_turma" name="turma" required>
                                                                        <option value="">Selecione uma turma</option>
                                                                        <option value="TurmaA">Turma A</option>
                                                                        <option value="TurmaB">Turma B</option>
                                                        
                                                        
                                                </form>
                                        
                                        <div class="card-footer">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a href="/lista_turma.php" class="btn btn-warning">
                                                                <i class="fas fa-chevron-left"></i>
                                                                Voltar
                                                        </a>
                                                        <button type="button" class="btn btn-success">
                                                                <i class="fas fa-save"></i>
                                                                Salvar
                                                        </button>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        <script src="/js/bootstrap.js"></script>
        <script src="/js/all.min.js"></script>
</body>

</html>