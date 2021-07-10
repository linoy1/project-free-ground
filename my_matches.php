<?php 
    include "db.php";
    include "config.php";
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
<?php include "includes/in_header.php"; ?>
<script src="js/my_matches.js"></script>
</head>

<body>
<?php include "includes/header.php"; ?>
    <div id="my_matches_container">
    <h1 id="headline">המשחקים שלי</h1>
        <?php
         $query  = "SELECT * FROM tbl_matches_215 order by date desc";
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
                         <th>הצטרף</th>
                         <th>מחיקת משחק</th>
                         <th>עריכת משחק</th>


                         </tr>
                 </thead>';
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
                        <td>'. $row["join"] .'</td>
                        <td><button  class="btn btn-danger" onclick="deleteMatch(' .$row['id']. ')">מחק משחק</buttton</td>
                        <td><button class="btn btn-danger" onclick="editMatch(' .$row['id']. ')">ערוך משחק</button></td>
                     </tr>';
         }
         echo "</table>";
         // Release returned data
         mysqli_free_result($result);
         
         // Close DB connection
         mysqli_close($connection);
        ?>
    </div>
    <footer class="bg-light text-center ">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            <!-- Grid container -->

            <div class="blackLine"></div>
            <!-- Grid container -->
            2021 ©
            <a class="text-dark" href="#">Free-Ground.com</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>