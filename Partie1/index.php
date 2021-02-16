<?php
require_once 'controllers/index-controller.php'
?>

<!doctype html>
<html lang="fr">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<!-- On rows -->
<tr class="bg-primary">...</tr>
<tr class="bg-success">...</tr>
<tr class="bg-warning">...</tr>
<tr class="bg-danger">...</tr>
<tr class="bg-info">...</tr>

<!-- On cells (`td` or `th`) -->
<tr>
  <td class="bg-primary">...</td>
  <td class="bg-success">...</td>
  <td class="bg-warning">...</td>
  <td class="bg-danger">...</td>
  <td class="bg-info">...</td>
</tr>

    <h1 class="text-center m-3 pb-2">Affichage des données</h1>

    <div class="d-flex justify-content-center">
        <table class="table table-responsive-sm table-striped table-dark col-6 text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOM</th>
                    <th scope="col">Prénom</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // je fais un foreach pour parcourir mon tableau
                foreach($allClientsArray as $client){ ?>
                <tr>
                    <th class="bg-info"><?= $client['id'] ?></th>
                    <td class="bg-danger"><?= $client['lastname'] ?></td>
                    <td class="bg-info"><?= $client['firstname'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <h1 class="text-center m-3 pb-2">Exercice 2</h1>

    <div class="d-flex justify-content-center">
        <table class="table table-responsive-sm table-striped table-dark col-6 text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Spectacles</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // je fais un foreach pour parcourir mon tableau
                foreach($ShowTypeArray as $show){ ?>
                <tr>
                    <th class="bg-info"><?= $show['id'] ?></th>
                    <td class="bg-danger"><?= $show['type'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    
    <h1 class="text-center m-3 pb-2">Exercice 3</h1>

    <div class="d-flex justify-content-center">
        <table class="table table-responsive-sm table-striped table-dark col-6 text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOM</th>
                    <th scope="col">Prénom</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // je fais un foreach pour parcourir mon tableau
                foreach($allClientsArrayLimit as $client){ ?>
                <tr>
                    <th class="bg-info"><?= $client['id'] ?></th>
                    <td class="bg-danger"><?= $client['lastname'] ?></td>
                    <td class="bg-info"><?= $client['firstname'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <h1 class="text-center m-3 pb-2">Exercice 4</h1>

    <div class="d-flex justify-content-center">
        <table class="table table-responsive-sm table-striped table-dark col-6 text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOM</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Carte de fidélité</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // je fais un foreach pour parcourir mon tableau
                foreach($allClientsArrayCard as $client){ ?>
                <tr>
                    <th class="bg-info"><?= $client['id'] ?></th>
                    <td class="bg-danger"><?= $client['lastname'] ?></td>
                    <td class="bg-info"><?= $client['firstname'] ?></td>
                    <td class="bg-danger"><?= $client['card'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <h1 class="text-center m-3 pb-2">Exercice 5</h1> 

    <div class="d-flex justify-content-center">
        <table class="table table-responsive-sm table-striped table-dark col-6 text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOM</th>
                    <th scope="col">Prénom</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // je fais un foreach pour parcourir mon tableau
                foreach($allClientsArrayLetter as $client){ ?>
                <tr>
                    <th class="bg-info"><?= $client['id'] ?></th>
                    <td class="bg-danger"><?= $client['lastname'] ?></td>
                    <td class="bg-info"><?= $client['firstname'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>