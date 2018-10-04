<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>addsub</title>
    <link href="css2/bootstrap.css" rel="stylesheet">
</head>
<body>
    
        <?php 
        include("header.php");
        ?>
    <aside>


    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
            <li class="sub-menu">
                    <a href="javascript:;">
                    <i class="fa fa-flask" aria-hidden="true" style="font-size:2.5em;"></i>
                        <span>EXPERT</span>
                    </a>
                    <ul class="sub">
                    
						<li><a href="add_expert.php">ADD EXPERT</a></li>
						<li><a href="view_expert.php">VIEW EXPERT</a></li>
                        <li><a href="edit_expert.php">EDIT EXPERT</a></li>
                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                    <i class="fa fa-book" aria-hidden="true" style="font-size:2.5em;"></i>
                        <span>CATEGORY</span>
                    </a>
                    <ul class="sub">
                        <li><a href="addsub.php">ADD SUBJECT </a></li>
                        <li><a href="view_sub.php">VIEW SUBJECT</a></li>
						<li><a href="edit_sub.php">EDIT SUBJECT</a></li>
                        
                        
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                    <i class="fa fa-briefcase" aria-hidden="true" style="font-size:2.5em;"></i>
                        <span>TEST</span>
                    </a>
                    <ul class="sub">
                    <li><a href="add_test.php">ADD TEST </a></li>
                    <li><a href="view_test.php">VIEW TEST</a></li>
                    <li><a href="edit_test.php">EDIT TEST</a></li>
                        
                        
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-question" aria-hidden="true" style="font-size:2.5em;"></i>
                        <span>QUESTIONS</span>
                    </a>
                    <ul class="sub">
                        <li><a href="add_ques.php">ADD QUESTIONS</a></li>
                        <li><a href="view_ques.php">VIEW QUESTIONS</a></li>
						<li><a href="edit_ques.php">EDIT QUESTIONS</a></li>
                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                    <i class="fa fa-database" aria-hidden="true" style="font-size:2.5em;"></i>
                        <span>QUESTION-PAPER</span>
                    </a>
                    <ul class="sub">
                        <li><a href="add_quiz.php">CREATE QUESTION-PAPER</a></li>
                        <li><a href="view_quiz.php">VIEW QUESTION-PAPER</a></li>
                        <li><a href="edit_quiz.php">EDIT QUESTION-PAPER</a></li>
                       
                       
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:2.5em;"></i>
                        <span>POST </span>
                    </a>
                    <ul class="sub">
                        <li><a href="mail.html">Inbox</a></li>
                        <li><a href="mail_compose.html">Compose Mail</a></li>
                    </ul>
                </li>
                
            
    <!-- sidebar menu end-->
</div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
        
 
   
    <?php
    $obj = mysqli_connect("localhost","root","","quiz_db");
    $q ="select * from test";
    $run =mysqli_query($obj,$q);
    
        if(mysqli_num_rows($run)){
            echo "<div class='container-fluid fixed'>";
            echo "<div class = 'row'>";
            echo "<div class = 'col-md-12'>";
            echo"<table class='table table-light font-weight-bold'>";
          echo " <thead>
            <tr>
              <th scope='col'>TEST ID</th>
              <th scope='col'>SUBJECT ID</th>
              <th scope='col'>SUBJECT NAME</th>
              <th scope='col'>EDIT</th>
              <th scope='col'>DELETE</th>
            </tr>
          </thead>";
         
            while($row = mysqli_fetch_array($run)){
                echo "<tr>";
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                ?>
                <td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#edit<?php echo $row[0];?>'>EDIT</td>
                <td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#delete<?php echo $row[0];?>'>DELETE</td>
                </div>
            </div>
        </div>
                
                            <!-- EDIT Modal -->
                <div class="modal fade" id="edit<?php echo $row[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title"  value="<?php echo $row[0]; ?>">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <!--BODY-->
                        <form method="post" action="update_s.php">
                            <label class="font-weight-bold">Subject</label>
                            <input type = "text" name="test_name"  value ="<?php echo $row[2];?>" class="form-control font-weight-bold"/>
                            <input type = "hidden" name="subject_id"  value ="<?php echo $row[1];?>" />
                            <input type = "hidden" name="test_id"  value ="<?php echo $row[0];?>" />
                            
                        
                      
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" value="save changes" name ="submit_test" class="btn btn-primary">
                      </div></div>
                      </form>
                    </div>
                  </div>
                </div> 

                        <!--Delete Modal -->
                <div class="modal fade" id="delete<?php echo $row[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title"  value="<?php echo $row[0]; ?>">Deletion Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <form method="post" action="delete_sub.php">
                        <h3>Are You Sure To Delete<?php echo $row[1];?></h3>
                      
                      <div class="modal-footer">
                      
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                        <input type="hidden" value="<?php echo $row[0]; ?>" name="test_id" >
                        <input type="submit" value="YES" name ="submit_test" class="btn btn-primary">
                       
                        </form>
                      </div></div>
                     
                    </div>
                  </div>
                </div>                           
                <?php 
            }
            ?>
            </tr>
        </table>
        </div>
        </div>
        </div>
        <?php
        }else{
           echo mysqli_error($obj);
        }
       ?>
    <!---form area-->
    
		

</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
                        
    <script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->


</body>
</html>
    





