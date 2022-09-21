<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
require_once("../config/config.php");

if (isset($_GET['price_id']) && isset($_GET['price_value'])) {
    $price_id = $_GET['price_id'];
    $price_value = $_GET['price_value'];
    $query = "UPDATE `prices` SET price = $price_value WHERE id = $price_id ";
    $conn->query($query);
    die('1');
} else {
    die('0');
}
