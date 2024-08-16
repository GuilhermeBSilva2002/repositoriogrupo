<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de aluno</title>
    <link
        href="/css/bootstrap.css"
        rel="stylesheet">
</head>

<body>
    <div class="conteiner-fluid">
        <div class="row">
            <div class="col-12">
                <h1>
                    <span class="badge text-bg-secondary">
                        Cadastro de Usuario
                    </span>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-warning" role="alert">
                    Campos sinalizados com * são obrigatórios para o cadastro!

                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="">
                        <label for="nome">Nome*</label>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="">
                    <label for="cpf">CPF*</label>
                </div>
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="rg" name="rg" placeholder="">
                        <label for="rg">RG*</label>


                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="data" name="data" placeholder="">
                            <label for="Data de Nascicmento">Data de Nascimento*</label>

                            <br>
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Senha</label>
                                    <input type="password" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Endereço</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos Número 0">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Complemento</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Fundos,etc...">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Cidade</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">Estado</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Escolha um estado</option>
                                        <option id="ro">Rondônia</option>
                                        <option id="es">Espírito Santo</option>
                                        <option id="mg">Minas Gerais</option>
                                        <option id="mt">Mato Grosso</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="inputZip" class="form-label">CEP</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Confirme seu cadastro
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </form>
                            <script src="/js/bootstrap.js"></script>
</body>

</html>