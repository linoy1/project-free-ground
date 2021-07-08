<?php
    include "db.php";
    include "config.php";
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free-Ground</title>
    <link rel="stylesheet" href="css/style.css" media="screen">
    <script src="js/scripts.js"></script>
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css2?family=Karantina:wght@700&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>


     <header>
        <a href="index.html" id="logo"></a>
    </header>
    <div class="topnav" id="myTopnav">
        <nav>
            <a href="index.html" id="indexLogo"></a>
        </nav>
    </div>
    <div id="wrapper">

        <section class="main_menu">
            <a href="#">
                <img src="images/logout.png" alt="logout" title="logout">
                <h4>התנתק</h4>
            </a>
            <a href="add_ground.php">
                <img src="images/search.png" alt="search" title="search">
                <h4>הוספת מגרש</h4>
            </a>
            <a href="#">
                <img src="images/search.png" alt="search" title="search">
                <h4>ניהול משתמשים</h4>
            </a>
            <a href="add_ground.php">
                <img src="images/search.png" alt="search" title="search">
                <h4>דיווחי משתמשים</h4>
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