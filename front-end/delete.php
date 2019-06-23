<?php
include "../back-end\services\jsonMethods.php";
deleteJson("../back-end/jsons/spaces/spaceList.json",$_GET['id']);
header("Location: reservar.php")
?>