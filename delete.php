<?php
 
 include "db.php";
 include "config.php";

 $query="DELETE FROM tbl_matches_215 WHERE id=".$_POST['delete_id'];
 $result=mysqli_query($connection,$query);
?>