<?php
function getJson($file){
$data = file_get_contents($file);
$data = json_decode($data);
return $data;
}
function getIdJson($file,$id){
$data=getJson($file);
return $data[$id];
}
function addJson($file,$obj){
$data=getJson($file);
$data[]=$data;
saveJson($file,$data);
}
function editJson($file,$obj,$id){
$data=getJson($file);
$data[$id]=$obj;
saveJson($file,$data);
}
function deleteJson($file,$id){
    $data=getJson($file);
    unset($data[$id]);
    saveJson($file,$data);
}
function saveJson($file,$data){
    $data=json_encode($data,JSON_PRETTY_PRINT);
    file_put_contents($file,$data);
}
?>