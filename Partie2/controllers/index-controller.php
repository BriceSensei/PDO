<?php

require_once 'models/database.php';
require_once 'models/listePatients.php';

// J'instancie un nouvel objet avec la classe Clients
$PatientsObj = new Patiens;

// Utilisation de la methode getAllClients me permettant de recuperer tous les clients sous forme de tableau
$allPatientsArray = $PatientsObj->getAllPatients();

