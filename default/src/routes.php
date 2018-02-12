<?php

use Slim\Http\Request;
use Slim\Http\Response;
use simplon\entities\Person;
use simplon\dao\DaoPerson;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    $dao = new DaoPerson();
    // echo '<pre>';
    // var_dump($dao->getById(2));

    // echo '</pre>';
    $pers = new Person('Jean Claude',new DateTime('1965-07-23'),0);
    $dao->add($pers);
    var_dump($pers);
    // Render index view
    return $this->view->render($response, 'index.twig', [
        'variable' => 'Yes It works'
    ]);
})->setName('index');