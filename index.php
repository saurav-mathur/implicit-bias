<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP Panthers</title>
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
    <h1 class="topHead" align="center" >
        PHP Panthers
    </h1>
    <nav>
        <ul>
            <li><a class="active" href="index.php">Homepage</a></li>
            <li><a href="q1.php" target="_blank">Survey</a></li>
            <li><a href="results.php" target="_blank">Results</a></li>
            <li><a href="reflections.php" target="_blank">Reflections</a></li>
            <li><a href="about.php" target="_blank">About</a></li>
            <li style="float: right;"><a>PHP Panthers</a></li>
        </ul>
    </nav>
</head>
<body>
<?php

// Generate a random number to use to identify the visitor throughout the survey
$user_id = rand(10000, 99999);
?>
<h2 align="center">
    Welcome to our Implicit Racial Bias Test!
</h2>
<p align="center">
    This test/survey is intended to allow the users to get in touch with their own (racial) biases.
    <br>
    This not a scientifically accurate survey - you may end up with interpretations of your answers
    that you may not necessarily agree with.
    <br>
    Please note that these are just a suggested
    interpretation of the data and should be misconstrued as anything more.
    <br>
    Before beginning the test, please take a moment to explore the information provided on the
    Additional Resources page and watch the following video:
    <br>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/WLQ2OlciaVk" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
</p>

<p align="center">
    We expect this survey to take about 10 minutes to complete.
    <br>
    You will be asked a series of questions and will have to indicate your choice by
    selecting the appropriate option.
    <br>
    Please do not second guess yourself to allow for the optimal experience.
</p>
<div align="center">
    <p>Please click on the button below to start the survey:</p>


    <form method="post" action="q1.php">
        <?php echo '<input type="hidden" name="user_id" value="' . $user_id . '" />'; ?>
        <p><input type="submit" value="Begin Survey"/></p>

    </form>
</div>
<div class="footer">
    <p align="center">Created by Nirmit Jallawar, Saurav Mathur, Ashley Massey and Yutong Wang for
        LIS 500</p>
</div>

</body>
</html>

