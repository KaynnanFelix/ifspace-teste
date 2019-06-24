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
$data[]=$obj;
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
    $data = array_values($data);
    saveJson($file,$data);
}
function saveJson($file,$data){
    $data=json_encode($data);
    file_put_contents($file,$data);
}
?>