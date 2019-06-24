<?php
if(isset($_COOKIE['user']) or isset($_COOKIE['admin'])){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IFSpace - Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  grid-gap: 10px;
  padding: 10px;
}

.grid-container > div {
  text-align: center;
  padding: 40px 0;
  font-size: 50px;
}

.item5 {
  grid-row-start: 2;
  grid-column-start: 2;
  grid-row-end: 4;
  grid-column-end: 3;
}
</style>
<body>
<?php
include "layout.php";
?>

<div class="grid-container">
  <div class="item1"></div>
  <div class="item2"></div>
  <div class="item3"></div>  
  <div class="item4"></div>
  <div class="item5"><h1 class="text-success" style="color:black; text-align:center">IFSpace - Login</h1>
                    <?php
                      if(!$_POST){
                        echo "<form action=$_SERVER[PHP_SELF] method=POST>
                            <div class='input-group mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text label label-success'>Nome</span>
                                </div>
                                <input type=text name=r_username id=urs required class=form-control>
                            </div>
                            <div class='input-group mb-3 '>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text label label-success'>Senha</span>
                                </div>
                                <input type=password name=r_password id=pwd required class=form-control>
                            </div>
                            <input class='btn btn-success form-control' type=submit value=login style='text-align:center'>
                        </form>";
                        }else{
                            include "../back-end/login.php";
                            if(login($_POST['r_username'],$_POST['r_password'],"../back-end/jsons/users/professor.json","user")){
                                echo "<script>location.href='index.php'</script>";
                            }else{
                                echo "
                                <form action=$_SERVER[PHP_SELF] method=POST>
                                    <div>
                                        <input type=text name=r_username id=urs required class=form-control value='$_POST[r_username]'>
                                    </div>
                                    <div>
                                        <input type=password name=r_password id=pwd required class=form-control>
                                    </div>
                                        <input type=submit value=login class='btn btn-success form-control' style='text-align:center'>
                                    <div class='alert alert-danger alert-dismissible fade show'>
                                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                        Usuário não encontrado!
                                    </div>
                                </form>";
                        }
                    }
                    ?></div>
  <div class="item6"></div>
  <div class="item7"></div>
  <div class="item8"></div>  
</div>

    
</body>
</html>