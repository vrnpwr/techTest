<?php session_start(); 
    if(isset($_REQUEST['a_submit'])){
        $a=$_REQUEST['a_email'];
        $b=$_REQUEST['a_password'];
       //echo $a;
      // $d = date("l jS \of F Y h:i:s A");
        include("connection.php");
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

<?php 
    if(isset($_REQUEST['expert_login'])){
        $message="Your Account is not active please contact  administrator";
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        include("connection.php");
        $qu="SELECT * FROM expert WHERE email='$email' AND password='$password' AND status='1'";
        $run1=mysqli_query($obj,$qu);
        if($row1 = mysqli_num_rows($run1)){
            $_SESSION['email']=$email;
            echo "<script>window.location.assign('expert_dashboard.php')</script>";
            //echo 'Congratulations your account is active';
        }else{
            echo $message;
            //echo "<script>window.location.assign('expert_registration.php?z=not_active')</script>";
        }
    }
?>