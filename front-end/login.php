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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php
    if(!$_POST){
    echo "<form action=$_SERVER[PHP_SELF] method=POST>
        <label for=urs>Nome</label>
        <input type=text name=r_username id=urs required class=form-control>
        <label for=pwd>Senha</label>
        <input type=password name=r_password id=pwd required class=form-control>
        <input type=submit value=login>
    </form>";
    }else{
        include "../back-end/login.php";
        if(login($_POST['r_username'],$_POST['r_password'],"../back-end/jsons/users/admin.json")){
            echo "<script>location.href='index.php'</script>";
        }else{
            echo "Usuário não encontrado!
            <form action=$_SERVER[PHP_SELF] method=POST>
        <label for=urs>Nome</label>
        <input type=text name=r_username id=urs required class=form-control value='$_POST[r_username]'>
        <label for=pwd>Senha</label>
        <input type=password name=r_password id=pwd required class=form-control>
        <input type=submit value=login>
    </form>
            ";

        }
    }
    
    ?>
</body>
</html>