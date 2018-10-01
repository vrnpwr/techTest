<?php  session_start();
    if(isset($_REQUEST['submit'])){
        $a=$_REQUEST['add_subject'];
        $e = $_SESSION['a_email'];
        $date = date('d/m/y');
        date_default_timezone_get("Asia/Kolkata");
        $time = date('h:i:s');
        //echo $time;
        $obj = mysqli_connect("localhost","root","","quiz_db");
        $q = "insert into subjects values('','$a','$date','$time')";
        $run = mysqli_query($obj,$q);
        $logs ="insert command by".$e."enter subject"." ".$a;
       // echo $logs;
        if($run>0){
            //$obj1 = mysqli_connect("localhost","root","","quiz_db");
            $q1= "insert into logs values('','$e','$logs','$date','$time')";
            $result=mysqli_query($obj,$q1);
            if($result){
            echo "<script>window.location.assign('addsub.php?x=inserted')</script>";
        }else{
            echo mysqli_error($obj);
        }
        mysqli_close($obj);
    }
}
?>
<?php 
    if(isset($_REQUEST['submit_sub_category'])){
        $a=$_REQUEST['subject'];
        $b=$_REQUEST['test'];
        $fn=$_FILES['pic']['name'];
        $fs=$_FILES['pic']['size'];
        $ft=$_FILES['pic']['type']; 
        $ftmp=$_FILES['pic']['tmp_name'];
        $path="pic/".$fn;
        move_uploaded_file($ftmp,$path);
        $date = date('d/m/y');
        date_default_timezone_get("Asia/Kolkata");
        $time = date('h:i:s');

        
        include("connection.php");
        $q="insert into test values('','$a','$b','$path','$date','$time')";
        $run =mysqli_query($obj,$q);
        if($run){
            echo "<script>window.location.assign('add_test.php?sub=inserted')</script>";
            //echo $q;
        }else{
            echo mysqli_error($obj);
        }
    }
    
?>



<?php 
    if(isset($_REQUEST['submit_request'])){
        $name=$_REQUEST['name'];
        //$name=md5($name);
        $email=$_REQUEST['email'];
        $subject=$_REQUEST['subject'];
        $mobile=$_REQUEST['mobile'];
        $qualification=$_REQUEST['qualification'];
        $address=$_REQUEST['address'];
        
        $date = date('d/m/y');
        date_default_timezone_get("Asia/Kolkata");
        $time = date('h:i:s');
       
       /* $fn=$_FILES['pic']['name'];
        $fs=$_FILES['pic']['size'];
        $ft=$_FILES['pic']['type']; 
        $ftmp=$_FILES['pic']['tmp_name'];
        $path="pic/".$fn;
        move_uploaded_file($ftmp,$path);
        */
        

        
        include("connection.php");
        $q="INSERT INTO `expert`(`eid`, `name`, `email`, `expert_in`, `mobile`, `qualification`, `address`, `date`, `time`,`status`,`password`) VALUES ('','$name','$email','$subject','$mobile','$qualification','$address','$date','$time','0','default')";
        $run =mysqli_query($obj,$q);
        if($run){
            echo "<script>window.location.assign('expert_registration.php?sub=need_approval')</script>";
            //echo $q;
        }else{
            echo mysqli_error($obj);
        }
    }
    
?>