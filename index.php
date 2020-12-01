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
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Nunito+Sans&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Nunito&family=Nunito+Sans&family=Pacifico&display=swap" rel="stylesheet">
    <h1 align="center">
        PHP Panthers
    </h1>
    <nav>
        <ul>
            <li><a class="active" href="index.php">Homepage</a></li>
            <li><a href="q1.php">Survey</a></li>
            <li><a href="results.php">Results</a></li>
            <li><a>Reflections</a></li>
            <li><a>About</a></li>
            <li style="float: right;"><a>PHP Panthers</a></li>
        </ul>
    </nav>
</head>
<body>
<?php

// Generate a random number to use to identify the visitor throughout the survey
$user_id = rand(10000, 99999);
?>
<p>Welcome to the implicit bias test. We expect this survey to take about 10 minutes to
    complete.</p>

<p>Please click on the button below to start the survey:</p>

<form method="post" action="q1.php">
    <?php echo '<input type="hidden" name="user_id" value="' . $user_id . '" />'; ?>
    <p><input type="submit" value="Begin Survey"/></p>

</form>

<div class="footer" align="center">
    <p>Created by Nirmit, Saurav, Ashley and Yutong for LIS 500</p>
</div>

</body>
</html>

