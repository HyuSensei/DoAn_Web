<?php
require_once('./db/config.php');
$id = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT*FROM products WHERE id=$id";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
    echo json_encode($row);
}
?>