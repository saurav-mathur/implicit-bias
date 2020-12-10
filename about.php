<!--adopted from https://www.w3schools.com/howto/howto_css_about_page.asp-->
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
    <h1 align="center">
        PHP Panthers
    </h1>
    <nav>
        <ul>
            <li><a href="index.php">Homepage</a></li>
            <li><a href="q1.php">Survey</a></li>
            <li><a href="results.php">Results</a></li>
            <li><a href="reflections.php">Reflections</a></li>
            <li><a class="active" href="about.php">About</a></li>
            <li style="float: right;"><a>PHP Panthers</a></li>
        </ul>
    </nav>
</head>
<body>
<?php

?>
<h1 align="center">
    About Our Team
</h1>

<div class="row">
    <div class="column">
        <div class="card">
            <img src="http://njandsm.raroyston.org/nirmit_image.jpg"
                 alt="Jane" style="width:30%">
            <div class="container">
                <h2>Nirmit Jallawar</h2>
                <!--                <p class="title">CEO & Founder</p>-->
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>jane@example.com</p>
                <p>
                    <button class="button">Contact</button>
                </p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <img src="http://njandsm.raroyston.org/saurav_image.jpg" alt="Mike" style="width:30%">
            <div class="container">
                <h2>Saurav Mathur</h2>
                <!--                <p class="title">Art Director</p>-->
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>mike@example.com</p>
                <p>
                    <button class="button">Contact</button>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <p align="center">Created by Nirmit Jallawar, Saurav Mathur, Ashley Massey and Yutong Wang for
        LIS 500</p>
</div>

</body>
</html>

