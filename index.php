<?php
    include "db.php";
    include "config.php";
	session_start();
    if(!isset($_SESSION["user_id"])){
        header('Location:'.URL.'login.php');
    }
    else
    {
        $name = $_SESSION["user_name"];
    }
?>

<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
<?php include "includes/in_header.php"; ?>
</head>

<body>
<?php include "includes/header.php"; ?>
	<div class="helloTxt"><?php echo 'שלום '. $name ?></div>
    <div id="wrapper">

        <section class="main_menu">
            <a href="#">
                <img src="images/logout.png" alt="logout" title="logout">
                <h4>התנתק</h4>
            </a>
            <a href="find_ground.php">
                <img src="images/search.png" alt="search" title="search">
                <h4>חיפוש מגרש</h4>
            </a>

            <a href="my_grounds.php">
                <img src="images/add.png" alt="riding" title="riding">
                <h4>המגרשים שלי</h4>
            </a>

            <a href="#">
                <img src="images/settings.png" alt="settings" title="settings">
                <h4>המשחקים שלי</h4>
            </a>


        </section>
    </div>
     <footer class="bg-light text-center ">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
 
            <div class="blackLine"></div>
            <!-- Grid container -->
            2021 ©
            <a class="text-dark" href="#">Free-Ground.com</a>
        </div>
        <!-- Copyright -->
    </footer>

</body>

</html>