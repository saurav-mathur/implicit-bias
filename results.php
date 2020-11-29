<?php

// Created by: Bryan Knowles
// Based on:
// Last Modified on: Oct 28, 2020
// Last Modified by: Bryan Knowles

// Grab the user id from the POST data sent to us from previous page
$user_id = $_POST["user_id"];

// Store the answer to the previous question, if applicable
include "store-answer.php";

// Time to retreive from the database all data we've collected for this visitor throughout the survey

// Database settings
// (copy these as necessary for your own projects)
$mysql_server="localhost";
$mysql_db="raroyst1_raroystonorgmain";
$mysql_port="3306";
$mysql_user="raroyst1_cfbd_cg";
$mysql_password="W!SCsin2018";

// Connect to the database
$conn = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);

// Whoops. This shouldn't happen, but if we can't connect to the database "blow up" and stop here
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare our first query: get all the results for this particular user
$query = $conn->prepare("SELECT question, answer FROM sharedsurvey WHERE user_id = ? ORDER BY question");
$query->bind_param("i", $user_id);

// Run our query to get the results from the database
$query->execute();
$results = $query->get_result();

// Loop through and display the results
echo '<p>Your results:</p>';
while ($result = $results->fetch_assoc()){
  echo '<p><b>'.$result["question"].':</b> '.$result["answer"].'</p>';
}

// Close the query
$query->close();

// Prepare our second query: get all the average results for all questions
$query = $conn->prepare("SELECT question, avg(answer) as answer FROM sharedsurvey GROUP BY question ORDER BY question");

// Run our query to get the results from the database
$query->execute();
$results = $query->get_result();

// Loop through and display the results
echo '<p>Average results:</p>';
while ($result = $results->fetch_assoc()){
  echo '<p><b>'.$result["question"].':</b> '.$result["answer"].'</p>';
}

// Close the query
$query->close();

// Close the connection
$conn->close();

?>