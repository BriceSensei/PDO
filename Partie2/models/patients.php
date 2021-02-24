
<?php
require_once '../controllers/index-controller.php';
?>
<!doctype html>
<html lang="fr">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<h1 class="text-center m-3 pb-2">Affichage des données</h1>

<div class="d-flex justify-content-center">
    <table class="table table-responsive-sm table-striped table-dark col-6 text-center">
        <thead>
            <tr>
                <th scope="col">NOM</th>
                <th scope="col">Prénom</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Tél</th>
                <th scope="col">Mail</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // je fais un foreach pour parcourir mon tableau
            foreach ($allPatientsArray as $key => $patient) { ?>
                <tr class="<?= ($key % 2) ? "table-info" : "table-danger" ?> text-dark">
                    <td><?= $patient['lastname'] ?></td>
                    <td><?= $patient['firstname'] ?></td>
                    <td><?= $patient['birthdate'] ?></td>
                    <td><?= $patient['phone'] ?></td>
                    <td><?= $patient['mail'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<div class="d-flex justify-content-center m-5">
<a href="/Partie2/models/ajoutPatients.php" class="btn btn-primary">Ajouter Patients</a>
</div>


    <!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>