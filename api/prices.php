<?php
header('Content-Type: application/json; charset=utf-8');

require_once("config.php");

$query = "SELECT * FROM `prices`";
$data = $conn->query($query);
$prices = [];
if ($data->num_rows > 0) {
    // OUTPUT DATA OF EACH ROW
    while ($row = $data->fetch_assoc()) {
        $prices[] = $row;
    }
} else {
    echo "0 results";
}
$conn->close();
echo json_encode($prices);
