<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="/personalizado.css">
</head>


<body>
    <h1 id="aqui_temos_o_id_do_titulo" class="classe_do_h1">Cadastro de Cliente</h1>
    <hr>
    <form name="form" id="form">
        <label for="nome">Nome completo: </label>
        <br>
        <input type="text" id="nome" name="nome" placeholder="Digite o seu nome" />
        <br>

        <label for="sobrenome">Sobrenome: </label>
        <br>
        <input type="text" id="sobrenome" name="sobrenome" placeholder="Digite o seu sobrenome" />
        <br>

        <label for="cpf">CPF: </label>
        <br>
        <input type="text" id="cpf" name="cpf" placeholder="Digite o seu CPF" />
        <br>

        <label for="RG">RG: </label>
        <br>
        <input type="text" id="RG" name="RG" placeholder="Digite o seu RG" />
        <br>

        <label for="data">Data de Nascimento: </label>
        <br>
        <input type="date" name="data" id="data" placeholder="Selecione sua data de nascimento" />
        <br>

        <label for="pai"> Nome do pai:</label>
        <br>
        <input type="text" name="pai" id="pai" placeholder="Digite o nome do seu pai" />
        <br>

        <label for="mae"> Nome da mãe:</label>
        <br>
        <input type="text" name="mae" id="mae" placeholder="Digite o nome da sua mãe" />
        <br>

        <label for="renda"> Renda mensal:</label>
        <br>
        <input type="number" name="renda" id="renda" placeholder="Digite a sua renda mensal" />
        <br>

        <label for="estadocivil"> Estado civil:</label>
        <br>
        <select id="estadocivil" name="estadocivil" required>
            <option value="">Selecione o seu estado civil </option>
            <option value="solteiro"> Solteiro(a)</option>
            <option value="casado"> Casado(a)</option>
            <option value="namorando"> Namorando</option>
        </select>
        <br>
        <label for="uf"> Estado da federação: </label>
        <br>
        <select id="uf" name="uf" required>
            <option value="">Selecione um estado brasileiro </option>
            <option value="RO"> Rondônia</option>
            <option value="ES">Espirito Santo </option>
        </select>
        <br>

        <label for="CEP"> CEP: </label>
        <br>
        <input type="text" name="cep" id="cep" placeholder="Digite o seu CEP" />
        <br>

        <label for="rua"> Logradouro: </label>
        <br>
        <input type="text" name="rua" id="rua" placeholder="Digite o seu logradouro" />
        <br>

        <label for="numeroresidencia"> Número da residência: </label>
        <br>
        <input type="number" name="numeroresidencia" id="numeroresidencia" placeholder="Digite o número da sua residência" />
        <br>

        <label for="bairro"> Bairro: </label>
        <br>
        <input type="text" name="bairro" id="bairro" placeholder="Digite o nome do seu bairro" />
        <br>

        <label for="cidade"> Cidade: </label>
        <br>
        <input type="text" name="cidade" id="localidade" placeholder="Digite a sua cidade" />
        <br>

        <label for="pais"> País: </label>
        <br>
        <select id="pais" name="pais" required>
            <option value="">Selecione um país</option>
            <option value="BR"> Brasil</option>
            <option value="EUA"> Estados Unidos</option>
            <option value="ES"> Espanha</option>
        </select>
        <br>
        <label for="ibge"> IBGE</label>
        <br>
        <input type="number" name="ibge" id="ibge" placeholder="Digite seu IBGE" />
        <br>
        <br>
        <button type="submit"> Salvar</button>
        <br>
    </form>
    <script src="/js/index.js"></script>
</body>

</html>