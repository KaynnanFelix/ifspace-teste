<?php
if(isset($_COOKIE['admin'])){
    header("location: index.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php
include "layout.php";
?>
<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Dados
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      <div class="card mx-auto" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Perfil</h5>
    <?php
include "../back-end/services/jsonMethods.php";
$users = getJson("../back-end/jsons/users/professor.json");
$logged = $_COOKIE["user"];
foreach ($users as $user) {
    if ($user->nome === $logged) {
        echo "<p class='card-text'>Nome: $user->nome</p>
        <p class='card-text'>Nome: $user->data_nasc</p>
        <p class='card-text'>Nome: $user->prontuario</p>
        ";
    }
}
?>
  </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Funções
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
       <a href="../front-end\minhasReservas.php">Minhas Reservas</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>