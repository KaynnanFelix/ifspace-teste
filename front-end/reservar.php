
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
            <h1 class="display-4"><a href="adicionar.php?tipo=<?php echo $_POST["tipo"];?>&nome=<?php echo $_POST["nome"];?>">Reserve já!<a></h1>
            <p class="lead">Garanta já a sua sala, teatro ou laboratório!</p>
        </div>
    </div>
    <table class="table table-striped" id="tableSpace">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Local<th>
                <th>Professor</th>
                <th>Entrada</th>
                <th>Saída</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include "../back-end/services/jsonMethods.php";
            $espacos = getJson("../back-end/jsons/espacos/".$_POST['tipo']."/registros.json");
            $results=array();
            foreach($espacos as $espaco){
                if($espaco->local===$_POST['nome']){
                    $results[]=$espaco;
                }
            }
            foreach($results as $espaco){
            echo "
                <tr>
                    <td>$espaco->nome</td>
                    <td>$espaco->local<td>
                    <td>$espaco->professor</td>
                    <td>$espaco->entrada</td>
                    <td>$espaco->saida</td>
                </tr>";
            }
            ?>
            </tbody>
        </tbody>
    </table>
</body>