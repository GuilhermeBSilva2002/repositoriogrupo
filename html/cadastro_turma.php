<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Turma</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .form-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
        }

        .form-container input,
        .form-container select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: purple;
            border: none;
            border-radius: 3px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: darkmagenta;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Cadastro de Turma</h2>
        <form id="formTurma">
            <label for="qtd_alunos">Quantidade de Alunos: </label>
            <input type="number" id="qtd_alunos" name="qtd_alunos" required>


            <label for="data_inicio">Data de Inicio: </label>
            <input type="date" id="data_inicio" name="data_inicio" required>

            <label for="data_fim">Data de Encerramento: </label>
            <input type="date" id="data_fim" name="data_fim" required>

            <button type="button" id="btnsalvarTurma"> Cadastrar</button>
        </form>
    </div>
    <script src="/js/cadastro_turma.js"></script>
</body>

</html>