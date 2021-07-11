<?php 
    include "db.php";
    include "config.php";
    session_start();
?>
<!DOCTYPE html>
<html dir="rtl" lang="he">

<head>
<?php include "includes/in_header.php"; ?>
<script src="js/my_matches.js"></script>
</head>

<body>
<?php include "includes/header.php"; ?>
    <div id="wrapper">
    <h1 id="headline">המשחקים שלי</h1>
        <?php
         $query  = "SELECT * FROM tbl_matches_215 WHERE hostId=".$_SESSION['user_id'];
         $result = mysqli_query($connection, $query);
     
         if(!$result) { 
             die("DB query failed.");
         }
         echo '<table class="table table-striped table-hover">
                 <thead>
                     <tr>
                         <th>שעת התחלה</th>
                         <th>שעה סיום</th>
                         <th>תאריך</th>
                         <th>מגרש</th>
                         <th>משחק</th>
                         <th>משתתפים</th>
                         <th>מחיקה</th>
                         <th>עריכה</th>
                         </tr>
                 </thead>
                 <tbody>';
         // GET: get data again
         while($row = mysqli_fetch_assoc($result)) { // Results are in an associative array. keys are cols names
             // Output data from each row
             echo ' <tr id="match'.$row["id"].'">
                        <td>'. $row["startTime"] .'</td>
                        <td>'. $row["endTime"] .'</td>
                        <td>'. $row["date"] .'</td>
                        <td>'. $row["groundName"] .'</td>
                        <td>'. $row["sport"] .'</td>
                        <td>'. $row["playersNum"] .'</td>
                        <td><button  class="btn btn-danger" onclick="deleteMatch(' .$row['id']. ')">מחק</buttton></td>
                        <td><button class="btn btn-success" onclick="editMatch(' .$row['id']. ')">ערוך</button></td>
                     </tr>';
         }
         echo "</tbody></table>";
         // Release returned data
         mysqli_free_result($result);
         
         // Close DB connection
         mysqli_close($connection);
        ?>
        <button type="button" class="btn btn-primary" onclick="location.href='add_match.php'">הוסף משחק</button>
    </div>
    <?php include "includes/footer.php"; ?>
</body>

</html>