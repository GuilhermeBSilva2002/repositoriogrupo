<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Turma</title>
    <link
        href="/css/bootstrap.css"
        rel="stylesheet">
</head>

<body>
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/bem_vindo_turma.php">Início</a></li>
                    <li class="breadcrumb-item"><a href="/lista_turma.php">Lista de Turmas</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cadastro de Turma</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="conteiner-fluid">
        <div class="row">
            <div class="col-12">
                <h1>
                    <span class="badge text-bg-secondary">
                        Cadastro de Turma
                    </span>
                </h1>
            </div>
        </div>


    </div>
    <br>
    <div class="row">
        <div class="col-12">
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="qtd_alunos_curso" name="qtd_alunos_curso" placeholder="" required>
                <label for="qtd_alunos_curso">Quantidade de Alunos*</label>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="data_inicio_curso" name="data_inicio_curso" placeholder="" required>
            <label for="data_inicio_curso">Data de Início do Curso*</label>

        </div>
        <div class="col-12">
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="data_fim_curso" name="data_fim_curso" placeholder="" required>
                <label for="data_fim_curso">Data de Fim do Curso*</label>
                <br>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck_turma">
                        <label class="form-check-label" for="gridCheck">
                            Confirme seu cadastro
                        </label>
                    </div>
                </div>
                <br>
                <div id="liveAlertPlaceholder_turma" class="col-12">
                    <button type="button" class="btn btn-primary" id="liveAlertBtn_turma">Cadastrar</button>
                </div>
                </form>
                <script src="/js/bootstrap.js"></script>
                <script src="/js/bootstrap_turma.js"></script>
</body>

</html>