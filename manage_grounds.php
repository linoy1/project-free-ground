<?php 
    include "db.php";
    include "config.php";
	$query  = "SELECT * FROM tbl_grounds_215";
    $result = mysqli_query($connection , $query);
?>

<!DOCTYPE html>

<html dir="rtl" lang="he">

<head>
    <?php include "includes/in_header.php"; ?>
    <script src="includes/cities.js"></script>
    <script src="js/delete.js"></script>
</head>
<body>    
        
    <?php include "includes/header.php"; ?>
    <div id="wrapper">
    <h1 id="headline">ניהול מגרשים</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>שם</th>
                    <th>כתובת</th>
                    <th>עיר</th>
                    <th>כדורגל</th>
                    <th>כדורסל</th>
                    <th>טניס</th>
                    <th>מתקנים</th>
                    <th>מחיקה</th>
                    <th>עריכה</th>
                    </tr>
            </thead>
            <tbody>
                <?php
                if(!$result) { 
                    die("DB query failed.");
                }
                echo '';
                // GET: get data again
                while($row = mysqli_fetch_assoc($result)) { // Results are in an associative array. keys are cols names
                    // Output data from each row
                    echo ' <tr id="ground'.$row["id"].'">
                                <td>'. $row["name"] .'</td>
                                <td>'. $row["address"] .'</td>
                                <td>'. $row["city"] .'</td>
                                <td>';
                                if($row["football"]) { echo 'יש'; }else { echo 'אין'; }
                                echo '</td> <td>';
                                if($row["basketball"]) { echo 'יש'; }else { echo 'אין'; }
                                echo '</td> <td>';
                                if($row["tennis"]) { echo 'יש'; }else { echo 'אין'; }
                                echo '</td> <td>';
                                if($row["gym"]) { echo 'יש'; }else { echo 'אין'; }
                                echo '</td>
                                <td><button  class="btn btn-danger" onclick="deleteGround(' .$row['id']. ')">מחק</buttton></td>
                                <td><button class="btn btn-success" onclick="location.href='."'add_ground.php?id=".$row['id']."'". '">ערוך</button></td>
                            </tr>';
                }
                echo "";
                // Release returned data
                mysqli_free_result($result);
                
                // Close DB connection
                mysqli_close($connection);
                ?>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary add-btn" onclick="location.href='add_ground.php'">הוסף מגרש</button>
    </div>
    <?php include "includes/footer.php"; ?>
</body>

</html>