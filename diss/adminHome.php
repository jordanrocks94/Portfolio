<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd"> 




<html> 
<link rel="shortcut icon" href="../favicon.ico">
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
		<h1>Appointment booking system</h1>
		<div class="menuDiv"></div>
	</header>

	<div class="contentDiv">


	<h2> please select an option </h2>

	<nav> 
	<ul>	
			<a href="addClient.php">add Client</a>
			<a href="editClient.php">Edit Client</a> 
			<a href="deleteClient1.php">Delete client</a> 
            <a href="./logout1.php">logout</a> 
            
			
			 
			 
			<!--<a href="logout.php">Logout</a> --> 
		
	</ul> 
	</nav>
	
	
		<div style="text-align:center;width:500px;padding:1.5em 0;"> 
		<h2>
		<span style="color:black;">Current time </span><br />United Kingdom</a></h2> 
		<iframe src="http://www.zeitverschiebung.net/clock-widget-iframe?language=en&timezone=Europe%2FLondon" 
		width="100%" height="130" frameborder="0" seamless></iframe> 
		
		
		 
	</div>
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

