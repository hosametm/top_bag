<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
require_once("../config/config.php");
$data = mysqli_query($conn, "SELECT * FROM `prices`");
$prices = [];
$i = 0;
while ($row = mysqli_fetch_assoc($data)) {
    $prices[] = $row;
}
$conn->close();
if (!empty($prices)) {
    echo json_encode($prices);
} else {
    die("0");
}
