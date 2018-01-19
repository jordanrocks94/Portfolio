!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--[if lte IE 8]>
<script src="images_js/javascript/html5.js"></script>
<![endif]-->
<title>Retro games site </title>

<link href="css/games_jq.css" rel="stylesheet" type="text/css" />
<script>


function increseMainFontSize(){
	
	var main = document.getElementById('mainContent');
	main.style.fontsize = '20px';
	

	var header = document.getElementById('logo');
	header.style.fontSize = '20px';
	
	var footer = document.getElementsByTagName('footer');
	footer.style.fontSize = '20px';
	
	var div = document.getElementsByTagName('div');
	div.style.fontSize = '20px';
	
	
	//fontSize = main.style.fontSize,
	//sizes = [16, 20, 24,28 ]
	//len = main.sizes.length,
	//i;
	
	//if(!fontSize){
	//main.style.fontSize = sizes[1] + 'px';	
	//}
	//else{
		//	for(i=0; i<len; i++){
			
		  //    if(i==len-1)
			//  	{
				//	main.style.fontSize = sizes[0] + 'px';
				//}
				//else if(fontSize == [i] + 'px')
					//{
						//main.style.fontSize = sizes[i+1] + 'px'
						//break;
						
				//	}
		    //}
		
	//}
}	 
	


	


function decreseMainFontSize(){
	
	var main = document.getElementById('mainContent');
	main.style.fontSize = '15px'; 
	
	var header = document.getElementById('logo');
	header.style.fontSize = '15px';
	
	var footer = document.getElementsByTagName('footer');
	footer.style.fontSize = '15px';
}



</script>
</head>

<body>
<div id="container">
  
  <header id="logo">
<a href="index.html"><img src="images/RetroGames_logo.jpg" width="669"   height="242" alt="logo image" /></a>
    <h1>Contact Us</h1>
  
    
      <nav>
        <ul>
        
          <li><a href="microsoft.html">Microsoft </a></li>
          <li><a href="nintendo.html">Nintendo</a></li>
          <li><a href="#">Atari</a></li>
          
          <li><a href="videoGameTimeline.html">Video game timeline</a></li>
          <li><a href="#">Contact us</a></li>
        </ul>
      </nav>
      </header>
      </div>
     

       
      
<div id="mainContent">

    
      <div id="vision">
     
      <p><br> <br>Here you will find our contact details on how to get in touch with us if you would prefer you can leave your details in the input form below and one of our staff memebers will get back to you<br><br> 
</p>
<div id = 'contact'>
<p>
<strong>Phone Number:</strong>  02920113990<br>
<strong> Mobile Number: </strong>07123456789<br>
<strong> Email: </strong> Retro_games94@gmail.com</p>      
</div>      
      
     
  


 </div> 
</div>
 
 
  
<div id ="compInfo"> 
 <hr>
 
   <h3>click here to show copyright info</h3>
   
    
  
    <small>RetroGames  LTD 2014 ©<br>
    25 rainbow road<br>
    mushroom kingdom<br>
    CA12 7UW</small>
     
 </div>
  
 <footer>
 
  
   
   
   <div id = "btnAdd">
   <a href="javascript:;" onclick="decreseMainFontSize()"><img src="images/Button-Delete-icon.png" img class = "textSizeButtonD" width="64" height="64" />
   
   <a href="javascript:;" onClick="increseMainFontSize()"><img src="images/Button-Add-icon.png" img class = "textSizeButtonI" width="64" height="64" alt="increase text" />
      </div>
 </footer>
   
   
 
 
 





<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>

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
	if (para.css('display') == 'none') 
	{ $(this).css('background-image','url(images/arrow-r.png)', 'background-repeat: no repeat');
      
	}
	else 
	{ $(this).css('background-image', 'url(images/arrow-down.png)');
    }

	})
    
        .css('cursor', 'pointer');        			     
  
   
	
});


</script>

</body>
</html>
