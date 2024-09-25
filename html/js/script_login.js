const express = require('express');
const bodyParser = require('body-parser');
const { Pool } = require('pg');
const bcrypt = require('bcryptjs');

const app = express();
const port = 3000;

// Configuração do banco de dados PostgreSQL
const pool = new Pool({
    user: 'gbsilva2002',
    host: 'localhost',
    database: 'casa',
    password: 'guilherme10',
    port: 5432,
});

// Middleware
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

// Rota de login
app.post('/login', async (req, res) => {
    const { login, senha } = req.body;

    try {
        const result = await pool.query('SELECT * FROM usuario WHERE login = $1', [login]);
        const usuario = result.rows[0];

        if (usuario && bcrypt.compareSync(senha, usuario.senha)) {
            // Login bem-sucedido
            res.json({ status: 'success' });
        } else {
            // Login ou senha inválidos
            res.status(401).json({ message: 'Login ou senha inválidos' });
        }
    } catch (error) {
        console.error(error);
        res.status(500).send('Erro no servidor');
    }
});

// Iniciar o servidor
app.listen(port, () => {
    console.log(`Servidor rodando em http://localhost:${port}`);
});
