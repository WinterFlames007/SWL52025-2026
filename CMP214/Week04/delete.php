<?php
include("./db.php");
$sql = "Delete from tblEmp where ID = ".$_GET["eid"]."";
    $result = $conn->query($sql);
    echo "<script>alert('Employee is added to the system')</script>";
    header("Location: ./index.php");
?>