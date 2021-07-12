<?php 
    include "db.php";
    include "config.php";
    session_start();
    $edit = isset($_GET['id']);
    $setGround = isset($_GET['groundId']);
    if($edit){
        $query = "SELECT * FROM tbl_matches_215 WHERE id=".$_GET['id'];
        $result = mysqli_query($connection , $query);
        $row = mysqli_fetch_assoc($result);
        $date = date_format(date_create($row["date"]),"Y-m-d");
        $startTime = date_format(date_create($row["startTime"]),"H:i");
        $endTime = date_format(date_create($row["endTime"]),"H:i");
        $groundName = $row['groundName'];
        $sport = $row['sport'];
        $playersNum = $row['playersNum'];
    }
    if(!empty($_POST["startTime"])) { // true if form was submitted
        $startTime = $_POST['startTime'];
        $endTime = $_POST['endTime'];
        $sport = mysqli_real_escape_string($connection,$_POST['sport']);
        $playersNum = $_POST['playersNum'];
        $date = $_POST['match_date'];
        $groundName = mysqli_real_escape_string($connection,$_POST['groundName']);
        $hostId =$_SESSION['user_id'];
        if(!$edit){
            $query = "INSERT INTO tbl_matches_215 VALUES('','$startTime','$endTime','$sport','$playersNum','$date','$groundName','$hostId')";
            $result = mysqli_query($connection , $query);
            if ($result)
            {
                echo '<script>alert("המשחק נוסף בהצלחה!")</script>';
                if($setGround){
                    header("Location:".URL."ground.php?id=".$_GET['groundId']);
                }else{
                    header("Location:".URL."my_matches.php");
                }
            }
            else
            {
                echo '<script>alert("database error")</script>';
            }
        }
        else{
            $query = "UPDATE tbl_matches_215 SET startTime ='$startTime',endTime='$endTime',sport='$sport',playersNum='$playersNum',date='$date',groundName='$groundName' WHERE id=".$_GET['id'];
            $result = mysqli_query($connection , $query);
            if ($result)
            {
                echo '<script>alert("המשחק נשמר בהצלחה!")</script>';
                header("Location:".URL."my_matches.php");
            }
            else
            {
                echo '<script>alert("database error")</script>';
            }
        }
    }
?>
<!DOCTYPE html>
<html dir="rtl" lang="he">

<head>
    <?php include "includes/in_header.php"; ?>
    <script src="js/add_match.js"></script>
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
                        <?php if(!$setGround){?>
                        <select class="form-control fs-5" name="groundName" id="groundName" onchange="selectedGround(this);" required>
                            <option value=0 <?php if(!$edit) {echo "selected";} ?> disabled>בחר מגרש</option>
                            <?php
                                $query  = "SELECT id,name FROM tbl_grounds_215";
                                $result = mysqli_query($connection , $query);
                                while($row = mysqli_fetch_array($result)){
                                    echo '<option groundId="'.$row['id'].'" value="'.$row['name'].'"';
                                    if($edit && $row['name'] == $groundName || $setGround && $row['id'] == $_GET['groundId']){
                                        echo "selected";
                                    }
                                    echo '> '.$row['name'].'</option>';
                                }
                                ?>
                        </select>
                        <?php }else{
                                $query  = "SELECT name FROM tbl_grounds_215 WHERE id=".$_GET['groundId'];
                                $result = mysqli_query($connection , $query);
                                $row = mysqli_fetch_array($result);
                            ?>
                        <input class="form-control fs-5" type="text" id="groundName" name="groundName" value="<?php echo $row['name'];?>" readonly>
                        <?php }?>
                    </div>
                </div>

            <div class="mb-3 row">
                    <label for="sport" class="col-sm-2 col-form-label fs-3">ספורט</label>
                    <div class="col-sm-5">
                        <select class="form-select fs-5" name="sport" id="sport" required>
                            <?php
                                if($edit){
                                    $query  = "SELECT football,basketball,tennis,gym FROM tbl_grounds_215 WHERE name ='$groundName'"; // need to put id from option above
                                    $result = mysqli_query($connection , $query);
                                    while($row = mysqli_fetch_array($result)){
                                        if($row['football']){ ?>
                                        <option <?php if($sport =="כדורגל") {echo "selected";}?>>כדורגל</option>
                                        <?php }if($row['basketball']){ ?>
                                        <option <?php if($sport =="כדורסל") {echo "selected";}?>>כדורסל</option>
                                        <?php }if($row['tennis']){ ?>
                                        <option <?php if($sport =="טניס") {echo "selected";}?>>טניס</option>
                                        <?php }if($row['gym']){ ?>
                                        <option <?php if($sport =="מתקני כושר") {echo "selected";}?>>מתקני כושר</option>
                                        <?php
                                        }
                                    }
                                }
                                if($setGround){
                                    $query  = "SELECT football,basketball,tennis,gym FROM tbl_grounds_215 WHERE id ='".$_GET['groundId']."'"; // need to put id from option above
                                    $result = mysqli_query($connection , $query);
                                    while($row = mysqli_fetch_array($result)){
                                        if($row['football']){ ?>
                                        <option>כדורגל</option>
                                        <?php }if($row['basketball']){ ?>
                                        <option>כדורסל</option>
                                        <?php }if($row['tennis']){ ?>
                                        <option>טניס</option>
                                        <?php }if($row['gym']){ ?>
                                        <option>מתקני כושר</option>
                                        <?php
                                        }
                                    }
                                }
                            ?>
                        </select>                
                    </div>
            </div>

            <div class="mb-3 row">
                <label for="playersNum" class="col-sm-2 col-form-label fs-3">משתתפים</label>
                <div class="col-sm-5">
                    <input class="form-control fs-5" type="number" name="playersNum" id="playersNum" min="2" max="50" step="1" <?php if($edit){echo 'value="'.$playersNum.'"';} else {echo 'value="2"';}?> required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="match_date" class="col-sm-2 col-form-label fs-3">תאריך</label>
                <div  class="col-sm-5">
                    <input  class="form-control fs-5" type="date" name="match_date" id="match_date" <?php if($edit){echo 'value="'.$date.'"';}?> required> 
                </div>
            </div>

            <div class="mb-3 row">
                <label for="startTime" class="col-sm-2 col-form-label fs-3">שעת התחלה</label>
                <div  class="col-sm-5">
                    <input class="form-control fs-5" type="time"  name="startTime" id="startTime" min="00:00" max="23:59" <?php if($edit){echo 'value="'.$startTime.'"';}?> required>                
                </div>
            </div>


            <div class="mb-3 row">
                <label for="endTime" class="col-sm-2 col-form-label fs-3">שעת סיום</label>
                <div  class="col-sm-5">
                    <input class="form-control fs-5" type="time"  name="endTime" id="endTime" min="00:00" max="23:59" <?php if($edit){echo 'value="'.$endTime.'"';}?> required>    
                </div>
            </div>
            <div class="mb-3 row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary fs-2" id="submit" value="Send form">
                        <?php
                            if(!$edit){
                                echo "הוסף";
                            }else{
                                echo "שמור";
                            }
                        ?>
                    </button>
                </div>
            </div>

        </form>

        </main>
    </div>

    <?php include "includes/footer.php"; ?>
</body>

</html>