	<header>
        <a href="index.php" id="logo"></a>
    </header>
    
    <nav class="topnav" id="myTopnav">
            <ul>
                <?php
                    if (session_status() === PHP_SESSION_NONE) {
                        session_start();
                    }
                    if(isset($_SESSION["user_type"]) && $_SESSION["user_type"] == "user"){
                ?>
                <?php if(isset($_SESSION['user_id'])){?>
                <li><a href="index.php">עמוד בית</a></li>
                <li><a href="find_ground.php">חיפוש מגרש</a></li>
                <li><a href="#">המגרשים שלי</a></li>
                <li><a href="my_matches.php">המשחקים שלי</a></li>
                <li><a href="#">הגדרות</a></li>
                <li><a href="logout.php">התנתק</a></li>
                <?php }else{?>
                <li><a href="login.php">התחבר</a></li>
                <?php
                }
                    }
                    if(isset($_SESSION["user_type"]) && $_SESSION["user_type"] == "admin")
                    {?>
                <li><a href="index.php">עמוד בית</a></li>
                <li><a href="manage_grounds.php">ניהול מגרשים</a></li>
                <li><a href="#">ניהול משתמשים</a></li>
                <li><a href="#">דו"חות</a></li>
                <li><a href="#">הגדרות</a></li>
                <li><a href="logout.php">התנתק</a></li>?>
               <li> <a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
                <i class="fa fa-bars"></i></a></li>
                <?php }?>
            </ul>
        </nav>