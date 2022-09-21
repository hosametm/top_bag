<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
require_once("../config/config.php");
if (isset($_GET['width']) && isset($_GET['height'])) {

    $data = mysqli_query($conn, "SELECT DISTINCT price FROM `prices` where (width = '" . $_GET['width'] . "' AND height = '" . $_GET['height'] . "') OR (width = '" . $_GET['height'] . "' AND height = '" . $_GET['width'] . "')");
    $prices = [];
    $i = 0;
    while ($row = mysqli_fetch_assoc($data)) {
        $prices = $row;
    }
    $conn->close();
    if (!empty($prices)) {
        echo json_encode($prices);
    } else {
        die("Valid Input");
    }
} else {
    die("no data");
}
