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
</head>

<body>
    <header>
        <a href="index.html"  id="logo"></a>
    </header>
    <div class="topnav" id="myTopnav">
        <nav>
            <a href="index.php">עמוד בית</a>
            <a href="find_ground.php">חיפוש מגרש</a>
            <a href="my_grounds.php">המגרשים שלי</a>
            <a href="my_matches.php">המשחקים שלי</a>
            <a href="settings.php">הגדרות</a>
            <a href="#">התנתק</a>
            <a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>
    </div>
    <div id="container">
        <div id="matchTable">
            <?php
                $query  = "SELECT * FROM tbl_matches_215 AS m 
                            WHERE m.date >='2021-06-05'";
                // $query = "SELECT * FROM tbl_matches_215 AS m
                // LEFT JOIN tbl_matchesusers_215 AS mu ON m.id = mu.matchid
                //                                 AND mu.userid =" . $_SESSION['id'];
                $result = mysqli_query($connection, $query);
                /* need to think of a way to get all matches from today on and limit 10 lines
                */
                if(!$result) { 
                    die("DB query failed.");
                }
                echo '<table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>תאריך</th>
                                <th>שעת התחלה</th>
                                <th>שעת סיום</th>
                                <th>מגרש</th>
                                <th>משחק</th>
                                <th>משתתפים</th>
                                <th>הצטרף</th>
                            </tr>
                        </thead>';
                // GET: get data again
                while($row = mysqli_fetch_assoc($result)) { // Results are in an associative array. keys are cols names
                    // Output data from each row
                    echo " <tr>
                            <td>". $row["date"] ."</td>
                            <td>". $row["startTime"] ."</td>
                            <td>". $row["endTime"] ."</td>
                            <td>". $row["groundName"] ."</td>
                            <td>". $row["sport"] ."</td>
                            <td>". $row["playersNum"] ."</td>
                            <td>". $row["join"] ."</td>
                        </tr>";
                }
                echo "</table>";
                // Release returned data
                mysqli_free_result($result);
                
                // Close DB connection
                mysqli_close($connection);
            ?>
        </div>
    </div>

    <footer></footer>

</body>

</html>