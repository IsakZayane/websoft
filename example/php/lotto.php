<?php
/**
 * A page controller providing a json repsonse
 */
require "config.php";

// Create a new lotto row
$draw = [];
do {
    $number = rand(1, 35);
    if (in_array($number, $draw)) {
        continue;
    }
    $draw[] = $number;
} while (count($draw) < 7);


// Get the lotto row, it the user supplied it through the query string
$lotto = $_GET["lotto"] ?? null;

$user = null;
if ($lotto) {
    $user = explode(",", $lotto);
}

if ($user) {
    $user = array_map(function($val) {
        return intval($val);
    },
    $user);

    sort($user);
}


// Prepare a JSON response
sort($draw);
$data = [
    "version" => "1.0.0",
    "message" => "The great lotto factory!",
    "howto" => "Add you lotto row as a comma separated string through the querystring, like ?lotto=1,2,7",
    "incoming" => $lotto,
    "user" => $user,
    "draw" => $draw,
    "hits" => count(array_intersect($user, $draw)),
];


// Send a JSON response
header("Content-Type: application/json");
echo json_encode($data, JSON_PRETTY_PRINT);
