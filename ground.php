<?php 
    include "db.php";
    include "config.php";
	$query  = "SELECT * FROM tbl_grounds_215 WHERE id =".$_GET['id'];
    $result = mysqli_query($connection , $query);
    $row    = mysqli_fetch_array($result); 
?>

<!DOCTYPE html>
<html dir="rtl" lang="he">

<head>
<?php include "includes/in_header.php"; ?>
</head>

<body>
   
<?php include "includes/header.php"; ?>
<div id="wrapper">
        <main id="object_page">

            <h2 id="headline"> <?php echo $row['name'];?></h2>
            <span><?php echo $row['address'].' '.$row['city'];?></span>
            <span id="show-on-map">
                <a href="https://maps.google.com/?q=<?php echo $row['address'].', '.$row['city'];?>"><img src="images/Google_Maps_icon_(2015-2020).svg" id="map-img" alt="map-img">הצג במפה</a> 
                </span>
            <h4>לוח זמנים יומי</h4>
            <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>תאריך</th>
                    <th>שעת התחלה</th>
                    <th>שעת סיום</th>
                    <th>משחק</th>
                    <th>משתתפים</th>
                    <th>הצטרף</th>
                </tr>
            </thead>
            <?php
            $query = "SELECT * FROM tbl_matches_215 WHERE groundName ='" .$row['name']."'";
            $result = mysqli_query($connection, $query);
            if(!$result) { 
                echo " <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <span>לא קיימים משחקים להצגה</span>";

            }
            // GET: get data again
            while($row = mysqli_fetch_assoc($result)) { // Results are in an associative array. keys are cols names
                // Output data from each row
                echo " <tr>
                        <td>". $row["date"] ."</td>
                        <td>". $row["startTime"] ."</td>
                        <td>". $row["endTime"] ."</td>
                        <td>". $row["sport"] ."</td>
                        <td>". $row["playersNum"] ."</td>
                        <td>". $row["join"] ."</td>
                    </tr>";
            }
            // Release returned data
            mysqli_free_result($result);
            
            // Close DB connection
            mysqli_close($connection);
        ?>
        </table>
        </main>
    </div>
    <?php include "includes/footer.php"; ?>
</body>
</html>