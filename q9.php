<head>
    <link href="style_questions.css"
          rel="stylesheet"
          type="text/css">
    <title>Implicit Bias Question 9</title>
</head>
<?php

// Created by: Saurav Mathur
// Based on: index.php
// Last Modified on: Nov 29, 2020
// Last Modified by: Saurav Mathur

// Grab the user id from the POST data sent to us from the previous page
$user_id = $_POST["user_id"];

// Store the answer to the previous question, if applicable
include "store-answer.php";

// Specify the question text to be displayed on this page
$question_text = "I am more likely to vote for a person of my same race in an election.";

// Use the question text and the user id to create a form for this question that will take us to the next question OR the results page, whichever should come next:

?>

<form class="content-container" method="post" action="q10.php">
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
