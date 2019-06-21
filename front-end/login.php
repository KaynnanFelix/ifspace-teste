<?php
if(isset($_COOKIE['user'])){
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
<body>
<head>
        <nav class="navbar navbar-expand-sm bg-success justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">IFSpace</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Sobre</a>
                </li>  
            </ul>
        </nav>
    </head>
    <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4 justify-content-center" style="color:white">
            <div class="card" style="width:100%">
                <div class="card-body">
                    <h1 class="text-success" style="color:black; text-align:center">IFSpace Login</h1>
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
                            if(login($_POST['r_username'],$_POST['r_password'],"../back-end/jsons/users/admin.json")){
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
                    ?>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
        </div>
    </div>  
</body>
</html>