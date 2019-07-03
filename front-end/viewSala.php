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
<title>IFSpace - ViewSala</title>
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
            <h1 class="display-4"><a href="addSala.php">Registre suas salas!<a></h1>
            <p class="lead">Liste aqui todas as salas que sua escola possui!</p>
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
            $salas = getJson("../back-end/jsons/espacos/salas/salas.json");
            $id=0;
            foreach($salas as $salas){
            echo "
                <tr>
                    <td>$salas->nome</td>
                    <td>$salas->tamanho</td>
                    <td>$salas->setor</td>

                    <td><a href='editSala.php?id=$id'>Editar</a> || <a href='deleteSala.php?id=$id'>Excluir</a></td>
                </tr>";
                $id++;
            }
            
            ?>
        </tbody>
    </table>
</body>