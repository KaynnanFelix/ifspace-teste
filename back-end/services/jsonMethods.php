<?php
function getJson($file){
//fetch data from json
$data = file_get_contents($file);
//decode into php array
$data = json_decode($data);
print_r($data);
$index = 0;
/*foreach($data as $row){
    echo "
        <tr>
            <td>".$row->id."</td>
            <td>".$row->firstname."</td>
            <td>".$row->lastname."</td>
            <td>".$row->address."</td>
            <td>".$row->gender."</td>
            <td>
                <a href='edit.php?index=".$index."'>Edit</a>
                <a href='delete.php?index=".$index."'>Delete</a>
            </td>
        </tr>
    ";

    $index++;
}*/
}
function getIdJson($file,$id){

}
function addJson($file){

}
function editJson($file,$id){

}
function deleteJson($file,$id){

}
getJson("./jsons/admin.json");
?>