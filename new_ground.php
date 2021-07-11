<?php 
    include "db.php";
    include "config.php";
?>

<!DOCTYPE html>
<html dir="rtl" lang="he">

<head>
<?php include "includes/in_header.php"; ?>
</head>

<body>
    <?php include "includes/header.php"; ?>
    <div id="wrapper">
        <section class="new_ground">
            <h1>המגרש נוסף בהצלחה!</h1>
            שם המגרש:<?php echo $_GET["groundName"];?>
            <br><br>
            כתובת:<?php echo $_GET["address"];?>
            <br><br>
            שערים תקינים:<?php echo $_GET["goals"];?>
            <br><br>
            סלים תקינים:<?php echo $_GET["baskets"];?>
            <br><br>
            מגרשי טניס:<?php echo $_GET["tennis"];?>
            <br><br>
            מתקני כושר:<?php echo $_GET["fitness"];?>
            </section>

        </div>
    <?php include "includes/footer.php"; ?>
    </body>
</html>