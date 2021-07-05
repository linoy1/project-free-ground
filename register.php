
<?php 
    include "db.php";
    include "config.php";
    if(!empty($_POST["loginMail"])) { // true if form was submitted
        $query  = "INSERT INTO tbl_users_200 (fname,lname,email,password)
        VALUES ('.$_POST["fname"].','.$_POST["lname"].','.$_POST["loginMail"].','.$_POST["loginPass"].')";
        $result = mysqli_query($connection , $query);
        $row    = mysqli_fetch_array($result); 
        
        if(is_array($row)) {
            $_SESSION["user_id"] = $row['id'];
            header('Location:'.URL.'posts.php');
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
<div id="container">
        <h1>Register</h1>
        <form id="form" action="http://se.shenkar.ac.il/teach/web1/2021/get_form3.php" method="GET">
<!-- 1 -->  <div class="form-group row">
                <label for="fullName" class="col-sm-2 col-form-label">Full name</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="fullName" id="fullName"
                    pattern="^[a-zA-Z]{2,}(?: [a-zA-Z]{2,})+$">
                    <!--  at least 2 characters in each name, one spaces or more, two names or more -->
                </div>
            </div>
<!-- 2 -->  <div class="form-group row">
                <label for="pass" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-3">
                    <input type="password" class="form-control" name="pass" id="pass"
                    pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$">
                    <!--  1 lowercase, 1 uppercase, 1 number, 1 special character, max 8 characters -->
                </div>
            </div>
<!-- 3 -->  <div class="form-group row">
                <label for="mail" class="col-sm-2 col-form-label">Email address</label>
                <div class="col-sm-3">
                    <input type="email" class="form-control" name="mail" id="mail">
                </div>
            </div>
<!-- 4 -->  <div class="form-group row">
                <label for="website" class="col-sm-2 col-form-label">Website</label>
                <div class="col-sm-3">
                    <input type="url" class="form-control" name="website" id="website">
                </div>
            </div>
<!-- 5 -->  <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">Phone number</label>
                <div class="col-sm-3">
                    <input type="tel" class="form-control" name="phone" id="phone" pattern="\d{9,10}">
                </div>
            </div>
<!-- 6 -->  <div class="form-group row">
                <label for="coffee" class="col-sm-2 col-form-label">Coffee drinks per day</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" name="coffee" id="coffee" min="0" value="0">
                </div>
            </div>
<!-- 7 -->  <div class="form-group row">
                <label for="temper" class="col-sm-2 col-form-label">The temperature now</label>
                <div class="col-sm-3" id="range">
                    <input type="range" class="form-control-range" name="temper" id="temper" oninput="this.nextElementSibling.value = this.value">
                    <output id="range-value">50</output>
                </div>
            </div>
<!-- 8 -->  <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label" id="address-label">Address</label>
                <div class="col-sm-3">
                    <textarea class="form-control" name="address" id="address"></textarea> 
                </div>
            </div>
<!-- 9 -->  <div id="interests" class="form-group row">
                <div class="form-check form-check-inline">
                    <div class="col-sm-2">Interests</div>
                    <div class="col-sm-6" id="interests-check">
                        <input type="checkbox" class="form-check-input" name="interests[]" id="Football" value="Football">
                        <label class="form-check-label" for="Football">Football</label>
                        <input type="checkbox" class="form-check-input" name="interests[]" id="Baseball" value="Baseball">
                        <label class="form-check-label" for="Baseball">Baseball</label>
                        <input type="checkbox" class="form-check-input" name="interests[]" id="Basketball" value="Basketball">
                        <label class="form-check-label" for="Basketball">Basketball</label>
                        <input type="checkbox" class="form-check-input" name="interests[]" id="Hockey" value="Hockey">
                        <label class="form-check-label" for="Hockey">Hockey</label>
                    </div>
                </div>
            </div>
<!-- 10 --> <div class="form-group row">
                <div class="form-check form-check-inline">
                    <div class="col-sm-2">Gender</div>
                    <div class="col-sm-3">
                        <input type="radio" class="form-check-input" name="gender" value="male" id="male" checked>
                        <label class="form-check-label" for="male">Male</label>
                        <input type="radio" class="form-check-input" name="gender" value="female" id="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
            </div>
<!-- 11 --> <div class="form-group row">
                <label for="age" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-3">
                    <select class="form-control" name="age" id="age" required>
                        <option disabled selected value>Choose age...</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                    </select>    
                </div>
            </div>
            <div id="submit-div" class="form-group row">
                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary" id="submit" value="Send form">Submit</button>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Log Me In</button>
            <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>   

        </form>
    </div>

    <footer></footer>

</body>

</html>