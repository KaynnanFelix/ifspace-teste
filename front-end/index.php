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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</html>
<body>
    <div class="container">
    </div>
    <head>
        <nav class="navbar navbar-expand-sm bg-success justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">IFSpace</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Sobre</a>
                </li>  
                <form action="<?php echo "$_SERVER[PHP_SELF]"; ?>" method="POST" class="nav-item">
                    <input type="submit" class="nav-link" name="sair">
                </form>
            </ul>
        </nav>
    </head>
        <div class="container">
        <table class="table table-striped">
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
    
    <footer></footer>
    
</body>
<?php

?>