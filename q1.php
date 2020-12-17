
<!--    Created by: Saurav Mathur
        Based on: shared-survey
        Last Modified on: Dec 16, 2020
        Last Modified by: Saurav Mathur -->
        
<!--Page to display a survey question-->

<!DOCTYPE html>
<html lang="en">
<head>
    
    <!--Import the css stylesheet-->
    <link href="style_questions.css"
          rel="stylesheet"
          type="text/css">
    <title>Implicit Bias Question 1</title>
    </head>
<body>
    <!--Display the top heading - group name-->
     <h1 class="cursive">
        PHP Panthers
    </h1>
    <!--Use google fonts, code to import google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Nunito+Sans&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Nunito+Sans&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Nunito&family=Nunito+Sans&family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
  
  
    
    <!--Have a navigation bar for the page-->
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

<?php

// Grab the user id from the POST data sent to us from the previous page
$user_id = $_POST["user_id"];

// Store the answer to the previous question, if applicable
include "store-answer.php";

// Specify the question text to be displayed on this page
$question_text = "I prefer to be around people who have a similar cultural background as me.";

// Use the question text and the user id to create a form for this question that will take us to the next question OR the results page, whichever should come next:
?>

<!--Add a survey question using a form, display the question text-->
<form class="content-container" method="post" action="q2.php">
    <?php echo '<h1>' . $question_text . '</h1>'; ?>
    <?php echo '<p><input type="hidden" name="user_id" value="' . $user_id . '" /></p>'; ?>
    <?php echo '<p><input type="hidden" name="question" value="' . $question_text . '" /></p>'; ?>
    
    <!--Display answer choices-->
    <p><input type="radio" name="answer" value="5" required /> I Strongly Agree</p>
    <p><input type="radio" name="answer" value="4"/> I Agree</p>
    <p><input type="radio" name="answer" value="3"/> Neutral</p>
    <p><input type="radio" name="answer" value="2"/> I Disagree</p>
    <p><input type="radio" name="answer" value="1"/> I Strongly Disagree</p>
    <p><input type="submit" value="Continue"/></p>
    <div>
        
        <!--Displays the progress during the survey-->
   <h3 class = "pcenter"> 1 &#47; 12 </h3>
</div>
</form>

<!--Display information about the creators-->
<div class="footer">
    <p class = "pcenter" >Created by Nirmit Jallawar, Saurav Mathur, Ashley Massey and Yutong Wang for LIS 500</p>
</div>
</body>
</html>