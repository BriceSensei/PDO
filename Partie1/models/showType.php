<?php
// clients est un enfant de la classe Database, et hérite donc de ses attributs + méthodes.
class ShowType extends DataBase
{

    public function getAllShowType()
    {
        // utilisation de magic quote pour indiquer qu'il s'agit de champs et de table ...
        // On stock la requête dans une variable 
        $queryShowType = 'SELECT `id`, `type` FROM `showtypes`';

        // on utilise la méthode query pour executer notre requête
        $queryShowTypeObj = $this->dataBase->query($queryShowType);

        // on utilise la methode fetchAll pour obtenir un tableau de notre requête
        $resultShowType = $queryShowTypeObj->fetchAll(); // par défaut, va retourner un tableau associatif

        return $resultShowType; // on retourne le tableau
    }

}
