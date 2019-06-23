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
include "../back-end/services/jsonMethods.php";
echo "

"
?>
<form action="">
<table class="table table-striped" id="tableSpace">
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Tipo</th>
                    <th>Localização</th>
                    <th>Reservar</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include "../back-end/services/jsonMethods.php";
            $spacesList = getJson("../back-end/jsons/spaces/spaceList.json");
            foreach($spaceList as $space){
            echo "
                <tr>
                    <td>$space->numero</td>
                    <td>$space->tipo</td>
                    <td>$space->localizacao</td>
                    <td></td>
                </tr>";
            }
            ?>
            </tbody>
        </table>
</form>
</body>