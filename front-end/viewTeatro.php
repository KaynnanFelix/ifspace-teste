<?php
if(!isset($_COOKIE['admin'])){
    header("Location:erroAuth.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UFT-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>IFSpace - ViewTeatro</title>
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
            <h1 class="display-4"><a href="addTeatro.php">Registre seus teatros!<a></h1>
            <p class="lead">Liste aqui todas os teatros que sua escola possui!</p>
        </div>
    </div>
    <table class="table table-striped" id="tableSpace">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Tamanho</th>
                <th>Setor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../back-end/services/jsonMethods.php";
            $teatros = getJson("../back-end/jsons/espacos/teatro/teatros.json");
            $id=0;
            foreach($teatros as $teatro){
            echo "
                <tr>
                    <td>$teatro->nome</td>
                    <td>$teatro->tamanho</td>
                    <td>$teatro->setor</td>

                    <td><a href='editTeatro.php?id=$id'>Editar</a> || <a href='deleteTeatro.php?id=$id'>Excluir</a></td>
                </tr>";
                $id++;
            }
            
            ?>
        </tbody>
    </table>
</body>