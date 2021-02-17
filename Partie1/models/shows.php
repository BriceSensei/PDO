<?php
// clients est un enfant de la classe Database, et hérite donc de ses attributs + méthodes.
class Shows extends DataBase
{

    public function getAllShows()
    {
        // utilisation de magic quote pour indiquer qu'il s'agit de champs et de table ...
        // On stock la requête dans une variable 
        $queryShows = 'SELECT `id`, `title`, `performer`, `date`, `startTime` FROM `shows` ORDER BY `title` ASC';

        // on utilise la méthode query pour executer notre requête
        $queryShowsObj = $this->dataBase->query($queryShows);

        // on utilise la methode fetchAll pour obtenir un tableau de notre requête
        $resultShows = $queryShowsObj->fetchAll(); // par défaut, va retourner un tableau associatif

        return $resultShows; // on retourne le tableau
    }

}