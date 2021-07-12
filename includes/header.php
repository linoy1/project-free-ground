	<header>
        <a href="index.php" id="logo"></a>
    </header>
    
    <script src="js/scripts.js"></script>
    <nav class="topnav" id="myTopnav">
                <?php
                    $pageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
                    if (session_status() === PHP_SESSION_NONE) {
                        session_start();
                    }
                    if(!isset($_SESSION["user_id"])){?>
                        <a href="login.php" <?php if($pageName=="login.php"){echo 'class="active"';}?> >התחבר</a>
                        <?php }
                        else{
                    if(isset($_SESSION["user_type"]) && $_SESSION["user_type"] == "user"){
                ?>
                <a href="index.php" <?php if($pageName=="index.php"){echo 'class="active"';}?> >עמוד בית</a>
                <a href="find_ground.php" <?php if($pageName=="find_ground.php"){echo 'class="active"';}?>>חיפוש מגרש</a>
                <a href="#">המגרשים שלי</a>
                <a href="my_matches.php" <?php if($pageName=="my_matches.php"){echo 'class="active"';}?>>המשחקים שלי</a>
                <a href="#">הגדרות</a>
                <a href="logout.php">התנתק</a>
                <?php }
                    if(isset($_SESSION["user_type"]) && $_SESSION["user_type"] == "admin")
                    {?>
                <a href="index.php" <?php if($pageName=="login.php"){echo 'class="active"';}?> >עמוד בית</a>
                <a href="manage_grounds.php" <?php if($pageName=="manage_grounds.php"){echo 'class="active"';}?> >ניהול מגרשים</a>
                <a href="#">ניהול משתמשים</a>
                <a href="#">דו"חות</a>
                <a href="#">הגדרות</a>
                <a href="logout.php">התנתק</a>
                
                <?php }
                }?>
                <a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
                    <i class="fa fa-bars"></i></a>
            
        </nav>