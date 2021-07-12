<?php 
    include "db.php";
    include "config.php";
    session_start();
    $_SESSION["user_type"] = "user";
    if(!empty($_POST["loginMail"])) { // true if form was submitted
        $query  = "SELECT * FROM tbl_users_215 WHERE email='" . $_POST["loginMail"] . "' and password = '". $_POST["loginPass"]."'";
        $result = mysqli_query($connection , $query);
        $row    = mysqli_fetch_array($result); 
        
        if(is_array($row)) {
            $_SESSION["user_id"] = $row['id'];
            $_SESSION["user_name"] = $row['firstName'];
            if($row['admin']){
                $_SESSION["user_type"] = "admin";
            }
            header('Location:'.URL.'index.php');
        }else {
            $message = "invalid username or password";
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
        <h1 id="headline">התחברות</h1>
        <form action="#" method="post" id="login_form">
            <div class="mb-3 row">
                <label for="loginMail" class="col-sm-2 col-form-label fs-3">אימייל</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control fs-5" name="loginMail" id="loginMail" aria-describedby="emailHelp" placeholder="הכנס כתובת אימייל" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="loginPass" class="col-sm-2 col-form-label fs-3">סיסמא</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control fs-5" name="loginPass" id="loginPass" placeholder="הכנס סיסמא" />
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary">התחבר</button>
                </div>
                <div class="col-sm-1">
                    <button type="button" class="btn btn-success" onclick="location.href='register.php'">הירשם</button>
                </div>
            </div>
            <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>   

        </form>
    </div>
    <?php include "includes/footer.php"; ?>
</body>

</html>