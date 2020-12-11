<head>
    <link href="style_results.css"
          rel="stylesheet"
          type="text/css">
    <link href="style_index.css"
          rel="stylesheet"
          type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Nunito+Sans&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Nunito+Sans&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Nunito&family=Nunito+Sans&family=Pacifico&display=swap" rel="stylesheet">
    <title>Implicit Bias Test Results</title>
    <h1 align="center">
        PHP Panthers
    </h1>
    <nav>
        <ul>
            <li><a href="index.php"target="_blank">Homepage</a></li>
            <li><a href="q1.php"target="_blank">Survey</a></li>
            <li><a class="active" href="results.php">Results</a></li>
            <li><a href="reflections.php"target="_blank">Reflections</a></li>
            <li><a href="about.php"target="_blank">About</a></li>
            <li style="float: right;"><a>PHP Panthers</a></li>
        </ul>
    </nav>
</head>

<?php

// Created by: Bryan Knowles
// Based on:
// Last Modified on: Oct 28, 2020
// Last Modified by: Bryan Knowles

// Grab the user id from the POST data sent to us from previous page
$user_id = $_POST["user_id"];

// This is to store any recieved feedback
include "panthers_feedback_store.php";

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

// Prepare our third query: get all the average results for all questions
$query3 = $conn->prepare("SELECT DISTINCT(question), answer, y FROM (SELECT question, answer, (COUNT(answer)) y from cp_group_2 GROUP by question, answer ORDER by COUNT(answer) DESC) x group by question order by question");

// Run our query to get the results from the database
$query3->execute();
$results3 = $query3->get_result();



echo '<body>';
echo '<table class="center">';
echo '<tr>';
echo '<th>';
echo 'Questions';
echo '</th>';
echo '<th>';
echo 'Your results';
echo '</th>';
echo '<th>';
echo 'Average result';
echo '</th>';
echo '<th>';
echo 'Most frequent result';
echo '</th>';
echo '</tr>';

while ($result2 = $results2->fetch_assoc()) {
    $result1 = $results1->fetch_assoc();
    $result3 = $results3->fetch_assoc();
    echo '<tr><td>' . $result2["question"] . '</td><td>' . $result1["answer"] . '</td><td>' . round($result2["answer"]) . '</td><td>' . round($result3["answer"]) . '</td></tr>';
}
echo '</table>';
echo '</body>';


// Close the query
$query1->close();
$query2->close();
$query3->close();


// $query3 = $conn->prepare("SELECT question, count(answer) as answer FROM cp_group_2 GROUP BY question ORDER BY question");
// $query3->execute();
// $results3 = $query3->get_result();

//find the mode
//SELECT DISTINCT(question), answer, y FROM (SELECT question, answer, (COUNT(answer)) y from cp_group_2 GROUP by question, answer ORDER by COUNT(answer) DESC) x group by question

// while ($result3 = $results3->fetch_assoc()) {
//     echo '<tr><td>' . $result3["question"] . '</td><td>' . $result3["answer"] . '</td><td>' . round($result3["answer"]) . '</td></tr>';
// }

// Close the connection
$conn->close();

?>

</div>
<div class="footer">
    <p align = "center">Created by Nirmit Jallawar, Saurav Mathur, Ashley Massey and Yutong Wang for LIS 500</p>
</div>
