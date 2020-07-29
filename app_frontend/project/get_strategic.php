<?php
include '../../administrator/connect.php';
$sql = "SELECT * FROM tb_strategic WHERE strategic_id={$_GET['strategic_id']}";
$query = mysqli_query($conn, $sql);

$json = array();
while($result = mysqli_fetch_assoc($query)) {    
    array_push($json, $result);
}
echo json_encode($json);