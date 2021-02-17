<?php

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Partie 2 PDO</title>
</head>

<body>

    <h1 class="text-center mb-5">Création Patient</h1>

    <form class="container col-4" action="/Partie2/index.php">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Bernard" />
                    <label for="lastName" class="form-label">Nom du patient</label>
                </div>
            </div>

            <div class="col">
                <div class="form-outline">
                    <input type="text" id="firstName" name="firstName" class="form-control"  placeholder="Tapis"/>
                    <label for="firstName" class="form-label">Prénom du patient</label>
                </div>
            </div>
        </div>

        <div class="form-outline mb-4">
            <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="05/06/2077">
            <label for="birthDate" class="form-label">Date de naissance du patient</label>
        </div>

        <div class="form-outline mb-4">
            <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="0606060606">
            <label for="phoneNumber" class="form-label">Numéro de téléphone du patient</label>
        </div>

        <div class="form-outline mb-4">
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Bernard@tapis.fr">
            <label for="email" class="form-label">Adresse mail du patient</label>
        </div>


        <div class="d-flex justify-content-center mb-4">
        <button type="submit" class="btn btn-primary btn-block mb-4">Envoyer</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>