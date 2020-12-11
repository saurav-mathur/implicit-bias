<?php

// Created by: Bryan Knowles
// Based on: https://www.w3schools.com/php/php_mysql_prepared_statements.asp
// Last Modified on: Dec 10, 2018
// Last Modified by: Saurav Mathur

// If there was a previous question, then the POST will have data about that question.
// In that case, we need to store the result of that previous question before we display this one.
if (isset($_POST["feedback"])){
    // Database settings
    $mysql_server="localhost";
    $mysql_db="raroyst1_raroystonorgmain";
    $mysql_port="3306";
    $mysql_user="raroyst1_cfbd_cg";
    $mysql_password="W!SCsin2018";
    
    // Connect to the database
    $conn = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);
    
    // Whoops. This shouldn't happen, but if we can't connect to the database "blow up" and stop here
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Prepare our query
    $query = $conn->prepare("INSERT INTO cp_group_2_feedback (user_id, feedback) VALUES (?, ?)");
    
    $query->bind_param("is", $user_id, $_POST["feedback"]);
    
    // Run the query to store the result of the previous question
    $query->execute();
    
    // Close the query and connection since we're done with them
    $query->close();
    $conn->close();
}

?>