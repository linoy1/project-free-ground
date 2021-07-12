<?php 
    include "db.php";
    include "config.php";
    $edit = isset($_GET['id']);
    if($edit){
        $query = "SELECT * FROM tbl_grounds_215 WHERE id=".$_GET['id'];
        $result = mysqli_query($connection , $query);
        $row = mysqli_fetch_assoc($result);
        $groundName = mysqli_real_escape_string($connection,$row['name']);
        $address = mysqli_real_escape_string($connection,$row['address']);
        $city = mysqli_real_escape_string($connection,$row['city']);
        $football = $row['football'];
        $basketball = $row['basketball'];
        $tennis = $row['tennis'];
        $fitness = $row['gym'];
    }
    if(!empty($_POST["groundName"])) { // true if form was submitted
            $groundName = mysqli_real_escape_string($connection,$_POST['groundName']);
            $address = mysqli_real_escape_string($connection,$_POST['address']);
            $city = mysqli_real_escape_string($connection,$_POST['cities']);
            $football = $_POST['football'];
            $basketball = $_POST['basketball'];
            $tennis = $_POST['tennis'];
            $fitness = $_POST['fitness'];
            if(!$edit){
                $query = "INSERT INTO tbl_grounds_215 VALUES('','$groundName','$address','$city','$football','$basketball','$tennis','$fitness')";
                $result = mysqli_query($connection , $query);
                if ($result)
                {
                    echo '<script>alert("המגרש נוסף בהצלחה!")</script>';
                    header("Location:".URL."manage_grounds.php");
                }
                else
                {
                    echo '<script>alert("database error")</script>';
                }
            }
            else{
                $query = "UPDATE tbl_grounds_215 SET name='$groundName',address='$address',city='$city',football='$football',basketball='$basketball',tennis='$tennis',gym='$fitness' WHERE id=".$_GET['id'];
                $result = mysqli_query($connection , $query);
                if ($result)
                {
                    echo '<script>alert("המגרש נשמר בהצלחה!")</script>';
                    header("Location:".URL."manage_grounds.php");
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
    <script src="includes/cities.js"></script>
</head>
<body>    
        
    <?php include "includes/header.php"; ?>
    <div id="wrapper">      
        <main>
            <h1 id="headline"> הוסף מגרש</h1>
            <input id="city" type="hidden" value="<?php echo $city; ?>">
            <form id="ground_form" action="#" method="POST">
                <div class="mb-3 row">
                    <label for="groundName" class="col-sm-2 col-form-label fs-3">שם המגרש</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control fs-5" name="groundName" id="groundName" <?php if($edit){echo 'value="'.$groundName.'"';}?>>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="address" class="col-sm-2 col-form-label fs-3">כתובת</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control fs-5" name="address" id="address" <?php if($edit){echo 'value="'.$address.'"';}?>>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="cities" class="col-sm-2 col-form-label fs-3">עיר</label>
                    <div class="col-sm-5">
                        <select class="form-select fs-5" name="cities" id="cities" required>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="football" class="col-sm-2 col-form-label fs-3">כדורגל</label>
                    <div class="col-sm-5">
                        <select class="form-select fs-5" name="football" id="football">
                                <option value=0 <?php if($edit && !$row['football']) {echo "selected";}?>>אין</option>
                                <option value=1 <?php if($edit && $row['football']) {echo "selected";}?>>יש</option>
                            </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="basketball" class="col-sm-2 col-form-label fs-3">כדורסל</label>
                    <div class="col-sm-5">
                        <select class="form-select fs-5" name="basketball" id="basketball">
                                <option value=0 <?php if($edit && !$row['basketball']) {echo "selected";}?>>אין</option>
                                <option value=1 <?php if($edit && $row['basketball']) {echo "selected";}?>>יש</option>
                            </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tennis" class="col-sm-2 col-form-label fs-3">טניס</label>
                    <div class="col-sm-5">
                        <select class="form-select fs-5" name="tennis" id="tennis">
                                <option value=0 <?php if($edit && !$row['tennis']) {echo "selected";}?>>אין</option>
                                <option value=1 <?php if($edit && $row['tennis']) {echo "selected";}?>>יש</option>
                            </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="fitness" class="col-sm-2 col-form-label fs-3">מתקני כושר</label>
                    <div class="col-sm-5">
                        <select class="form-select fs-5" name="fitness" id="fitness">
                                <option value=0 <?php if($edit && !$row['gym']) {echo "selected";}?>>אין</option>
                                <option value=1 <?php if($edit && $row['gym']) {echo "selected";}?>>יש</option>
                            </select>
                    </div>
                </div>
                <div id="submit-div" class="mb-3 row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-primary fs-2" id="submit" value="Send form">שלח</button>
                    </div>
                </div>

            </form>
        </main>
    </div>
    <?php include "includes/footer.php"; ?>

</body>

</html>