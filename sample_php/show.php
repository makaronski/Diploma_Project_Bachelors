<?php
    // First connect to the database via your connection insert file
    include 'dbh.php';
    $query = mysql_query("select * from userss", $connection);
        // This is a prepared statement, not necessary with this simple query with no variables, but anyway...
   ?>