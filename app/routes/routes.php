<?php

use app\controllers\ControllerCliente;
use app\controllers\ControllerDisciplina;
use app\controllers\ControllerHome;
use app\controllers\ControllerLogin;
use app\controllers\ControllerAutenticacao;
use app\controllers\ControllerUsuario;
use app\middlewares\Middleware;
use Slim\Routing\RouteCollectorProxy;

$app->get('/', ControllerHome::class . ':home')->add(Middleware::route());

$app->get('/login', ControllerLogin::class . ':login')->add(Middleware::route());

$app->get('/inicio', ControllerAutenticacao::class . ':autenticacao')->add(Middleware::route());

$app->group('/usuario', function (RouteCollectorProxy $group) {
    $group->get('/lista', ControllerUsuario::class . ':lista')->add(Middleware::route());
    $group->get('/cadastro', ControllerUsuario::class . ':cadastro')->add(Middleware::route());
    $group->get('/alterar/{id}', ControllerUsuario::class . ':alterar')->add(Middleware::route());
    $group->post('/insert', ControllerUsuario::class . ':insert');
    $group->post('/autenticar', ControllerUsuario::class . ':autenticar');
});
$app->group('/cliente', function (RouteCollectorProxy $group) {
    $group->get('/cadastro', ControllerCliente::class . ':cadastro');
});
$app->group('/disciplina', function (RouteCollectorProxy $group) {
    $group->get('/lista', ControllerDisciplina::class . ':lista');
    $group->get('/cadastro', ControllerDisciplina::class . ':cadastro');
    $group->get('/alterar/{id}', ControllerDisciplina::class . ':alterar');
    $group->post('/delete', ControllerDisciplina::class . ':delete');
    $group->post('/insert', ControllerDisciplina::class . ':insert');
});
