<?php 
    include "db.php";
    include "config.php";
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free-Ground</title>
    <link rel="stylesheet" href="css/style.css" media="screen">

    <script src="js/scripts.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Karantina:wght@700&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"/>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <a href="index.html"  id="logo"></a>
    </header>
    <nav class="topnav" id="myTopnav">
            <ul>
                <li><a href="index.php">עמוד בית</a></li>
                <li><a href="find_ground.php">חיפוש מגרש</a></li>
                <li><a href="my_grounds.php">המגרשים שלי</a></li>
                <li><a href="my_matches.php">המשחקים שלי</a></li>
                <li><a href="settings.php">הגדרות</a></li>
                <li><a href="#">התנתק</a></li>
               <li> <a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
                <i class="fa fa-bars"></i></a></li>
            </ul>
        </nav>
    <div id="my_matches_container">
    <h1>המשחקים שלי:</h1>
        <?php
         $query  = "SELECT * FROM tbl_matches_215 order by date desc";
         $result = mysqli_query($connection, $query);
     
         if(!$result) { 
             die("DB query failed.");
         }
         echo '<table class="table table-striped table-hover">
                 <thead>
                     <tr>
                     <th>מספר</th>
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
             echo " <tr id=\'delete' >
                     <td>". $row["id"] ."</td>
                     <td>". $row["startTime"] ."</td>
                     <td>". $row["endTime"] ."</td>
                     <td>". $row["date"] ."</td>
                     <td>". $row["groundName"] ."</td>
                     <td>". $row["sport"] ."</td>
                     <td>". $row["playersNum"] ."</td>
                     <td>". $row["join"] ."</td>
                     <td><button  class=\'btn btn-danger' onclick=\'deleteMatch'(" .$row['id']. ")>מחק משחק</buttton</td>
                     <td><button class=\'btn btn-danger' (" .$row['id']. ")>ערוך משחק</button></td>
                     </tr>";
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