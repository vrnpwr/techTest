<?php
    $y=$_REQUEST['y'];
 include("connection.php");
 $q1="UPDATE `expert` SET `status`='0' WHERE `eid`='$y'";
 $run1=mysqli_query($obj,$q1);
 if($run){
     echo "<script>window.location.assign('edit_expert.php')</script>";
 }
 
?>