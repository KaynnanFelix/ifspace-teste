<?php
if(isset($_POST['adicionar'])){
    include "../back-end/services/jsonMethods.php";
    class Register{
        function __construct(){
        $this->nome=$_POST['nome'];
        $this->senha=$_POST['senha'];
        $this->area=$_POST['area'];
        $this->data_nasc=$_POST['data_nasc'];
        $this->prontuario=$_POST['prontuario'];

        }
    }
    $register=new Register();
    addJson("../back-end/jsons/users/professor.json",$register);
    header("Location: login.php");
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
<?php
include "layout.php";
?>
 <div class="w-25 mx-auto mt-5">
<h1 class="text-success" style="color:black text-align:center">Cadastro de Usuários</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Nome Completo:</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nome">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Senha:</span>
  </div>
  <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="senha">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Área</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="area">
    <option>Departamento de Informática e Turismo</option>
    <option>Departamento de Ciências Humanas</option>
    <option>Departamento de Ciências Exatas</option>
  </select>
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Data de Nascimento:</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="data_nasc">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Prontuário</span>
  </div>
  <input type="integer" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="prontuario">
</div>

<input type="submit" class="btn btn-success" name="adicionar" value="Cadastrar" style=text-align:center>
</form>
</div>
</body>