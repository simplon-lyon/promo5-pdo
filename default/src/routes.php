<?php

use Slim\Http\Request;
use Slim\Http\Response;
use simplon\entities\Person;
use simplon\dao\DaoPerson;

// Routes


$app->get('/', function (Request $request, Response $response, array $args) {
    //On instancie le dao
    $dao = new DaoPerson();
    //On récupère les Persons via la méthode getAll
    $persons = $dao->getAll();
    //On passe les persons à la vue index.twig
    return $this->view->render($response, 'index.twig', [
        'persons' => $persons
    ]);
})->setName('index');



$app->post('/', function (Request $request, Response $response, array $args) {
    //On récupère les données du formulaire
    $form = $request->getParsedBody();
    //On crée une Person à partir de ces données
    $newPerson = new Person($form['name'], new DateTime($form['birthdate']), $form['gender']);
    //On instancie le DAO
    $dao = new DaoPerson();
    //On utilise la méthode add du DAO en lui donnant la Person qu'on vient de créer
    $dao->add($newPerson);
    //On récupère les persons
    $persons = $dao->getAll();

    //On affiche la même vue que la route en get
    return $this->view->render($response, 'index.twig', [
        'persons' => $persons,
        'newId' => $newPerson->getId()
    ]);
})->setName('addperson');


