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
    <script src="search.js"></script>
</html>
<body>
    <div class="container">
    </div>
<?php
include "layout.php";
?>
        <div class="container">
        <input type="text" id="searchInput" onkeyup="searchSpace()" placeholder="Pesquipe por número, aula, professor ou localização">
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
                <tr>
                    <td>14</td>
                    <td>AW2</td>
                    <td>Josceli</td>
                    <td>Bloco C</td>
                </tr>
                <tr>
                    <td>321</td>
                    <td>GEI</td>
                    <td>Joscéli</td>
                    <td>Bloco A</td>
                </tr>
            </tbody>
        </table>
    </div>  
</body>