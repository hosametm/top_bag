<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
require_once("config.php");
if (isset($_GET['width']) && isset($_GET['height'])) {
    $query = "SELECT DISTINCT price FROM `prices` where width = " . $_GET['width'] . " AND height = " . $_GET['height'] . "";
    $data = $conn->query($query);
    $prices = [];
    $i = 0;
    while ($row = mysqli_fetch_assoc($data)) {
        //$data['types'][$row['id']] = $row;
        $prices = $row;
    }
    $conn->close();
    echo json_encode($prices);
} else {
    die("no data");
    // print_r($_GET);die;
}
