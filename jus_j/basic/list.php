<?php
include "connect.php";
$sql = "select * from publications";
$result = mysqli_query($conn, $sql);
$sql = "select * from researches";
$researches = mysqli_query($conn, $sql);
