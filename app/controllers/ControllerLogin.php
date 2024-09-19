<?php

namespace app\controllers;

class ControllerLogin extends Base
{
    private $users = [
        // Usuários de exemplo. Em um sistema real, você buscaria em um banco de dados.
        ['email' => 'usuario@example.com', 'senha' => 'senha123'],
        ['email' => 'admin@example.com', 'senha' => 'admin123']
    ];

    public function login($request, $response)
    {
        // Obtém os dados do formulário
        $data = $request->getParsedBody();
        $email = $data['email'] ?? '';
        $senha = $data['senha'] ?? '';

        // Verifica as credenciais
        foreach ($this->users as $user) {
            if ($user['email'] === $email && $user['senha'] === $senha) {
                // Armazena o usuário na sessão
                $_SESSION['user'] = $email;

                // Redireciona para a página inicial ou outra página
                return $response->withHeader('Location', '/home')
                                ->withStatus(302);
            }
        }

        // Exibe uma mensagem de erro se o login falhar
        $TempleteData = [
            'titulo' => 'Erro de Login',
            'mensagem' => 'Email ou senha incorretos.'
        ];

        return $this->getTwig()
            ->render($response, $this->setView('pagina-login'), $TempleteData)
            ->withHeader('Content-Type', 'text/html')
            ->withStatus(401);
    }

    public function logout($request, $response)
    {
        session_unset();
        session_destroy();

        // Redireciona para a página de login após logout
        return $response->withHeader('Location', '/login')
                        ->withStatus(302);
    }
}
