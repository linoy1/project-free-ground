<?php 
    include "db.php";
    include "config.php";
    session_start();
    if(!empty($_POST["startTime"])) { // true if form was submitted
        $startTime = $_POST['startTime'];
        $endTime = $_POST['endTime'];
        $sport = mysqli_real_escape_string($connection,$_POST['sport']);
        $playersNum = $_POST['playersNum'];
        $date = $_POST['match_date'];
        $groundName = mysqli_real_escape_string($connection,$_POST['groundName']);
        $hostId =$_SESSION['user_id'];
        $query = "INSERT INTO tbl_matches_215 VALUES('','$startTime','$endTime','$sport','$playersNum','$date','$groundName','$hostId')";
        $result = mysqli_query($connection , $query);
        if ($result)
        {
            echo '<script>alert("המשחק נוסף בהצלחה!")</script>';
            // header("Location:".URL."my_matches.php");
        }
        else
        {
            echo '<script>alert("database error")</script>';
        }

    }
?>

<!DOCTYPE html>
<html dir="rtl" lang="he">

<head>
    <?php include "includes/in_header.php"; ?>
</head>

<body>    
    <?php include "includes/header.php"; ?> 
<div id="wrapper">
        <main > 

        <h1 id="headline">הוסף משחק</h1>
        <form id="match_form" action="#" method="POST">
                <div class="mb-3 row">
                    <label for="groundName" class="col-sm-2 col-form-label fs-3">שם המגרש</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control fs-5" name="groundName" required> 
                </div>
            </div>

            <div class="mb-3 row">
                    <label for="sport" class="col-sm-2 col-form-label fs-3">ספורט</label>
                    <div class="col-sm-5">
                    <select class="form-select fs-5" name="sport" required>
                            <option>כדורגל</option>
                            <option>כדורסל</option>
                            <option>טניס</option>
                            <option>מתקני כושר</option>
                        </select>                </div>
            </div>

            <div class="mb-3 row">
                    <label for="playersNum" class="col-sm-2 col-form-label fs-3">משתתפים</label>
                    <div class="col-sm-5">
                    <input class="form-control fs-5" type="number" name="playersNum" value="2" min="2" max="50" step="1" required>
                </div>
            </div>

            <div class="mb-3 row">
                    <label for="match_date" class="col-sm-2 col-form-label fs-3">תאריך</label>
                    <div  class="col-sm-5">
                    <input  class="form-control fs-5" type="date" name="match_date" required> 
                </div>
            </div>

            <div class="mb-3 row">
                    <label for="startTime" class="col-sm-2 col-form-label fs-3">שעת התחלה</label>
                    <div  class="col-sm-5">
                    <input class="form-control fs-5" type="time"  name="startTime" min="00:00" max="23:59" required>                
       </div>
            </div>


            <div class="mb-3 row">
                    <label for="endTime" class="col-sm-2 col-form-label fs-3">שעת סיום</label>
                    <div  class="col-sm-5">
                    <input class="form-control fs-5" type="time"  name="endTime" min="00:00" max="23:59" required>    
       </div>
            </div>
                    <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary fs-2" id="submit" value="Send form">שלח</button>
                </div>

        </form>

        </main>
    </div>

    <?php include "includes/footer.php"; ?>
</body>

</html>