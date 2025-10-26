<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Allow cross-origin for local dev

$url = 'https://newsapi.org/v2/top-headlines?country=br&apiKey=59ec39b94ae5481aa4ddb562c45bd49c';
$response = file_get_contents($url);
$NewsData = json_decode($response);

if ($NewsData && isset($NewsData->articles)) {
    echo json_encode($NewsData->articles);
} else {
    echo json_encode(['error' => 'Failed to fetch news']);
}
?>