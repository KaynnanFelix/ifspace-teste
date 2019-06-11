<table>
<?php
function getJson($file){
//fetch data from json
$data = file_get_contents($file);
//decode into php array
$data = json_decode($data);
$index = 0;
foreach($data as $row){
    echo "

        <tr>
            <td>".$row->nome."</td>
            <td>".$row->senha."</td>

            <td>
                <a href='edit.php?index=".$index."'>Edit</a>
                <a href='delete.php?index=".$index."'>Delete</a>
            </td>
        </tr>
    ";

    $index++;
}
}
function getIdJson($file,$id){

}
function addJson($file){

}
function editJson($file,$id){

}
function deleteJson($file,$id){
    $data = file_get_contents($file);
    $data = json_decode($data);
    unset($data[$id]);
    $data=json_encode($data,JSON_PRETTY_PRINT);
    file_put_contents($file,$data);
}
getJson("../jsons/users/admin.json");
deleteJson("../jsons/users/admin.json",1);
?>
</table>