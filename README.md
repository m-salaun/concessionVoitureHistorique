<h1 style="text-align=center; text-decoration=underline;">Concession voiture en Laravel</h1>
<p>Projet réalisé pour apprendre et m'entraîner au plugin Laravel</p>
<p>Alterance FanLab marine national</p>

<h1>Page accueil</h1>
<img src="https://raw.githubusercontent.com/m-salaun/concessionHistorique/main/images/accueilConcession.PNG?token=GHSAT0AAAAAACIUJPZCLHPB6WFQ4P3I6L32ZJGLWEA">
<ul>
    <li>Ajouter une marque de voiture</li>
    <li>Liste des marques en bdd</li>
    <li>Appuyer sur une marque pour voir le detail</li>
</ul>

<h1>Detail Marque mercedes</h1>
<img src="https://raw.githubusercontent.com/m-salaun/concessionHistorique/main/images/PageMercedesDetail.PNG?token=GHSAT0AAAAAACIUJPZCDMUWU3WV552WW43WZJGLT7Q">
<ul>
    <li>Ajouter un modele avec le nom et le prix</li>
    <li>Bouton suppression de la marque</li>
    <li>Liste des modeles lié à cette marque</li>
    <li>Incrementer et decrementer de 1 le nombre de modele en stock</li>
    <li>Bouton modifier permet de changer le nom du modele</li>
    <li>Bouton suppression d'un modele</li>
</ul>

<h1>Laravel utilise le modele MVC</h1>
<ul>
    <li>Model: récupération des données de l’application et les mettre à jour, ou les stocker via fichier ou bdd.</li>
    <li>Vue -> afficher l’interface utilisateur, récupérer les événements</li>
    <li>Contrôleur -> intermédiaire entre le modèle et la vue</li>
</ul>
<p>
    
    Controller : 
	    Création du controller en ligne de commande : php artisan make:controller NomController
	    Les contrôleurs sont listés dans : app/Http/controllers

    Model : 
	    Pour créer un model il suffit d'exécuter la commande suivante : 
        php artisan make:model NomModele
</p>

<h1>Base de donnée</h1>
<p>Pour créer les tables il faut faire un : php artisan migrate</p>
<p>Se qui va créer les tables dont celle qui nous interesse, "cars", "modele", et "listeVoiture"</p>
<h2>Cars : </h2>
<img src="https://raw.githubusercontent.com/m-salaun/concessionHistorique/main/images/tableCars.PNG?token=GHSAT0AAAAAACIUJPZCYY2APCD4NAZLKZLMZJGL6HA">
 <h2>Modele : </h2>
 <img src="https://raw.githubusercontent.com/m-salaun/concessionVoitureHistorique/main/images/tableModele.PNG">

 <h2>ListeVoiture : </h2>
 <img src="https://raw.githubusercontent.com/m-salaun/concessionVoitureHistorique/main/images/tableListVoiture.PNG">
<p>Déjà fait mais imoportant à savoir, dans le fichier database changer ->'engine' => null'  PAR  'engine' => 'InnoDB ROW_FORMAT=DYNAMIC',
et dans le .env modifier les informations pour que ça soit en accord avec votre base de donnée
</p>
<h1>Shema de base de la base de donnée</h1>
<img src="https://raw.githubusercontent.com/m-salaun/concessionVoitureHistorique/main/images/relationTable.PNG">
 
<h1>Pour acceder à la page :</h1>
<p>Allez dans le projet et exécutez la commande : php artisan serve 

    C:\Users\matth\Desktop\carnetDeSante>php artisan serve
    Starting Laravel development server: http://127.0.0.1:8000
</p>
<p>et recuperer l'url</p>

<h1>bootstrap</h1>
<p>Les boutons, formulaire et tableau sont fait avec bootstrap (technologie utilisé par l'entreprise)</p>
