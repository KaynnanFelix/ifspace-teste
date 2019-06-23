<?php
function login($username,$password,$file){
include "services/jsonMethods.php";
$users=getJson($file);
foreach($users as $user){
    if($username===$user->nome and $password===$user->senha){
        setcookie("admin", $username, time() + (86400 * 30), "/");
        return true;
    }
}
return false;
}
?>