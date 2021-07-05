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
</head>

<body>
    <header>
        <a href="index.html"  id="logo"></a>
    </header>
    <div class="topnav" id="myTopnav">
        <nav>
            <a href="index.php">עמוד בית</a>
            <a href="find_ground.php">חיפוש מגרש</a>
            <a href="my_grounds.php">המגרשים שלי</a>
            <a href="my_matches.php">המשחקים שלי</a>
            <a href="settings.php">הגדרות</a>
            <a href="#">התנתק</a>
            <a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>
    </div>
<div id="wrapper">
        <main id="object_page">

            <h2 id="headline"> אפקה-מגרש מרכזי</h2>
            <span id="show-on-map">
                <button><img src="images/Google_Maps_icon_(2015-2020).svg" id="map-img" alt="map-img"></button>      
                <span id="dis">234m</span>
                </span>
            <section class="rate_star">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
            </section>

            <h1>לוח זמנים יומי</h1>
            <table>
                <tr>
                    <th>סוג אימון</th>
                    <th>שעה</th>
                    <th>משתתפים</th>
                    <th>מי הזמין</th>
                </tr>
                <tr>
                    <td>כדורגל</td>
                    <td>16:00</td>
                    <td>6</td>
                    <td>רוני כהן</td>
                </tr>
                <tr>
                    <td>כדורגל</td>
                    <td>16:00</td>
                    <td>8</td>
                    <td>שלומי לוי</td>
                </tr>

                <tr>
                    <td>כדורגל</td>
                    <td>16:00</td>
                    <td>12</td>
                    <td>אבי כהן</td>
                </tr>


            </table>
        </main>
    </div>

 <footer class="bg-light text-center ">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            <!-- Grid container -->
            <div class="container">

                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998 " href="#!" role="button"><i class="fa fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="fa fa-twitter"></i></a>

                    <!-- Google -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="fa fa-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fa fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button"><i class="fa fa-linkedin"></i></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <div class="blackLine"></div>
            <!-- Grid container -->
            2021 ©
            <a class="text-dark" href="#">Free-Ground.com</a>
        </div>
        <!-- Copyright -->
    </footer>


</body>
</html>