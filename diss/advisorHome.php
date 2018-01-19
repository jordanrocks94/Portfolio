<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd"> 




<html> 
<link rel="shortcut icon" href="favicon.ico">
<!--java script at bottom of page-->  
	<div class="containerDiv" style="width:auto">
	<header>
		<title>appointment booking system</title>
		<link rel="stylesheet" type="text/css" href="app.css" />
		
		<!-- writes hello user ....
		 <?php
			 // Echo session variables that were set on previous page
			echo "Welcome user " . $_SESSION["username"] . ".<br>";
		 ?> --> 
		<h1>Advisor home page</h1>
		<div class="menuDiv"></div>
	</header>

	<div class="contentDiv" style="width:auto">


	<h2> please select an option </h2>

	<nav> 
	<ul>
		<a href="viewNewAdvisorAppointments.php">view future appointmets</a><a href="viewAdvisorAppointment.php">View past appointments</a> 
        <a href="createAppointmentSlot1.php">create
        booking slot</a> 
		    <a href="logout1.php">Logout</a> 
			 
			 
		
	</ul> 
	</nav>
	
	
		
	</div>

  
	<footer style="width:inherit"> 
	
	<h3>click here to show copyright info</h3>
   <small>appointment Booking system 2016 LTD ©<br>
    25 rainbow road<br>
    mushroom kingdom<br>
    CA12 7UW</small>	
    
  
    
	
	</footer> 
	
	<script type="text/javascript" src="jquery-1.5.2.min.js"></script>

<script>
$(function(){
	//$('footer').append('' );
	//$('footer').append('');
	//$('footer').append('<p> </p>');
	//$('footer').append(' <p>');
	 
	 
	
	$('h3 + small').hide();
	$('h3').click(function(e){
	var para = $(this).next('small');
	para.toggle();
	

	})
    
        .css('cursor', 'pointer');        			     
  
   
	
});


</script>



	</div> 

</html> 

