<!--Created by Saurav Mathur, based on q-royston.php-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Saurav's survey question</title>
    <link rel="stylesheet" href="mathur-style.css">
</head>
<body>

<?php
// Created by: Saurav Mathur
// Based on: q-royston.php
// Last Modified on: Nov 15, 2020
// Last Modified by: Saurav Mathur


// Grab the user id from the POST data sent to us from the previous page
$user_id = $_POST["user_id"];

// Store the answer to the previous question, if applicable
include "store-answer.php";

// Specify the question text to be displayed on this page
$question_text = "I prefer interacting with recruiters of the same race in a career fair";

// Use the question text and the user id to create a form for this question that will take us to the next question OR the results page, whichever should come next:

?>
<div>

    <form action="q-jallawar.php" method="post">
        <?php echo '<h1>' . $question_text . '</h1>'; ?>
        <?php echo '<p><input type="hidden" name="user_id" value="' . $user_id . '" /></p>'; ?>
        <?php echo '<p><input type="hidden" name="question" value="' . $question_text . '" /></p>'; ?>
        <hr>
        <div class="cent">
            <p><input type="radio" name="answer" value="5" required/> I Strongly Agree</p>
            <p><input type="radio" name="answer" value="4"/> I Agree</p>
            <p><input type="radio" name="answer" value="3"/> Neutral</p>
            <p><input type="radio" name="answer" value="2"/> I Disagree</p>
            <p><input type="radio" name="answer" value="1"/> I Strongly Disagree</p>
            <p><input type="submit" value="Continue"/></p>
        </div>

    </form>
</div>
</body>
</html>