<?php
    include "../db.php";
    $query  = "SELECT football,basketball,tennis,gym FROM tbl_grounds_215 WHERE id =".$_POST['id']; // need to put id from option above
    $result = mysqli_query($connection , $query);
    while($row = mysqli_fetch_array($result)){
        if($row['football']){ ?>
        <option>כדורגל</option>
        <?php }if($row['basketball']){ ?>
        <option>כדורסל</option>
        <?php }if($row['tennis']){ ?>
        <option>טניס</option>
        <?php }if($row['gym']){ ?>
        <option>מתקני כושר</option>
        <?php 
        }
    }
?>