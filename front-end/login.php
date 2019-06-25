<?php
if (isset($_COOKIE['user']) or isset($_COOKIE['admin'])) {
    header('location: index.php');
}
if (!isset($_POST['login'])){
    include 'layout.php';
    echo "
    <!DOCTYPE html>
    <html lang='pt-br'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>IFSpace - Login</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
        integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'
        integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'>
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'
        integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'>
    </script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'
        integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'>
    </script>
</head>
<body>
    <div class='w-25 mx-auto mt-5'>
    <h1 class='text-success' style='color:black; text-align:center'>IFSpace - Login</h1>
    <form action=$_SERVER[PHP_SELF] method=POST>
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
        <input name='login' class='btn btn-success form-control' type=submit value=login style='text-align:center'>
    </form>
</div>
</body>
</html>";
} else {
    include "../back-end/login.php";
    if (login($_POST['r_username'], $_POST['r_password'], "../back-end/jsons/users/professor.json", "user")) {
        echo "<script>location.href='index.php'</script>";
    } else {
        include 'layout.php';
        echo "
        <!DOCTYPE html>
    <html lang='pt-br'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>IFSpace - Login</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
        integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'
        integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'>
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'
        integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'>
    </script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'
        integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'>
    </script>
</head>
<body>
    <div class='w-25 mx-auto'>
    <h1 class='text-success' style='color:black; text-align:center'>IFSpace - Login</h1>
    <form action=$_SERVER[PHP_SELF] method=POST>
        <div class='input-group mb-3'>
            <div class='input-group-prepend'>
                <span class='input-group-text label label-success'>Nome</span>
            </div>
            <input type=text name=r_username id=urs required class=form-control value='$_POST[r_username]'>
        </div>
        <div class='input-group mb-3 '>
            <div class='input-group-prepend'>
                <span class='input-group-text label label-success'>Senha</span>
            </div>
            <input type=password name=r_password id=pwd required class=form-control>
        </div>
        <input name='login' class='btn btn-success form-control' type=submit value=login style='text-align:center'>
    </form>
    <div class='alert alert-success alert-dismissible'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Erro</strong> Usuário ou senha não encontrados
</div>
</div>
</body>
</html>";
    }
}
?>


