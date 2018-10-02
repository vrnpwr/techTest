<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | SignUp Page :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="expert/css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="expert/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="expert/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='expert/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="expert/js/jquery-1.11.1.min.js"></script>
<script src="expert/js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="expert/js/metisMenu.min.js"></script>
<script src="expert/js/custom.js"></script>
<link href="expert/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 

	<!-- //header-ends -->

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h2 class="title1">SignUp Here</h2>
				<div class="sign-up-row widget-shadow">
					<h5>Personal Information :</h5>


                    <!--FORM START-->
					<form action="insert_subject.php" name="expert_form" method="POST" >
					<div class="sign-u">
	<input type="text" name="name" placeholder="Name" required="" pattern="[a-zA-z]{0-20}">
						<div class="clearfix"> </div>
					
				
					<div class="sign-u">
    <input type="email" placeholder="Email Address" required="" name="email">
						<div class="clearfix"> </div>

					</div>
					<div class="sign-u">
					<select name="subject" class="form-control">
		
		<?php
    	$obj = mysqli_connect("localhost","root","","quiz_db");
    	$q ="select * from subjects";
    	$run =mysqli_query($obj,$q);
    
			echo "<option>--SUBJECT--</option>";
            while($row=mysqli_fetch_array($run))
			{
            echo "<option value ='".$row['s_name']."'>".$row['s_name']."</option>";                
            }
                    
            ?>
            </option>

			<div class="sign-u">
    <input type="text" name="mobile" placeholder="Mobile Number" required="" pattern="[0-9]{10}">
						<div class="clearfix"> </div>

					</div>
		
  
						<div class="clearfix"> </div>
					</div>

					<div class="sign-u">
						<div class="sign-up1">
							<h4>Gender :</h4>
						</div>
						<div class="sign-up2">
							<label>
	<input type="radio" name="gender"  value="male">
								Male
							</label>
							<label>
	<input type="radio" name="gender"  value="female">
								Female
							</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<select name="qualification" class="form-control">
			<option>---SELECT QUALIFICATION---</option>
			<option value="bca">BCA</option>
			<option value="mca">MCA</option>
			<option value="mtech">MTECH</option>
			<option value="btech">MTECH</option>
			<option value="ba">BA</option>
			<option value="ma">MA</option>
			</select>

					<div class="sign-u">
	<input type="text" placeholder="City" name="address" required="">
						
					</div>
					
						<div class="clearfix"> </div>
					<div class="sub_home">
    <input type="submit"  name="submit_request"/>
						<div class="clearfix"> </div>
					</div>
					<div class="registration">
						Already Registered.
						<a class="" href="expert_login.php">
							Login
						</a>
					</div>
				</form>
				</div>
			</div>
		</div>
		<!--footer-->
	
        <!--//footer-->
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
	<!-- side nav js -->
	<script src='expert/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="expert/js/jquery.nicescroll.js"></script>
	<script src="expert/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
	<script src="expert/js/bootstrap.js"> </script>
	
</body>
</html>