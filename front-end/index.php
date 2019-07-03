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
        
    <div class="card w-25 mx-auto mt-5" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Faça aqui sua pesquisa!</h5>
    <h6 class="card-subtitle mb-2 text-muted">Insira o tipo e o nome</h6>
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="tipo">
    <option selected>Escolher...</option>
    <option value="1">Um</option>
    <option value="2">Dois</option>
    <option value="3">Três</option>
  </select>
</div>


<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Nome</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Escolher...</option>
    <option value="1">Um</option>
    <option value="2">Dois</option>
    <option value="3">Três</option>
  </select>
</div>

  </div>
</div>
</body>