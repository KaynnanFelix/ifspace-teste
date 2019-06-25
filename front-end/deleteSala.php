<?php
if(!isset($_COOKIE['admin'])){
    header("Location:erroAuth.php");
}
include "../back-end/services/jsonMethods.php";
deleteJson("../back-end/jsons/espacos/salas/salas.json",$_GET['id']);
header("Location: viewSala.php")
?>