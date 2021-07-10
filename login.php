<?php 
    include "db.php";
    include "config.php";
    if(!empty($_POST["loginMail"])) { // true if form was submitted
        $query  = "SELECT * FROM tbl_users_215 WHERE email='" . $_POST["loginMail"] . "' and password = '". $_POST["loginPass"]."'";
        $result = mysqli_query($connection , $query);
        $row    = mysqli_fetch_array($result); 
        
        if(is_array($row)) {
			session_start();
            $_SESSION["user_id"] = $row['id'];
            $_SESSION["user_name"] = $row['firstName'];
			//echo '<script>window.location.href="index.php";</script>';
            header('Location:'.URL.'index.php');
        } else {
            $message = "invalid username or password";
        }
        
    }
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
     <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
            />
        <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"
        ></script>

</head>

<body>
    <?php include "includes/header.php"; ?>
<div id="container">
        <h1>Login</h1>
        <form action="#" method="post" id="frm">

            <div class="form-group">
            <label for="loginMail">Email: </label>
            <input type="email" class="form-control" name="loginMail" id="loginMail"
                aria-describedby="emailHelp" placeholder="Enter email" />
            </div>
            <div class="form-group">
            <label for="loginPass">Password: </label>
            <input type="password" class="form-control" name="loginPass" id="loginPass"
                placeholder="Enter Password" />
            </div>
            <button type="submit" class="btn btn-primary">Log Me In</button>
            <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>   

        </form>
    </div>

    <footer></footer>

</body>

</html>