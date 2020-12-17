<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Add page title   -->
    <title>PHP Panthers</title>

</head>
<body>

<!--Display Gorup Name-->
<h1 class="topHead">
    PHP Panthers
</h1>
<!-- Load Google Fonts-->
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
<!--Add navigation bar-->
<nav>
    <ul>
        <li><a class="active" href="index.php">Homepage</a></li>
        <li><a href="q1.php">Survey</a></li>
        <li><a href="results.php">Results</a></li>
        <li><a href="reflections.php">Individual Reflections</a></li>
        <li><a href="group_analysis.php" >Group Analysis</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="resources.php">Resources</a></li>
        <li style="float: right;"><a href="https://www.raroyston.org/">LIS 500</a></li>
    </ul>
</nav>
<?php
// Generate a random number to use to identify the visitor throughout the survey
$user_id = rand(10000, 99999);
?>

<!--Display information about the test-->
<h2 class="cent">
    Welcome to our Implicit Racial Bias Test!
</h2>
<p class="cent">
    This test/survey is intended to allow the users to get in touch with their own (racial) biases.
    <br>
    This is not a scientifically accurate survey - you may end up with interpretations of your answers
    that you may not necessarily agree with.
    <br>
    Please note that these are just a suggested
    interpretation of the data and should be misconstrued as anything more.
    <br>
    Before beginning the test, please take a moment to explore the information provided on the
    Additional Resources page and watch the following video:
    <br>
    <br>
    <!-- Embed YouTube video -->
    <iframe width="560" height="315" src="https://www.youtube.com/embed/WLQ2OlciaVk"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
</p>

<p class="cent">
    We expect this survey to take about 10 minutes to complete.
    <br>
    You will be asked a series of questions and will have to indicate your choice by
    selecting the appropriate option.
    <br>
    Please do not second guess yourself to allow for the optimal experience.
</p>
<div class="cent">
    <p>Please click on the button below to start the survey:</p>

    <form method="post" action="q1.php">
        <?php echo '<input type="hidden" name="user_id" value="' . $user_id . '" />'; ?>
        <p><input type="submit" value="Begin Survey"/></p>
    </form>
</div>

<!--Display teh About the survey section of homepage-->
<h2 class="cent">
    About the Survey
</h2>

<p class="cent">
    This survey is meant to make the test taker think more about their own biases, whether
    positive or negative.
    <br>
    It does so by posing them with questions where a responses on one end of the spectrum may indicates a bias.
    <br>
    This should not be thought of as a test, but more of a tool that can help you understand your
    affinity towards a school of thought.
    <br>
    For more information about Implicit Bias Tests, be sure to check out the video above as well as
    our Resources page.
</p>

<!--Add Footer-->
<div class="footer">
    <p class="cent">Created by Nirmit Jallawar, Saurav Mathur, Ashley Massey and Yutong Wang for
        LIS 500</p>
</div>

</body>
</html>
