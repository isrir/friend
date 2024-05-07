<?php
$friendsData = [
    ["name" => "shyam", "place" => "salem", "mobile" => 9080125737],
    ["name" => "vijay", "place" => "salem", "mobile" => 9182125737],
    ["name" => "ysuresh", "place" => "chennai", "mobile" => 9080125737]
];

header('Content-Type: application/json');
echo json_encode($friendsData);
?>