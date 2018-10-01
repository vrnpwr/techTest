<?php 
    if(isset($_REQUEST['submit'])){
        $a=$_REQUEST['subject'];
        $b=$_REQUEST['s_id'];
        
        $date = date('d/m/y');
        date_default_timezone_get("asia/kolkata");
        $time = date('h:i:s');
        include("connection.php");
        $q="update subjects set s_name='$a',date='$date',time='$time' where s_id='$b'";
        $run = mysqli_query($obj,$q);
        if($run>0){
            echo "<script>window.location.assign('edit_sub.php?y=updated')</script>";
        }else{
            mysqli_error($obj);
        }
    }
?>
<?php 
    if(isset($_REQUEST['submit_test'])){
        $a=$_REQUEST['test_id'];
        $b=$_REQUEST['subject_id'];
        $c=$_REQUEST['test_name'];
        $date = date('d/m/y');
        date_default_timezone_get("asia/kolkata");
        $time = date('h:i:s');
        include("connection.php");
        $qu="update test set test_name='$c',date='$date',time='$time' where test_id='$a'";
        $run = mysqli_query($obj,$qu);
        if($run>0){
            echo "<script>window.location.assign('edit_test.php?sub=edit_successfully')</script>";
        }else{
            echo mysqli_error($obj);
        }
    }else{
        mysqli_close($obj);
    }
?>