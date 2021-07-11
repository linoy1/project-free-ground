<?php 
    include "db.php";
    include "config.php";
    if(!empty($_POST["loginMail"])) { // true if form was submitted
        $query  = "SELECT * FROM tbl_users_215 WHERE email='" . $_POST["loginMail"] . "' and password = '". $_POST["loginPass"]."'";
        $result = mysqli_query($connection , $query);
        $row    = mysqli_fetch_array($result); 
        
        if($result) {
			session_start();
            $_SESSION["user_id"] = $row['id'];
            $_SESSION["user_name"] = $row['firstName'];
			//echo '<script>window.location.href="index.php";</script>';
            header('Location:'.URL.'index.php');
        } else {
            echo '<script>alert("database error")</script>';
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
            <form id="ground_form" action="#" method="GET">
                <div class="mb-3 row">
                    <label for="groundName" class="col-sm-2 col-form-label fs-3">שם המגרש</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control fs-5">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="address" class="col-sm-2 col-form-label fs-3">כתובת המגרש</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control fs-5" name="address" id="address">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="cities" class="col-sm-2 col-form-label fs-3">עיר</label>
                <div class="col-sm-2">
                    <select class="form-select fs-5" name="cities" id="cities" required>
                        </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="football" class="col-sm-2 col-form-label fs-3">כדורגל</label>
                <div class="col-sm-2">
                    <select class="form-select fs-5" name="goals" id="football">
                            <option selected>אין</option>
                            <option>יש</option>
                        </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="basketball" class="col-sm-2 col-form-label fs-3">כדורסל</label>
                <div class="col-sm-2">
                    <select class="form-select fs-5" name="baskets" id="basketball">
                            <option selected>אין</option>
                            <option>יש</option>
                        </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tennis" class="col-sm-2 col-form-label fs-3">טניס</label>
                <div class="col-sm-2">
                    <select class="form-select fs-5" name="tennis" id="tennis">
                            <option value=0 selected>אין</option>
                            <option value=1>יש</option>
                        </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="fitness" class="col-sm-2 col-form-label fs-3">מתקני כושר</label>
                <div class="col-sm-2">
                    <select class="form-select fs-5" name="fitness" id="fitness">
                            <option selected>אין</option>
                            <option>יש</option>
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