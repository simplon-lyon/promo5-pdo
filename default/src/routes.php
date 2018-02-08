<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {

    // Render index view
    return $this->view->render($response, 'index.twig', [
        'variable' => 'Yes It works'
    ]);
})->setName('index');