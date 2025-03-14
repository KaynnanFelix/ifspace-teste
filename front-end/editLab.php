<?php
if(!isset($_COOKIE['admin'])){
  header("Location:erroAuth.php");
}
include "../back-end/services/jsonMethods.php";

if(isset($_POST['adicionar'])){
    class Register{
        function __construct(){
        $this->nome=$_POST['nome'];
        $this->tamanho=$_POST['tamanho'];
        $this->setor=$_POST['setor'];
        }
    }
    $register=new Register();
    editJson("../back-end/jsons/espacos/laboratorio/laboratorios.json",$register,$_GET['id']);
    header("Location: viewLab.php");
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
$laboratorio=getIdJson("../back-end/jsons/espacos/laboratorio/laboratorios.json",$_GET['id']);
?>
<h2>Editar laboratório</h2>
<form method="post" action="editLab.php?id=<?php echo $_GET['id'] ?>">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Nome do laboratório</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nome" value="<?php echo $laboratorio->nome; ?>"> 
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Tamanho</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="tamanho">
    <option>Pequeno</option>
    <option>Médio</option>
    <option>Grande</option>
  </select>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Localização do laboratório</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="setor" value="<?php echo $laboratorio->setor; ?>">
</div>
<input type="submit" class="btn btn-primary" name="adicionar">
</form>
</body>