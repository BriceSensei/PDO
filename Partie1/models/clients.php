<?php
// clients est un enfant de la classe Database, et hérite donc de ses attributs + méthodes.
class Clients extends DataBase
{

    public function getAllClients()
    {
        // utilisation de magic quote pour indiquer qu'il s'agit de champs et de table ...
        // On stock la requête dans une variable 
        $query = 'SELECT `id`, `lastname`, `firstname` FROM `clients`';

        // on utilise la méthode query pour executer notre requête
        $queryObj = $this->dataBase->query($query);

        // on utilise la methode fetchAll pour obtenir un tableau de notre requête
        $result = $queryObj->fetchAll(); // par défaut, va retourner un tableau associatif

        return $result; // on retourne le tableau
    }

    public function getAllClientsLimit()
    {
        // utilisation de magic quote pour indiquer qu'il s'agit de champs et de table ...
        // On stock la requête dans une variable 
        $query = 'SELECT `id`, `lastname`, `firstname` FROM `clients` LIMIT 20';

        // on utilise la méthode query pour executer notre requête
        $queryObj = $this->dataBase->query($query);

        // on utilise la methode fetchAll pour obtenir un tableau de notre requête
        $result = $queryObj->fetchAll(); // par défaut, va retourner un tableau associatif

        return $result; // on retourne le tableau
    }


    public function getAllClientsCard()
    {
        // utilisation de magic quote pour indiquer qu'il s'agit de champs et de table ...
        // On stock la requête dans une variable 
        $query = 'SELECT `id`, `lastname`, `firstname`, `card` FROM `clients` WHERE `card` = 1 LIMIT 20';

        // on utilise la méthode query pour executer notre requête
        $queryObj = $this->dataBase->query($query);

        // on utilise la methode fetchAll pour obtenir un tableau de notre requête
        $result = $queryObj->fetchAll(); // par défaut, va retourner un tableau associatif

        return $result; // on retourne le tableau
    }

    public function getAllClientsLetter()
    {
        // utilisation de magic quote pour indiquer qu'il s'agit de champs et de table ...
        // On stock la requête dans une variable 
        $query = 'SELECT `id`, `lastname`, `firstname` FROM `clients` WHERE `lastName` LIKE \'M%\' ORDER BY `lastName`';

        // on utilise la méthode query pour executer notre requête
        $queryObj = $this->dataBase->query($query);

        // on utilise la methode fetchAll pour obtenir un tableau de notre requête
        $result = $queryObj->fetchAll(); // par défaut, va retourner un tableau associatif

        return $result; // on retourne le tableau
    }



}
