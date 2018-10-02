<?php
$x=$_REQUEST['x'];
    include("connection.php");
 $q="UPDATE `expert` SET `status`='1' WHERE `eid`='$x'";
 $run=mysqli_query($obj,$q);
 if($run){
     echo "<script>window.location.assign('edit_expert.php')</script>";
 }

?>

