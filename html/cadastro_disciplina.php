<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Disciplina</title>
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
            width: 350px;
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
            background-color: blue;
            border: none;
            border-radius: 3px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: darkblue;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Cadastro de Disciplina</h2>
        <form action="processa_cadastro_disciplina.php" method="POST">
            <label for="Disciplina">Escolha sua disciplina desejada: </label>
            <select id="Disciplina" name="Disciplina" required>
                <option value="">Selecione uma disciplina</option>
                <option value="Programador">Programador de Sistemas</option>
                <option value="Manicure">Manicure</option>
                <option value="Pediatra">Pediatra</option>
            </select>
            <div class="checkboxes" style="display: flex; align-items: center;">
                <input type="checkbox" style="margin-right: 8px;">
                <label >Confirme a disciplina</label>
            </div>
            <button type="submit"> Cadastrar</button>
        </form>
    </div>
</body>
<link rel="stylesheet" href="/css/cadastro_disciplina.css">

</html>