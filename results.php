<head>
    <link href="style_results.css"
          rel="stylesheet"
          type="text/css">
    <title>Implicit Bias Test Results</title>
</head>

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
$mysql_server = "localhost";
$mysql_db = "raroyst1_raroystonorgmain";
$mysql_port = "3306";
$mysql_user = "raroyst1_cfbd_cg";
$mysql_password = "W!SCsin2018";

// Connect to the database
$conn = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);

// Whoops. This shouldn't happen, but if we can't connect to the database "blow up" and stop here
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare our first query: get all the results for this particular user
$query1 = $conn->prepare("SELECT question, answer FROM cp_group_2 WHERE user_id = ? ORDER BY question");
$query1->bind_param("i", $user_id);

// Run our query to get the results from the database
$query1->execute();
$results1 = $query1->get_result();

// Prepare our second query: get all the average results for all questions
$query2 = $conn->prepare("SELECT question, avg(answer) as answer FROM cp_group_2 GROUP BY question ORDER BY question");

// Run our query to get the results from the database
$query2->execute();
$results2 = $query2->get_result();

echo '<body>';
echo '<table>';
echo '<tr>';
echo '<th>';
echo 'Questions';
echo '</th>';
echo '<th>';
echo 'Your results';
echo '</th>';
echo '<th>';
echo 'Average Result';
echo '</th>';
echo '</tr>';
while ($result2 = $results2->fetch_assoc()) {
    $result1 = $results1->fetch_assoc();
    echo '<tr><td>' . $result2["question"] . '</td><td>' . $result1["answer"] . '</td><td>' . $result2["answer"] . '</td></tr>';
}
echo '</table>';
echo '</body>';


// Close the query
$query1->close();
$query2->close();

// Close the connection
$conn->close();

?>
