<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" media="screen">
    <script src="js/scripts.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.rtl.min.css" integrity="sha384-trxYGD5BY4TyBTvU5H23FalSCYwpLA0vWEvXXGm5eytyztxb+97WzzY+IWDOSbav" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Karantina:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
        <main > 

        <h1>הוסף משחק:</h1>
        <form id="match_form" action="my_matches.php" method="GET">
                <div class="mb-3 row">
                    <label for="groundName" class="col-sm-2 col-form-label fs-3">שם המגרש</label>
                    <div class="col-sm-5">
                        <input id="groundName" type="text" class="form-control fs-5">
                </div>
            </div>

            <div class="mb-3 row">
                    <label for="Sport" class="col-sm-2 col-form-label fs-3">ספורט:</label>
                    <div class="col-sm-5">
                    <select id="sport" class="form-select fs-5" name="sport"  required>
                            <option>כדורגל</option>
                            <option>כדורסל</option>
                            <option>טניס</option>
                            <option>מתקני כושר</option>
                        </select>                </div>
            </div>

            <div class="mb-3 row">
                    <label for="groundName" class="col-sm-2 col-form-label fs-3">כמות משתתפים מקסימלית:</label>
                    <div class="col-sm-5">
                    <input id="participantNum"  class="form-control fs-5" type="number" name="tech" value="2" min="2" max="50" step="1">
                </div>
            </div>

            <div class="mb-3 row">
                    <label for="groundName" class="col-sm-2 col-form-label fs-3">תאריך:</label>
                    <div  class="col-sm-5">
                    <input  class="form-control fs-5" type="date" name="tech"> 
                </div>
            </div>

            <div class="mb-3 row">
                    <label for="groundName" class="col-sm-2 col-form-label fs-3">שעת התחלה:</label>
                    <div  class="col-sm-5">
                    <input id="date" class="form-control fs-5" type="time"  name="date"
       min="06:00" max="24:00" required>                
       </div>
            </div>


            <div class="mb-3 row">
                    <label for="groundName" class="col-sm-2 col-form-label fs-3">שעת סיום:</label>
                    <div  class="col-sm-5">
                    <input id="date" class="form-control fs-5" type="time"  name="date"
       min="06:00" max="24:00" required>                
       </div>
            </div>
            <button type="submit" class="btn btn-primary fs-2" id="submit" value="Send form">שלח</button>


        </form>

        </main>
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