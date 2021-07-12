<?php
 
 include "db.php";
 if($_GET['type']=="match"){
    $query="DELETE FROM tbl_matches_215 WHERE id=".$_POST['delete_id'];
    $result=mysqli_query($connection,$query);
 }
 if($_GET['type']=="ground"){
    $query="SELECT name FROM tbl_grounds_215 WHERE id=".$_POST['delete_id'];
    $result=mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($result);
    $name = $row ['name'];
    $query="DELETE FROM tbl_grounds_215 WHERE id=".$_POST['delete_id'];
    $result=mysqli_query($connection,$query);
    $query="DELETE FROM tbl_matches_215 WHERE groundName=".$name;
    $result=mysqli_query($connection,$query);
 }
?>