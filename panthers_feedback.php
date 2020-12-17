<head>
    <link href="style_questions.css"
          rel="stylesheet"
          type="text/css">
    <title>Additional Feedback</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Nunito+Sans&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Nunito+Sans&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Nunito&family=Nunito+Sans&family=Pacifico&display=swap" rel="stylesheet">
    <h1 align="center" class="cursive">
        PHP Panthers
    </h1>
    <nav>
        <ul>
            <li><a href="index.php" >Homepage</a></li>
            <li><a href="results.php" >Results</a></li>
            <li><a href="reflections.php" >Individual Reflections</a></li>
            <li><a href="group_analysis.php" >Group Analysis</a></li>
            <li><a href="about.php" >About</a></li>
            <li><a href="resources.php" >Resources</a></li>
            <li style="float: right;"><a href="https://www.raroyston.org/">LIS 500</a></li>
        </ul>
    </nav>
</head>
<?php

// Created by: Saurav Mathur
// Based on: index.php
// Last Modified on: Dec 10, 2020
// Last Modified by: Saurav Mathur

// Grab the user id from the POST data sent to us from the previous page
$user_id = $_POST["user_id"];

// Store the answer to the previous question, if applicable
include "store-answer.php";



?>

<form class="content-container" method="post" action="results.php">
    <h1> Use this space to enter any additional feedback on the survey. Thank you for taking the survey </h1>
    <?php echo '<input type="hidden" name="user_id" value="'.$user_id.'" />'; ?>
    <textarea name="feedback" rows="6" cols="80" maxlength="500"></textarea>
    
    <p><input type="submit" value="Continue"/></p>
</form>