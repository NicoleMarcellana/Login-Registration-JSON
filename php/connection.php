<?php
// Define the path to the JSON file
define('USER_DATA_FILE', 'users.json');

// Function to read user data from the JSON file
function readUserData() {
    if (!file_exists(USER_DATA_FILE)) {
        return [];
    }
    $jsonData = file_get_contents(USER_DATA_FILE);
    return json_decode($jsonData, true);
}

// Function to write user data to the JSON file
function writeUserData($data) {
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents(USER_DATA_FILE, $jsonData);
}
?>
