<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Implicit bias test</title>
    <link href="style_index.css"
          rel="stylesheet"
          type="text/css">
</head>
<body>
<?php

// Generate a random number to use to identify the visitor throughout the survey
$user_id = rand(10000, 99999);
?>
<p>Welcome to the implicit bias test. This survey will take about 10 minutes to complete.</p>

<form method="post" action="q1.php">
    <?php echo '<input type="hidden" name="user_id" value="' . $user_id . '" />'; ?>
    <p><input type="submit" value="Begin Survey"/></p>

</form>
<?php
    
    $thisYear = Date('Y/m/d');
    echo "<p>Date:$thisYear</p>"
?>
</body>
</html>

