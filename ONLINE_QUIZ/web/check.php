<?php session_start(); 
    if(isset($_REQUEST['a_submit'])){
        $a=$_REQUEST['a_email'];
        $b=$_REQUEST['a_password'];
       //echo $a;
      // $d = date("l jS \of F Y h:i:s A");
        include"connection.php";
        $q="select * from admin_login_information where a_email = '$a' and a_password='$b'";
        $run = mysqli_query($obj,$q);
        if($row = mysqli_num_rows($run)){
            $_SESSION['a_email']=$a;
            
        echo "<script>window.location.assign('index.php')</script>";
       
        }else{
         header("location:login.php");
        }
        mysqli_close($obj);
    }
?>