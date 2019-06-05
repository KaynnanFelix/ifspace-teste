<?php
session_start();
if(!$_POST){
    echo "teste";
}else{
    if(isset($_POST['r_username']) && isset($_POST['r_password'])){
        if($_POST['r_username'] == 'admin_username' && $_POST['password'] == 'admin_password'){
            $_SESSION['login'] = $_POST['r_username'];
        } else {
            
        }

    }

}
?>