<?php
	
	$nameErr = $emailErr =  $subjectErr = $mobileErr = $qualificationErr = $addressErr = "";
	$name = $email =  $subject =$mobile = $qualification = $address = "";

						if($_SERVER['REQUEST_METHOD']="POST"){
							if(empty($_POST['name'])){
								$nameErr="name is required";
							}else{
								$name=	test_input($_POST['name']);
							}
							if(empty($_POST['email'])){
                                $emailErr="email is required";
                                echo $emailErr;
							}else{
								$email= test_input($_POST['email']);
							}
							if(empty($_POST['subject'])){
								$subjectErr="select your subject";
							}else{
								$subject= test_input($_POST['subject']);
                            }
							if(empty($_POST['mobile'])){
								$mobileErr="please insert your Mobile number";
							}else{
								$mobile =input_test($_POST['mobile']);
                            }
                            if(empty($_POST['qualification'])){
								$mobileErr="please insert your qualification";
							}else{
								$mobile =input_test($_POST['qualification']);
                            }
                            if(empty($_POST['address'])){
								$mobileErr="please insert your Address";
							}else{
								$mobile =input_test($_POST['address']);
                            }
                           
							

						}

?>