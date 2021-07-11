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
<html dir="rtl" lang="he">

<head>
<?php include "includes/in_header.php"; ?>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
</head>

<body>
<?php include "includes/header.php"; ?>
	<div class="helloTxt"><?php echo 'שלום '. $name ?></div>
    <div id="wrapper">

        <section class="main_menu">
            <a href="#">
                <span class="material-icons md-80 main-icons">logout</span>
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
    <?php include "includes/footer.php"; ?>

</body>

</html>