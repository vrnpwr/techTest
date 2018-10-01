<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>addsub</title>
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
            if(isset($_REQUEST['x'])){
                $mess = $_REQUEST['x'];
                if($mess='inserted'){
                    echo "<div class='alert alert-success'>Subject Inserted</div>";
                }
            }
            if(isset($_REQUEST['y'])){
                $mess = $_REQUEST['y'];
                if($mess='not inserted'){
                    echo "<div class='alert alert-danger '>Subject Not Inserted</div>";
                }
            }
        ?>
  <div class="container">
  <div class="row">
    <div class="col-sm-6">
  <form action="insert_subject.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Add Subject</label>
    <input type="text" class="form-control " placeholder="Add Subject" name="add_subject">
    </div>
  <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
        </div>
        </div>
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
	
</body>
</html>
    




</body>
</html>
