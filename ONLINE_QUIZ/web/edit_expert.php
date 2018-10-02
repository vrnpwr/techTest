<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>addsub</title>
    <link href="css2/bootstrap.css" rel="stylesheet">
    <script src="next.js"></script>
</head>
<body>
    
        <?php 
        include("header.php");
        include("aside2.php");
        ?>
    
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
            <div class='container-fluid fixed'>
           <div class = 'row'>
            <div class = 'col-md-12'>
            <table class='table table-light font-weight-bold table-hover'>
            <thead>
            <tr>
              <th scope='col'>EID</th>
              <th scope='col'>NAME</th>
              <th scope='col'>EMAIL</th>
              <th scope='col'>SUBJECT</th>
              <th scope='col'>STATUS</th>
              <th scope='col'>APPROVE</th>
              <th scope='col'>DISAPPROVE</th>
              <th scope='col'>DELETE</th>
              </tr>
          </thead>
         <?php
            while($row = mysqli_fetch_array($run)){
                echo "<tr>";
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
                echo "<td>".$row[11]."</td>";
                ?>
                        <!--Approve Button-->
                <td><button type='button' class='btn btn-primary' value="<?php echo $row[0]; ?>" id="app" onclick="ap(this.value);">APPROVE</td>
                         <!--Disapprove Button-->
                <td><button type='button' class='btn btn-danger' id="dpp" value="<?php echo $row[0];?>" onclick="di(this.value);"/>DISAPPROVE</td>
                
                <form action="delete_sub.php" method="POST">
                 <td><button type='button/submit' class='btn btn-danger'  value="<?php echo $row[0];?>" name="delete"/>DELETE</td>
                
                </form>
       
                       
                                             
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
    





