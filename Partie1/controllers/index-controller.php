<?php

require_once 'models/database.php';
require_once 'models/clients.php';
require_once 'models/showType.php';

// J'instancie un nouvel objet avec la classe Clients
$clientsObj = new Clients;

// Utilisation de la methode getAllClients me permettant de recuperer tous les clients sous forme de tableau
$allClientsArray = $clientsObj->getAllClients();
$allClientsArrayLimit = $clientsObj->getAllClientsLimit();
$allClientsArrayCard = $clientsObj->getAllClientsCard();
$allClientsArrayLetter = $clientsObj->getAllClientsLetter();


$ShowTypeObj = new ShowType;

$ShowTypeArray = $ShowTypeObj->getAllShowType();