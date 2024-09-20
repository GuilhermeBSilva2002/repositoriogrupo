<?php
/*
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

require __DIR__ . '/../app/helpers/settings.php';
require __DIR__ . '/../app/routes/routes.php';

$app->run();
*/
# Captura a senha digitada pelo usuário:
$senha_segura = "laele";
# Gera o hash da senha informada pelo usuário:
$password = password_hash($senha_segura, PASSWORD_DEFAULT);
# Verifica se a senha informada é válida:
$senha_correta = password_verify($senha_segura, $password);
# Caso a senha seja válida, verificamos se o hash está vencido (false=não está,true=está):
$senha_vencida = password_needs_rehash($password, PASSWORD_DEFAULT);
# Por ultimo, alteramos no banco de dados o hash da senha


var_dump($senha_vencida);
