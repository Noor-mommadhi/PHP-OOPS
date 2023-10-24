<?php
include 'con.php';
$obj= new configure();


if (isset($_GET['deleteid'])) {
    $deleteid = $_GET['deleteid'];
    $obj->deleteRecord($deleteid);
}

?>
