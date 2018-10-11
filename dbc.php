<?php

//variables to connect to the database
$host = "localhost";
$username = "briankelly959";
$user_pass = "";
$database_in_use ="c9";

//Connecting to database using variables
$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

//if there are any values in the table, display them one at a time.
if ($mysqli->connect_errno) {
    echo "Failed to connect to database.";
}

