<?php

namespace app\controllers;

class ControllerLogin extends Base
{
    public function cadastro($request, $response)
    {
        try {
            return $this->getTwig()
                ->render($response, $this->setView('login'))
                ->withHeader('Content-Type', 'text/html')
                ->withStatus(200);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}