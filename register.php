
<?php 
    include "db.php";
    include "config.php";
    if(!empty($_POST["firstName"])) { // true if form was submitted
        $firstName = mysqli_real_escape_string($connection,$_POST['firstName']);
        $lastName = mysqli_real_escape_string($connection,$_POST['lastName']);
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "INSERT INTO tbl_users_215 VALUES('','0','$firstName','$lastName','$email','$password')";
        $result = mysqli_query($connection , $query);
        if ($result)
        {
            echo '<script>alert("ההרשמה בוצעה בהצלחה!")</script>';
            header("Location:".URL."login.php");
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
        <h1 id="headline">הרשמה</h1>
        <form action="#" method="post" id="reg_form">
            <div class="mb-3 row">
                <label for="firstName" class="col-sm-2 col-form-label fs-3">שם פרטי</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control fs-5" name="firstName" id="firstName" placeholder="הכנס שם פרטי" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="lastName" class="col-sm-2 col-form-label fs-3">שם משפחה</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control fs-5" name="lastName" id="lastName" placeholder="הכנס שם משפחה" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label fs-3">אימייל</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control fs-5" name="email" id="email" aria-describedby="emailHelp" placeholder="הכנס כתובת אימייל" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label fs-3">סיסמא</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control fs-5" name="password" id="password" placeholder="הכנס סיסמא" />
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary">הירשם</button>
                </div>
            </div>
            <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>   

        </form>
    </div>
    <?php include "includes/footer.php"; ?>
</body>

</html>