<?php 
    include "db.php";
    include "config.php";
    $query  = "SELECT * FROM grounds order by matchDate desc";
    $result = mysqli_query($connection, $query);

    if(!$result) { 
        die("DB query failed.");
    }
    echo "<table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>תאריך</th>
                    <th>שעה</th>
                    <th>מגרש</th>
                    <th>משחק</th>
                    <th>משתתפים</th>
                    <th>הצטרף</th>
                </tr>
            </thead>"
    // GET: get data again
    while($row = mysqli_fetch_assoc($result)) { // Results are in an associative array. keys are cols names
        // Output data from each row
        echo " <tr>
                <td>". $row["startTime"] ."</td>
                <td>". $row["endTime"] ."</td>
                <td>". $row["groundId"] ."</td>
                <td>". $row["sport"] ."</td>
                <td>". $row["numOfPlayers"] ."</td>
                <td>". $row["join"] ."</td>
            </tr>"
    }
    echo "</table>"
    // Release returned data
    mysqli_free_result($result);
    
    // Close DB connection
    mysqli_close($connection);
?>

<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free-Ground</title>
    <link rel="stylesheet" href="css/style.css" media="screen">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css2?family=Karantina:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
    <header>
        <ul>
            <li> <a href="#">התחבר</a>
            </li>
            <li> <a href="#">צור קשר</a>
            </li>
            <li> <a href="#">עזרה</a>
            </li>
        </ul>
        <a href="index.html" id="logo" alt="logo"></a>

        <form class="example" action="#">
            <button type="submit"><i class="fa fa-search"></i></button>
            <input type="text" placeholder="חיפוש" name="search2">
        </form>
    </header>
    <div class="topnav" id="myTopnav">
        <nav>
            <a href="index.html">עמוד בית</a>
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
        <main>
            <h2 id="headline"> חיפוש מגרש </h2>
            <section id="myBtnContainer">
                <!-- material-icons md-inactive md-32 -->
                <button class="btn active material-icons md-32" onclick="filterSelection('all')">הכל</button>
                <button class="btn md-inactive material-icons md-32 " onclick="filterSelection('soccer')"> sports_soccer</button>
                <button class="btn md-inactive material-icons md-32 " onclick="filterSelection('basketball')"> sports_basketball</button>
                <button class="btn md-inactive material-icons md-32 " onclick="filterSelection('tennis')"> sports_tennis</button>
                <button class="btn md-inactive material-icons md-32 " onclick="filterSelection('fitness')"> fitness_center</button>
            </section>
            <section id="sort">
                <label>מיין לפי</label>
                <select id="sort-value">
                    <option>מרחק</option>
                    <option>דירוג</option>
                    <option>פופולריות</option>
                </select>
            </section>
            <section class="groundsList">
                <div class="filterDiv soccer basketball tennis">
                    <a href="object.html?1">
                        <h4>אפקה-מגרש מרכזי &nbsp;&nbsp; 100m</h4>
                        <span id="icons">
                            <span class="material-icons md-48">sports_soccer</span>
                            <span class="material-icons md-48">sports_basketball</span>
                            <span class="material-icons md-48">sports_tennis</span>
                        </span>
                        <span id="small-icons">
                            <span class="material-icons md-24">sports_soccer</span>
                            <span class="material-icons md-24">sports_basketball</span>
                            <span class="material-icons md-24">sports_tennis</span>
                        </span>
                    </a>
                </div>
                <div class="filterDiv soccer basketball">
                    <a href="#">
                        <h4>אפקה-ביה"ס אופק &nbsp;&nbsp; 136m</h4>
                        <span id="icons">
                            <span class="material-icons md-48">sports_soccer</span>
                        <span class="material-icons md-48">sports_basketball</span>
                        </span>
                        <span id="small-icons">
                            <span class="material-icons md-24">sports_soccer</span>
                        <span class="material-icons md-24">sports_basketball</span>
                        </span>
                    </a>
                </div>
                <div class="filterDiv soccer basketball">
                    <a href="#">
                        <h4>תיכון עמל 1 &nbsp;&nbsp;&nbsp; 500m</h4>
                        <span id="icons">
                            <span class="material-icons md-48">sports_soccer</span>
                        <span class="material-icons md-48">sports_basketball</span>
                        </span>
                        <span id="small-icons">
                            <span class="material-icons md-24">sports_soccer</span>
                        <span class="material-icons md-24">sports_basketball</span>
                        </span>
                    </a>
                </div>
                <div class="filterDiv soccer">
                    <a href="#">
                        <h4>אפקה מגרש סינטטי &nbsp;&nbsp; 600m</h4>
                        <span id="icons">
                            <span class="material-icons md-48">sports_soccer</span>
                        </span>
                        <span id="small-icons">
                            <span class="material-icons md-24">sports_soccer</span>
                        </span>
                    </a>
                </div>
            </section>
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