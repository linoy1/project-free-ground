<?php
 
 include "db.php";
 if($_GET['type']=="match"){
    $query="DELETE FROM tbl_matches_215 WHERE id=".$_POST['delete_id'];
    $result=mysqli_query($connection,$query);
 }
 if($_GET['type']=="ground"){
    $query="DELETE FROM tbl_grounds_215 WHERE id=".$_POST['delete_id'];
    $result=mysqli_query($connection,$query);
 }
?>