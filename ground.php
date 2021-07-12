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
        <!-- <main id="object_page"> -->

            <h2 id="headline"> <?php echo $row['name'];?></h2>
            <span id="ground_address"><?php echo $row['address'].', '.$row['city'];?></span>
            <span id="show-on-map">
                <a href="https://maps.google.com/?q=<?php echo $row['address'].', '.$row['city'];?>" target="_blank"><img src="images/Google_Maps_icon_(2015-2020).svg" id="map-img" alt="map-img"></a> 
            </span>
            <h3 id="schedule">לוח משחקים</h3>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>תאריך</th>
                        <th>שעת התחלה</th>
                        <th>שעת סיום</th>
                        <th>משחק</th>
                        <th>משתתפים</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $name = $row['name'];
                        $query = "SELECT startTime,endTime,sport,playersNum,date FROM tbl_matches_215 WHERE groundName ='$name' order by date,startTime ";
                        $result = mysqli_query($connection, $query);
                        if(!$result) { 
                            echo " <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>";

                        }
                        // GET: get data again
                        while($row = mysqli_fetch_assoc($result)) { // Results are in an associative array. keys are cols names
                            // Output data from each row
                            $date = date_create($row["date"]);
                            $startTime = date_create($row["startTime"]);
                            $endTime = date_create($row["endTime"]);
                            echo " <tr>
                                    <td>". date_format($date,"d-m-Y")."</td>
                                    <td>". date_format($startTime,"H:i") ."</td>
                                    <td>". date_format($endTime,"H:i") ."</td>
                                    <td>". $row["sport"] ."</td>
                                    <td>". $row["playersNum"] ."</td>
                                </tr>";
                        }
                        // Release returned data
                        mysqli_free_result($result);
                        
                        // Close DB connection
                        mysqli_close($connection);
                    ?>
                </tbody>
        </table>
        
        <button type="button" class="btn btn-primary add-btn" onclick="location.href='add_match.php?groundId=<?php echo $_GET['id'];?>'">הוסף משחק</button>
        <!-- </main> -->
    </div>
    <?php include "includes/footer.php"; ?>
</body>
</html>