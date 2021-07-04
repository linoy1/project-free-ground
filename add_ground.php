<!DOCTYPE html>
<html lang="heb" dir="rtl">

    <head>        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css" media="screen">
        <script src="js/scripts.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-trxYGD5BY4TyBTvU5H23FalSCYwpLA0vWEvXXGm5eytyztxb+97WzzY+IWDOSbav" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Karantina:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <title>הוסף מגרש</title>
    </head>

    <body>    
        <header >
            <a href="index.php" id="logo"></a>
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
    
            <h2 id="headline"> הוסף מגרש</h2>
            <form id="form" action="new_ground.php" method="GET">
                <div class="mb-3 row">
                    <label for="groundName" class="col-sm-2 col-form-label fs-3">שם המגרש</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control fs-5" name="groundName" id="groundName">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="address" class="col-sm-2 col-form-label fs-3">כתובת המגרש</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control fs-5" name="address" id="address">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="goals" class="col-sm-2 col-form-label fs-3">שערים תקינים</label>
                    <div class="col-sm-2">
                        <select class="form-select fs-5" name="goals" id="goals" required>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>יותר מ-4</option>
                        </select>    
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="baskets" class="col-sm-2 col-form-label fs-3">סלים תקינים</label>
                    <div class="col-sm-2">
                        <select class="form-select fs-5" name="baskets" id="baskets" required>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>יותר מ-8</option>
                        </select>    
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tennis" class="col-sm-2 col-form-label fs-3">מגרשי טניס</label>
                    <div class="col-sm-2">
                        <select class="form-select fs-5" name="tennis" id="tennis" required>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>יותר מ-4</option>
                        </select>    
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="fitness" class="col-sm-2 col-form-label fs-3">מתקני כושר</label>
                    <div class="col-sm-2">
                        <select class="form-select fs-5" name="fitness" id="fitness" required>
                            <option>לא</option>
                            <option>כן</option>
                        </select>    
                    </div>
                </div>
                <div id="submit-div" class="mb-3 row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-primary fs-2" id="submit" value="Send form">שלח</button>
                    </div>
                </div>

            </form>
        </div>
    </body>
</html>

<!-- 
    שם מגרש
    כתובת
    מספר שערים
    מספר סלים
    מספר מגרשי טניס
    מתקני כושר
 -->