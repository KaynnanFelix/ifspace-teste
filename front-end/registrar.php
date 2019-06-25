
<?php
if(isset($_POST['adicionar'])){
    include "../back-end/services/jsonMethods.php";
    class Register{
        function __construct(){
        $this->aula=$_POST['aula'];
        $this->professor=$_COOKIE['user'];
        $this->entrada=$_POST['entrada'];
        $this->saida=$_POST['saida'];
        }
    } 
    $register=new Register();
    addJson("../back-end/jsons/espacos/$/registros.json",$register);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IFSpace - Registrar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include "layout.php";
?>

<h2>Registrar Reserva</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="tipo">
    <option value="sala">Sala</option>
    <option value="teatro">Teatro</option>
    <option value="laboratorio">Laboratório</option>
  </select>
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Aula</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="aula">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Horário de entrada</span>
  </div>
  <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="entrada">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Horário de saída</span>
  </div>
  <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="saida">
</div>

<input type="submit" class="btn btn-success" name="adicionar">
</form>


</body>
</html>