<?php
if(isset($_POST['sair'])){

    $del=setcookie('user','',time() - 3600,'/');

}
?>
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
    <script src="../back-end\javascript\search.js"></script>
</html>
<body>
    <div class="container">
    </div>
<?php
include "layout.php";
?>
        <div class="container">
        <input id="type" type="radio" name="type" value="0" checked>Número
        <input id="type" type="radio" name="type" value="1">Aula
        <input id="type" type="radio" name="type" value="2">Professor
        <input id="type" type="radio" name="type" value="3">Localização
        <input type="text" class="form-control" id="searchInput" onkeyup="searchSpace()" placeholder="Pesquise ...">
        <table class="table table-striped" id="tableSpace">
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Aula</th>
                    <th>Professor</th>
                    <th>Localização</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include "../back-end/services/jsonMethods.php";
            $spaces = getJson("../back-end/jsons/spaces/space.json");
            foreach($spaces as $space){
            echo "
                <tr>
                    <td>$space->numero</td>
                    <td>$space->aula</td>
                    <td>$space->professor</td>
                    <td>$space->localizacao</td>
                </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>  
</body>