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
    <div id="wrapper">

        <h4 id="helloTxt"><?php echo 'שלום '. $name ?></h4>
        <section class="main_menu">
            <?php if(isset($_SESSION["user_type"]) && $_SESSION["user_type"]=="admin"){?>
            <a href="manage_grounds.php">
                <span class="material-icons md-48">sports_score</span>
                <h4>ניהול מגרשים</h4>
            </a>
            <a href="#">
                <span class="material-icons md-48">manage_accounts</span>
                <h4>ניהול משתמשים</h4>
            </a>
            <a href="#">
                <span class="material-icons md-48">summarize</span>
                <h4>דו"חות</h4>
            </a>
            <?php }else{?>
            <a href="find_ground.php">
                <span class="material-icons md-48">search</span>
                <h4>חיפוש מגרש</h4>
            </a>

            <a href="#">
                <span class="material-icons md-48">sports_score</span>
                <h4>המגרשים שלי</h4>
            </a>

            <a href="my_matches.php">
                <span class="material-icons md-48">event_note</span>
                <h4>המשחקים שלי</h4>
            </a> 
            
            <?php }?>
            <a href="logout.php">
                <span class="material-icons md-48">logout</span>
                <h4>התנתק</h4>
            </a>


        </section>
    </div>
    <?php include "includes/footer.php"; ?>

</body>

</html>