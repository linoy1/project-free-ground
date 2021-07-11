	<header>
        <a href="index.php" id="logo"></a>
    </header>
    <nav class="topnav" id="myTopnav">
            <ul>
                <?php
                    // if (session_status() === PHP_SESSION_NONE) {
                    //     session_start();
                    // }
                    // if($_SESSION["user_type"] == "user"){
                ?>
                <li><a href="index.php">עמוד בית</a></li>
                <li><a href="find_ground.php">חיפוש מגרש</a></li>
                <li><a href="#">המגרשים שלי</a></li>
                <li><a href="my_matches.php">המשחקים שלי</a></li>
                <li><a href="#">הגדרות</a></li>
                <li><a href="#">התנתק</a></li>
                <?php 
                //     }else
                //     {
                // <li><a href="index.php">עמוד בית</a></li>
                // <li><a href="find_ground.php">חיפוש מגרש</a></li>
                // <li><a href="grounds.php">מגרשים</a></li>
                // <li><a href="#">משתמשים</a></li>
                // <li><a href="#">דו"חות</a></li>
                // <li><a href="#">הגדרות</a></li>
                // <li><a href="#">התנתק</a></li>?>
               <li> <a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
                <i class="fa fa-bars"></i></a></li>
            </ul>
        </nav>