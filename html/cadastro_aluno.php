<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
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
            background-color: red;
            border: none;
            border-radius: 3px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: darkred;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Cadastro de Aluno</h2>
        <form action="processa_cadastro_aluno.php" method="POST">
            <label for="nomeAluno">Nome do Aluno: </label>
            <input type="text" id="nomeAluno" name="nomeAluno" required>

            <label for="cpf">CPF: </label>
            <input type="text" id="cpf" name="cpf" required>

            <label for="rg">RG: </label>
            <input type="text" id="rg" name="rg" required>

            <label for="data_nascimento">Data de Nascimento: </label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>

            <button type="submit"> Cadastrar</button>
        </form>
    </div>
</body>

</html>