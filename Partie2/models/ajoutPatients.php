<?php
require_once '../controllers/ajoutPatients-controller.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Partie 2 PDO</title>
</head>

<body>

    <div id="container">

        <h1 class="text-center mb-5">Création Patient</h1>

        <form class="container col-4" action="/Partie2/models/ajoutPatients.php" method="POST">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row m-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Bernard" value="<?= isset($_POST['lastName']) ? htmlspecialchars($_POST['lastName']) : '' ?>" required>
                        <label for="lastName" class="form-label">Nom du patient</label>
                    </div>
                    <div class="text-danger">
                        <!-- message d'erreur si pas validé -->
                        <span><?= isset($errorMessages['lastName']) ? $errorMessages['lastName'] : '' ?></span>
                    </div>
                </div>

                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Tapis" value="<?= isset($_POST['firstName']) ? htmlspecialchars($_POST['firstName']) : '' ?>" required />
                        <label for="firstName" class="form-label">Prénom du patient</label>
                    </div>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['firstName']) ? $errorMessages['firstName'] : '' ?></span>
                    </div>
                </div>

                <div class="form-outline mb-4">
                    <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="05/06/2077" value="<?= isset($_POST['birthDate']) ? $_POST['birthDate'] : '' ?>" required>
                    <label for="birthDate" class="form-label">Date de naissance du patient</label>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['birthDate']) ? $errorMessages['birthDate'] : '' ?></span>
                    </div>
                </div>

                <div class="form-outline mb-4">
                    <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="0606060606" value="<?= isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '' ?>" required>
                    <label for="phoneNumber" class="form-label">Numéro de téléphone du patient</label>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['phoneNumber']) ? $errorMessages['phoneNumber'] : '' ?></span>
                    </div>
                </div>

                <div class="form-outline mb-4">
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Bernard@tapis.fr" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>" required>
                    <label for="email" class="form-label">Adresse mail du patient</label>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['mail']) ? $errorMessages['mail'] : '' ?></span>
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-center mb-4">
                <button type="submit" class="btn btn-primary btn-block mb-2 m-4" name="submit">Envoyer</button>
                <a href="/Partie2/index.php" type="submit" class="btn btn-danger btn-block mb-2 m-4" name="submit">Retour</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>