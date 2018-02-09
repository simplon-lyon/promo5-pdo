<?php

use Slim\Http\Request;
use Slim\Http\Response;
use simplon\entities\Person;
use simplon\dao\DaoPerson;

// Routes
phpinfo();
$app->get('/', function (Request $request, Response $response, array $args) {
    $dao = new DaoPerson();
    var_dump($dao->getAll());
    
    // Render index view
    return $this->view->render($response, 'index.twig', [
        'variable' => 'Yes It works'
    ]);
})->setName('index');