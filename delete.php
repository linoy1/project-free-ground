<?php
 
 include "db.php";
 include "config.php";
 
 $id=$_POST['delete_id'];
 $query=mysqli_query($conecction,"DELETE FROM tbl_matches_215 WHERE id='$id' ");
?>