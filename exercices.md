Création d'un formulaire d'ajout de personne :
1) Dans une nouvelle route/template, ou alors directement dans le template index.twig, créer un formulaire HTML pour rajouter une nouvelle Person, ce formulaire aura un input name, un input birthdate, un select gender et un submit et pointera en POST sur une autre route, par exemple "/addPerson"
2) Dans le routes.php, créer une nouvelle route post correspondant à celle que vous avez mise dans le formulaire
3) Dans cette route, il va falloir récupérer les informations du formulaire via le $request->getParsedBody(), et utiliser ces informations pour créer une instance de Person
4) Dans la route toujours, on pourra ensuite créer une instance de dao et utiliser sa méthode add en lui donnant comme argument l'instance créée plus tôt
5) Ensuite on fait en sorte d'afficher un message de succès indiquant qu'on a bien ajoutée une personne avec son id