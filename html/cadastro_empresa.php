<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Empresa</title>
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
            background-color: orange;
            border: none;
            border-radius: 3px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: darkorange;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Cadastro de Empresa</h2>
        <form action="processa_cadastro_empresa.php" method="POST">
            <label for="nomeEmpresa">Nome Fantasia da Empresa: </label>
            <input type="text" id="nomeEmpresa" name="nomeEmpresa" required>

            <label for="cnpj_empresa">CNPJ: </label>
            <input type="text" id="cnpj_empresa" name="cnpj_empresa" required>

            <label for="inscricao_estadual">Inscrição Estadual: </label>
            <input type="number" id="inscricao_estadual" name="inscricao_estadual" required>

            <label for="data_de_fundacao">Data de Fundação: </label>
            <input type="date" id="data_de_fundacao" name="data_de_fundacao" required>

            <button type="submit"> Cadastrar</button>
        </form>
    </div>
</body>

</html>