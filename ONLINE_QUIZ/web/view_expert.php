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
    $q ="select * from expert";
    $run =mysqli_query($obj,$q);
    
        if(mysqli_num_rows($run)){
           
            ?>
            <table class='table table-light table-hover'>
           
            <thead>
           <tr>
              <th scope='col'>EID</th>
              <th scope='col'> NAME</th>
              <th scope='col'> EMAIL</th>
              <th scope='col'>SUBJECT</th>
              <th scope='col'>MOBILE</th>
              <th scope='col'>QUALIFICATION</th>
              <th scope='col'>ADDRESS</th>
              <th scope='col'>STATUS</th>
            </tr>
          </thead>
         
           <?php 
           while($row = mysqli_fetch_array($run)){
                echo "<tbody>";
                echo "<tr>";
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
                echo "<td>".$row[4]."</td>";
                echo "<td>".$row[5]."</td>";
                echo "<td>".$row[6]."</td>";
                echo "<td>".$row[10]."</td>";
               
            }?>
            </tr>
        </tbody>
        </table>

        <?php }else{
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
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
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
