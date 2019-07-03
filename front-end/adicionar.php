<?php
if(isset($_POST['adicionar'])){
    include "../back-end/services/jsonMethods.php";
    $horarios=getJson("../back-end/jsons/spaces/spaceList.json");
    class Register{
        function __construct(){
        $this->nome=$_POST['nome'];
        $this->professor=$_COOKIE['user'];
        $this->entrada=$_POST['entrada'];
        $this->saida=$_POST['saida'];
        }
    }
    $register=new Register();
    addJson("../back-end/jsons/espacos/".$_GET['tipo']."/registros.json",$register);
    header("Location: reservar.php");
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
<h2>Adicionar reserva</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
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
<input type="submit" class="btn btn-primary" name="adicionar">
</form>
</body>