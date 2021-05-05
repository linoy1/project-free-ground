<!DOCTYPE html>
<html>

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

</head>

<body>
    <header>
        <a href="index.html" id="logo"></a>
    </header>
    <div class="topnav" id="myTopnav">
        <nav>
            <a href="#">עמוד בית</a>
            <a href="add_ground.html">הוסף מגרש</a>
            <a href="list.html">חיפוש מגרש</a>
            <a href="#">הגדרות</a>
            <a href="#">התנתק</a>
            <a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>
    </div>
    <div id="wrapper">
        <section class="new_ground">
            <h1>המגרש הוסף בהצלחה!</h1>
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
    </body>
</html>