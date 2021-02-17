<?php
$regexName = '/^[a-zA-Z]+$/';
$regexBirthDate = '/^\d{4}(-)(((0)[0-9])|((1)[0-2]))(-)([0-2][0-9]|(3)[0-1])$/';
$regexPhoneNumber = '/^0[1-68]([-. ]?[0-9]{2}){4}+$/';

if (isset($_POST['submit'])) {


    // lastName
    if (isset($_POST['lastName'])) {
        if (!preg_match($regexName, $_POST['lastName'])) {
            $errorMessages['lastName'] = 'Veuillez saisir un nom valide.';
        }
        if (empty($_POST['lastName'])) {
            $errorMessages['lastName'] = 'Veuillez saisir votre nom.';
        }
    }
    // firstName
    if (isset($_POST['firstName'])) {
        if (!preg_match($regexName, $_POST['firstName'])) {
            $errorMessages['firstName'] = 'Veuillez saisir un prénom valide.';
        }
        if (empty($_POST['firstName'])) {
            $errorMessages['firstName'] = 'Veuillez saisir votre prénom.';
        }
    }
    // birthDate
    if (isset($_POST['birthDate'])) {
        if (!preg_match($regexBirthDate, $_POST['birthDate'])) {
            $errorMessages['birthDate'] = 'Veuillez saisir une date valide.';
        }
        if ($_POST['birthDate'] >= date('Y-m-d')){
            $errorMessages['birthDate'] = 'Date impossible !';
        }
        if (empty($_POST['birthDate'])) {
            $errorMessages['birthDate'] = 'Veuillez saisir une date.';
        }
    }

    //phoneNumber
    if (isset($_POST['phoneNumber'])) {
        if (!preg_match($regexPhoneNumber, $_POST['phoneNumber'])) {
            $errorMessages['phoneNumber'] = 'Veuillez saisir un numéro de téléphone valide.';
        }
        if (empty($_POST['phoneNumber'])) {
            $errorMessages['phoneNumber'] = 'Veuillez saisir un numéro de téléphone.';
        }
    }

        //email
        if (isset($_POST['mail'])) {
            //filtre pour éviter une regex
            if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                $errorMessages['mail'] = 'Veuillez saisir une adresse mail valide';
            }
            if (empty($_POST['mail'])) {
                $errorMessages['mail'] = 'Veuillez saisir une adresse email.';
            }
        }

}