<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Fonts-->
    <link href="style_results.css"
          rel="stylesheet"
          type="text/css">
    <link href="style_index.css"
          rel="stylesheet"
          type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Nunito+Sans&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Nunito+Sans&family=Pacifico&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Nunito&family=Nunito+Sans&family=Pacifico&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
    <!--Add title-->
    <title>Implicit Bias Test Results</title>
</head>
<body>
    <!--Add heading-->
<h1 class="topHead">
    PHP Panthers
</h1>
<!--Add navigation bar-->
<nav>
    <ul>
        <li><a href="index.php">Homepage</a></li>
        <li><a href="q1.php">Survey</a></li>
        <li><a class="active" href="results.php">Results</a></li>
        <li><a href="reflections.php">Individual Reflections</a></li>
        <li><a href="group_analysis.php" >Group Analysis</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="resources.php">Resources</a></li>
        <li style="float: right;"><a href="https://www.raroyston.org/">LIS 500</a></li>
    </ul>
</nav>

<?php

// Created by: Bryan Knowles
// Based on:
// Last Modified on: Dec 18, 2020
// Last Modified by: Nirmit Jallawar

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



?>

<!--Thank You section-->
<div class="content-container">
    <div class="cent">
        <img class="cent"
             src="https://cache.careers360.mobi/media/presets/860X430/article_images/2019/6/3/aibe-result.jpg"
             alt="Jane" style="width:70%">
    </div>

    <h2 class="cent">Results</h2>
    <!--                <p class="title">CEO & Founder</p>-->
    <p>
        Thank you for taking our Implicit Bias Test.
        <br>
        You can view your answers and compare them with that of other survey participants in the
        table below.
        <br>
        After you have viewed your results, please consult the information given below to interpret
        your results.
        <br>
        <br>
        1 -> Strongly Disagree
        <br>
        5 -> Strongly Agree
        <br>
        <br>
        
        If your answer was close to 5 for questions 1, 2, 3, 4, 6, 7, 8, 9, 10,and 12, that may indicate an affinity towards people who share the same race and/or culture as you.
        <br>
        <br>
        If your answer was close to 1 for questions 5, and 11, that may indicate an affinity towards people who share the same race and/or culture as you.
        
        <br>
        <br>
        We purposefully chose not to keep the split between the two groups even so as to dissuade people from guessing what their answer might lead to in the results. 
    </p>
</div>

<!--Dispplay results in using PHP and SQL as a table-->
<?php
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

// Add question number
$q_num = 1;
// Add the SQL data
while ($result2 = $results2->fetch_assoc()) {
    $result1 = $results1->fetch_assoc();
    $result3 = $results3->fetch_assoc();
    echo '<tr><td>' . $q_num . ') ' . $result2["question"] . '</td><td>' . $result1["answer"] . '</td><td>' . round($result2["answer"]) . '</td><td>' . round($result3["answer"]) . '</td></tr>';
    $q_num = $q_num + 1;
}
echo '</table>';


// Close the query
$query1->close();
$query2->close();
$query3->close();


// Close the connection
$conn->close();

?>

<!--What next section-->
<div class="content-container">
    <div class="cent">
        <img class="cent"
             src="https://ifanboy.com/wp-content/uploads/2013/07/now-what.jpg"
             alt="Jane" style="width:70%">
    </div>

    <h2 class="cent">Now what?</h2>
    <p>
        You have taken test and read our interpretation of your data. What next? How do you learn
        from this? We recommend the following:
        <br>
        1. Understand why you answered a question one way instead of another. Would you answer it
        similarly the next time?
        Why or why not?
        <br>
        2. Try taking the actual Harvard Implicit Bias Test which inspired this survey. Did your
        results vary significantly?
        <br>
        3. Reflect. Then reflect again on if you need to make any changes to the way you approach
        race and or related issues in your daily life.
    </p>
</div>

<!--Add footer-->
<div class="footer">
    <p class="cent">Created by Nirmit Jallawar, Saurav Mathur, Ashley Massey and Yutong Wang for
        LIS 500</p>
</div>

</body>
</html>
