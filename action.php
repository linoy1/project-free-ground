<?php 
    include "db.php";
    	// Get data from DB to display


    // If data was sent, save it and display in the list
	if(isset($_POST['ttl']))
	{
		// Escape variables for security
		$ttl = mysqli_real_escape_string($connection,$_POST['ttl']);
		$desc  = mysqli_real_escape_string($connection,$_POST['desc']);
		
		// SET: insert new data to DB
		$query = "INSERT INTO tbl_matches_215(title,txt) VALUES ('$ttl','$desc')";
		$result = mysqli_query($connection, $query);
		
	}

    $query  = "SELECT * FROM tbl_test order by title desc";
    $result = mysqli_query($connection, $query);

    if(!$result) { 
        die("DB query failed.");
    }

    // GET: get data again
    echo "<ul>";
    while($row = mysqli_fetch_assoc($result)) { // Results are in an associative array. keys are cols names
        // Output data from each row
        echo "<li><h2>" . $row["title"] . "</h2><h3>" .$row["txt"] ."</h3></li>";
    }
    echo "</ul>";

    // Release returned data
    mysqli_free_result($result);
    
    // Close DB connection
    mysqli_close($connection);

?>