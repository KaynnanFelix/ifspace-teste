<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UFT-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>IFSpace - Index</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</html>

<body>
    <div class="container">
    </div>
    <?php
include "layout.php";
?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><a href="adicionar.php">Reserve já!<a></h1>
            <p class="lead">Garanta já a sua sala, teatro ou laboratório!</p>
        </div>
    </div>
    <table class="table table-striped" id="tableSpace">
        <thead>
            <tr>
                <th>Número</th>
                <th>Tipo</th>
                <th>Localização</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../back-end/services/jsonMethods.php";
            $spacesList = getJson("../back-end/jsons/spaces/spaceList.json");
            $id=0;
            foreach($spacesList as $space){
            echo "
                <tr>
                    <td>$space->numero</td>
                    <td>$space->tipo</td>
                    <td>$space->localizacao</td>
<<<<<<< HEAD
                    <td><a href='edit.php?id=$id'>Editar</a> || <a href='delete.php?id=$id'>Excluir</a></td>
=======
                    <td>editar</td>
>>>>>>> 664e07f2489bb5518e21001a3ba1334197f122e0
                </tr>";
            }
            $id++;
            ?>
        </tbody>
    </table>
</body>