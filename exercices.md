Création d'un formulaire d'ajout de personne :
1. Dans une nouvelle route/template, ou alors directement dans le template index.twig, créer un formulaire HTML pour rajouter une nouvelle Person, ce formulaire aura un input name, un input birthdate, un select gender et un submit et pointera en POST sur une autre route, par exemple "/addPerson"
2. Dans le routes.php, créer une nouvelle route post correspondant à celle que vous avez mise dans le formulaire
3. Dans cette route, il va falloir récupérer les informations du formulaire via le $request->getParsedBody(), et utiliser ces informations pour créer une instance de Person
4. Dans la route toujours, on pourra ensuite créer une instance de dao et utiliser sa méthode add en lui donnant comme argument l'instance créée plus tôt
5. Ensuite on fait en sorte d'afficher un message de succès indiquant qu'on a bien ajoutée une personne avec son id

Création du formulaire de mise à jour d'une personne :
1. créer la vue du formulaire d'update (reprendre celui du create)
2. modifier la vue de l'index pour passer l'id de la personne à la vue update via l'URL (`path-for('maroute', ["id" -> $id])`)
3. dans la route d'update, récupérer dans la BDD la personne d'après son id puis binder les données à la vue pour les afficher dans le form
4. faire en sorte que l'id de la personne soit bien passé dans l'URL d'action du form
5. dans la route POST de l'update, mettre en forme les données du POST puis envoyer une requête d'update dans la BDD à l'aide du dao
6. ceci fait, rediriger l'utilisateur sur la page index