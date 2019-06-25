<?php
if(!isset($_COOKIE['admin'])){
    header("Location:erroAuth.php");
}
include "../back-end/services/jsonMethods.php";
deleteJson("../back-end/jsons/espacos/teatro/teatros.json",$_GET['id']);
header("Location: viewTeatro.php")
?>