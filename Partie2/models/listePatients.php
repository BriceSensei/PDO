<?php
class Patient extends DataBase
{

    public function getAllPatients()
    {

        $query = 'SELECT `lastname`, `firstname`, `birthdate`, `phone`, `mail` FROM `patients`';

        $queryObj = $this->dataBase->query($query);

        $result = $queryObj->fetchAll();

        return $result;
    }

    public function addPatient(array $patientDetails){

        // Je mets en place des marqueurs pour preparer ma requête avec des valeurs recuperées via le from
        $query = 'INSERT INTO patients (lastname, firstname, birthdate, phone, mail)
        value (:lastname, :firstname, :birthdate, :phone, :mail)';
        
        //Nous preparons notre requête à l'aide de la methode prepare
        $addPatientQuery = $this->dataBase->prepare($query);

        //je bind mes valeurs à l'aide de la methode bindvalue()
        $addPatientQuery->bindValue(':lastname', $patientDetails['lastName'], PDO::PARAM_STR);
        $addPatientQuery->bindValue(':firstname', $patientDetails['firstName'], PDO::PARAM_STR);
        $addPatientQuery->bindValue(':birthdate', $patientDetails['birthDate'], PDO::PARAM_STR);
        $addPatientQuery->bindValue(':phone', $patientDetails['phoneNumber'], PDO::PARAM_STR);
        $addPatientQuery->bindValue(':mail', $patientDetails['email'], PDO::PARAM_STR);

        //tester et executer la requête pour afficher le message erreur
        if ($addPatientQuery->execute()){
            return true;
        }else {
            return false;
        }
    }
}
