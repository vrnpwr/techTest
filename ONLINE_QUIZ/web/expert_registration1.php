<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Registration :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Register Now</h2>
	
				<form action="insert_subject.php" name="expert_form" method="POST" >
			<input type="text" class="ggg" name="name" placeholder="NAME" pattern="[A-Za-z]{3-10}"  autofocus ><span class="error" hidden>enter chracters between 3-10</span>
			<input type="email" class="ggg" name="email" placeholder="E-MAIL" ><span class="error"></span>
			
		
		<select name="subject" class="form-control">
		
		<?php
    	$obj = mysqli_connect("localhost","root","","quiz_db");
    	$q ="select * from subjects";
    	$run =mysqli_query($obj,$q);
    
			echo "<option></option>";
            while($row=mysqli_fetch_array($run))
			{
            echo "<option value ='".$row['s_name']."'>".$row['s_name']."</option>";                
            }
                    
            ?>
            </option>

			
			<input type="text" class="ggg" name="mobile" placeholder="PHONE" ><span class="error"></span>
			
			<select name="qualification" class="form-control">
			<option>---SELECT QUALIFICATION---</option>
			<option value="bca">BCA</option>
			<option value="mca">MCA</option>
			<option value="mtech">MTECH</option>
			<option value="btech">MTECH</option>
			<option value="ba">BA</option>
			<option value="ma">MA</option>
			</select>

			<input type="text" class="ggg" name="address" placeholder="ADDRESS" >

			<h4><input type="checkbox" />I agree to the Terms of Service and Privacy Policy</h4>
			
				<div class="clearfix"></div>
				<input type="submit" value="submit_expert" onclick="validate()"; name="submit_request" >

			


		</form>
		<p>Already Registered.<a href="login.html">Login</a></p>

		
    <!-- expert insert with form validation function-->
    
</div>
</div>
<script type="text/javascript">
   <!--
      // Form validation code will come here.
      function validate()
      {
      
         if( document.expert_form.name.value == "" )
         {
            alert( "Please provide your name!" );
            document.expert_form.name.focus() ;
            return false;
         }
         
         if( document.expert_form.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.expert_form.email.focus() ;
            return false;
         }
         
         
         if( document.expert_form.subject.value == "-1" )
         {
			alert( "Select Your Subject!" );
			document.expert_form.subject.focus() ;
            return false;
		 }
		 if( document.expert_form.mobile.value == "" )
         {
			alert( "Enter your mobile!" );
			document.expert_form.mobile.focus() ;
            return false;
		 }
		 if( document.expert_form.qualification.value == "-1" )
         {
			alert( "Select your Qualification" );
			document.expert_form.qualification.focus() ;
            return false;
		 }
		 if( document.expert_form.address.value == "" )
         {
			alert( "Enter your address" );
			document.expert_form.address.focus() ;
            return false;
         }
         return( true );
      }
   //-->
</script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
