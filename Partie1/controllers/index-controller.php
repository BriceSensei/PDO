<?php

require_once 'models/database.php';
require_once 'models/clients.php';
require_once 'models/showType.php';
require_once 'models/shows.php';

// J'instancie un nouvel objet avec la classe Clients
$clientsObj = new Clients;

// Utilisation de la methode getAllClients me permettant de recuperer tous les clients sous forme de tableau
$allClientsArray = $clientsObj->getAllClients();
$allClientsArrayLimit = $clientsObj->getAllClientsLimit();
$allClientsArrayCard = $clientsObj->getAllClientsCard();
$allClientsArrayLetter = $clientsObj->getAllClientsLetter();
$allClientsArrayExo7 = $clientsObj->getAllClientsExo7();



$ShowTypeObj = new ShowType;
$ShowTypeArray = $ShowTypeObj->getAllShowType();


$ShowsObj = new Shows;
$ShowsArray = $ShowsObj->getAllShows();
