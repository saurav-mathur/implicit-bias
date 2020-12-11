<head>
    <link href="style_questions.css"
          rel="stylesheet"
          type="text/css">
    <title>Implicit Bias Question 7</title>
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
            <li><a href="index.php" target="_blank">Homepage</a></li>
            <li><a href="results.php" target="_blank">Results</a></li>
            <li><a href="reflections.php" target="_blank">Reflections</a></li>
            <li><a href="about.php" target="_blank">About</a></li>
            <li style="float: right;"><a>PHP Panthers</a></li>
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

// Specify the question text to be displayed on this page
$question_text = "I feel more comfortable voicing my opinions around people of my same race.";

// Use the question text and the user id to create a form for this question that will take us to the next question OR the results page, whichever should come next:

?>
<div calss="number">
   <h3>7 / 12</h3>
</div>
<form class="content-container" method="post" action="q8.php">
    <?php echo '<h1>' . $question_text . '</h1>'; ?>
    <?php echo '<p><input type="hidden" name="user_id" value="' . $user_id . '" /></p>'; ?>
    <?php echo '<p><input type="hidden" name="question" value="' . $question_text . '" /></p>'; ?>
    <p><input type="radio" name="answer" value="5" required/> I Strongly Agree</p>
    <p><input type="radio" name="answer" value="4"/> I Agree</p>
    <p><input type="radio" name="answer" value="3"/> Neutral</p>
    <p><input type="radio" name="answer" value="2"/> I Disagree</p>
    <p><input type="radio" name="answer" value="1"/> I Strongly Disagree</p>
    <p><input type="submit" value="Continue"/></p>
</form>
<div class="footer">
    <p align = "center">Created by Nirmit Jallawar, Saurav Mathur, Ashley Massey and Yutong Wang for LIS 500</p>
</div>