<?php
if(isset($_POST['adicionar'])){
    include "../back-end/services/jsonMethods.php";
    class Register{
        function __construct(){
        $this->nome=$_POST['nome'];
        $this->tamanho=$_POST['tamanho'];
        $this->setor=$_POST['setor'];
        }
    }
    $register=new Register();
    addJson("../back-end/jsons/espacos/laboratorio/laboratorios.json",$register);
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
?>
<h2>Adicionar laboratório</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Nome do laboratório</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nome">
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
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="setor">
</div>
<input type="submit" class="btn btn-primary" name="adicionar">
</form>
</body>