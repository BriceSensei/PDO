<?php
class Patiens extends DataBase
{

    public function getAllPatients()
    {

        $query = 'SELECT `id`, `lastname`, `firstname` FROM `patients`';

        $queryObj = $this->dataBase->query($query);

        $result = $queryObj->fetchAll();

        return $result;
    }
}
