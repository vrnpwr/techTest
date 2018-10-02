<?php 
    if(isset($_REQUEST['submit'])){
        //$a=$_REQUEST['subject'];
        $b=$_REQUEST['s_id'];
        
      
        include("connection.php");
        $q="delete from subjects where s_id = '$b'";

        $run = mysqli_query($obj,$q);
        if($run>0){
           
            echo "<script>window.location.assign('edit_sub.php?sub=deleted')</script>";
        }else{
            mysqli_error($obj);
        }
    }

    
?>
<?php 
    if(isset($_REQUEST['submit_test'])){
        $a=$_REQUEST['test_id'];
        include("connection.php");
        $qu="delete from test where test_id='$a'";
        $run =mysqli_query($obj,$qu);
        if($run>0){
            echo "<script>window.location.assign('edit_test.php?sub=test_deleted')</script>";
        }else{
            echo mysqli_error($obj);
        }
    }else{
       // mysqli_close($obj);
    }
?>
<?php
    if(isset($_REQUEST['delete'])){
        $d=$_REQUEST['delete'];
        $obj = mysqli_connect("localhost","root","","quiz_db");
        $qe="DELETE FROM `expert` WHERE `eid`='$d'";
        $run=mysqli_query($obj,$qe);
        if($run>0){
            echo "<script>window.location.assign('edit_expert.php')</script>";
        }else{
           echo mysqli_error($obj);
        }
    }else{
       
        echo $d;
    }

    ?>