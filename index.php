<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cyber-Shiksha</title>
    <link rel="stylesheet" href="style2.css">
	<link href="https://fonts.googleapis.com/css2?
	family=Poppins:wght@300";400;500;600;700&display=swap"
	rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-
	awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
.topnav-right {
  float: right;
}
.header img {
  float: left;
  width: 300px;
  height: 100%;
  background: #555;
}
.col-3{
	background-color:green;
}

</style>
</head>
<body>
<div class="topnav" id="myTopnav" >
<a href="contactus.php"><font color="red"><b>Get In Touch</b></font></a>
<div class="topnav-right">
<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
	
  <a href="index.php"class="active">Home |</a>
  <a href="About.php">About |</a>
  <a href="Account.php">All Courses |</a>
  <a href="LCL.php">Local Chapter |</a>
  <a href="feedback.php">feedback </a>
  <div style="padding-left:16px">
  </a>
  </div>
</div>
</div>
</div>
<br>
<div class="header">
<a href="index.php">
<img src="img\clogo.png" alt="logo" width="100%" height="5px">
</a>
</div>
<div class="container">
<marquee><b>India's Leading Technology Based website on Programming and Cyber security</b>//<b>You Can Contact in The Whatsapp:-  </b>
<a href="https://api.whatsapp.com/send?phone=9304121249&text=Hello Welcome to Softweb"><b>Whatsapp Chat</b></a></marquee></div>
<h2><b></b></h2>


<button type="submit" name="submit" class="btn btn-primary btn-lg" style="margin: 0px;">
<div class="topnav-left">
<p><a href="index3.php"><font color="white"><b>Students Participation in Quiz Compitition</b></font></font></p>
</div>
</button>

<button type="submit" name="submit" class="btn btn-primary btn-lg" style="margin: 0px;"><b>
<p class="blink"><b><font color="white">Current Date and Time is </b><span id='date-time'></span></p>
<script>
var dt = new Date();
document.getElementById('date-time').innerHTML=dt;
</script>
</div>
</button></b>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<button type="submit" name="submit" class="btn btn-primary btn-lg" style="margin: 0px;">
<div class="topnav-right">
<p><a href="Account.php"><b><font color="white"><b>Login  / Register </b></font></a></p></font></button>
</div>
<br><br>

<!----------------------------------Scroll img code---------------------------------->

<body style="text-align: center;">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img\glow12.gif" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="img\glow13.gif" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img\glow14.gif" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
	

		
</head>
</div >
<br>
<!------------------Account-page------------>
<div class="account-page">
	<div class="container">
<head>
    <style>
        .blink {
            animation: blinker 1.5s linear infinite;
            color: red;
            font-family: sans-serif;
        }
        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }
    </style>
</head>
<body>
<div class="container"><p class="blink"><b><font size="8px" color="brown">Hack before you get cracked </font><b></p></div>
<h1><b>"india's Largest <font color="red">"Cyber-Shiksha" </font>Digital Literacy Platform for Student's" </b></h1>
</body>
		<div class="row">
		
			<div class="col-2">
			<font size="15px"><font color="blue"><b></b></font></font>
				<video width="300" height="400px" width="400px"controls>
  <source src="vide021.mp4" type="video/mp4">
  <source src="vide021.ogg" type="video/ogg">
</video>
			</div>
			<div class="col-2">
				<div class="form-container" color="blue">
					<div class="form-btn">
						<span onclick="login()">Demo</span>
						<span onclick="register()">Video Link</span>
						<hr id="Indicator">
						
					</div>
					
					<form id="LoginForm">
						<p><font color ="red">Class 1 </font>-- <a href="#">Why Cyber Shiksha is Important</a></p>
						<p><font color ="red">Class 2 </font>-- <a href="#">Cyber Security is Most Important in Our Life</a></p>
						<p><font color ="red">Class 3 </font>-- <a href="Account.php">Why Cyber Shiksha is Important</a></p>
						<p><font color ="red">Class 4 </font>-- <a href="Account.php">Cyber Security is Most Important in Our Life</a></p>
						<p><font color ="red">Class 5 </font>-- <a href="Account.php">Cyber Security is Most Important in Our Life</a></p>
						<button type="Submit"class="btn">Buy Courses Lectures</button>
						
					</form>
					
					<form id="RegForm">
						<p><font color ="red"> 1 Video </font>-- <a href="#">Why Cyber Shiksha is Important</a></p>
						<p><font color ="red"> 2 Video </font>-- <a href="#">Cyber Security is Most Important in Our Life</a></p>
						<p><font color ="red"> 3 Video </font>-- <a href="Account.php">Why Cyber Shiksha is Important</a></p>
						<p><font color ="red"> 4 Video </font>-- <a href="Account.php">Cyber Security is Most Important in Our Life</a></p>
						<p><font color ="red"> 5 Video </font>-- <a href="Account.php">Cyber Security is Most Important in Our Life</a></p>
						<button type="Submit"class="btn">Buy Courses Video Lecture</button>
						
					</form>
						
				</div>
			</div>
		</div>
	</div>
</div>

<!------------------js for toggle menu------------>
<script>
	var MenuItems = document.getElementById("MenuItems");
	
	MenuItems.style.max-Height = "0px";

	function menutoggle(){
		if(MenuItems.style.maxHeight == "0px")
			{
				MenuItems.style.maxHeight == "200px";
			}
		else
			{
				MenuItems.style.maxHeight == "0px";
			}
	}
</script>
<!------js for toggle form------->
<script>
var LoginForm=document.getElementById("LoginForm");
var RegForm=document.getElementById("RegForm");
var Indicator=document.getElementById("Indicator");

function register(){
	RegForm.style.transform="translateX(0px)";
	LoginForm.style.transform="translateX(0px)";
	Indicator.style.transform="translateX(100px)";
}
function login(){
	RegForm.style.transform="translateX(300px)";
	LoginForm.style.transform="translateX(300px)";
	Indicator.style.transform="translateX(0px)";
}

</script>



	<div class="p-5 bg-primary text-white text-center">
  <h1><font color="white"><b><br>Career guidance</b><h1></font>
  
  <p><font color="white">Career guidance is a formal way for people to receive advice on their career at different stages..<br><br></font></p> 
</div>
</div>

<div class="Container"><font size="8px"><p>Team Message</p></font></div>

<!-----------------------container---------------->
<br><br>
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.row{
   padding: 0 15px;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: green;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}




</style>
</head>
<body>
<div class="container">
	<div class='row'>
		<div class='col-md-4'>
		
		
		<div class="card">
      <img src="img/na.jpg" alt="Jane" style="width:50%"height="120px"></div>

			<h1><span class="label label-success">Md Tausif Asgar</span></h1>
			<p style='text-align:justify'>Hello everyone this is Md Tausif Asgar, a web developer and designer cum and a security expert , currently I am working with multiple mnc's providing them the best software solutions and security advise ,we welcome you to the world of cyber shiksha where you will explore and learn deeper concepts of the technology and security related concerns ,we will offer you all about the majors and minors of the field which will help you develop your coding skills as well as furnish a software product by live demonstrations of various work module,cyber security is not about attacking someone else's confidential data but to protect one's own from getting tampered and misused  ,so i tausif asgar senior developer and hr @ rv web welcome you on board...! Happy learning
			<p><button class="button"><a href="contactus.php"><font color="white"><b>Contact</b></a></font></button></p>			
		</div>
		<div class='col-md-4'>
		<div class="card">
      <img src="img/k.jpg" alt="Jane" style="width:50%"height="120px"></div>
			<h1><span class="label label-success">Kunal Pandey</span></h1>
			<p style='text-align:justify'>"Hack before you get cracked" the world of hacking is full of surprises what you are considering as secure 🔐 will be the most vulnerable and what you don't will give you a path to go on , in lesser words "what could go wrong will always go wrong " In this world full of uncertainties we are here to help you sail through the storms of data breaches and leakage,so to make yourself protected from those we will be your sailors so just hop on and continue the voyage with us get pull your sleeves up and seat buckled as it's going to be a bumpy ride ..from all of us " welcome to cyber shiksha" where you 'll hack before you get cracked... happy exploring ..welcome everyone this is kunal pandey associate developer and content developer @cyber shiksha Digital Literacy
			<p><button class="button"><a href="contactus.php"><font color="white"><b>Contact</b></a></font></button></p>	
		</div>
		<div class='col-md-4'>
		<div class="card">
      <img src="img/cy.jfif" alt="Jane" style="width:50%"height="120px"></div>
			<h1><span class="label label-success">Organization Motive</span></h1>
			<p style='text-align:justify'>This Company is the Best Software company which deals in web designing services.The company is currently providing their web designing services to very large clients, in Bangalore.The company is offering various types of designs for various types of web applications and websites. WebDesignBangalore is offering comprehensive Web design services to meet all the clients' needs,from building a basic website to building sophisticated online projects.We are serving a number of corporate clients, large and small companies in and around Bangalore, with a distinctive style.WebDesignBangalore has world-class professionals who come with the ability to create eCommerce, stock management software, content management .
			<p><button class="button">Know More</button></p>
		</div>
	</div>
</div>
<br><br><br>
	
<script>
	function countWords(){
		var words = $('#inputField').val();
		var len = words.length;
		$("#show").html(len);
	}
	
	function countPara() {

			// Get the input text value
			var text = document
				.getElementById("inputField").value;

			// Initialize the word counter
			var numWords = 0;

			// Loop through the text
			// and count spaces in it
			for (var i = 0; i < text.length; i++) {
				var currentCharacter = text[i];

				// Check if the character is a space
				if (currentCharacter == " ") {
					numWords += 1;
				}
			}

			// Add 1 to make the count equal to
			// the number of words
			// (count of words = count of spaces + 1)
			numWords += 1;

			// Display it as output
			document.getElementById("show")
				.innerHTML = numWords;
		}
		
		function resetWords(){
			document.getElementById("inputField").value = "";
		}
		
		window.onload = function() {
		  var input = document.getElementById("inputField").focus();
		}

</script>


<div class="item">
        <img src="img\glow15.gif" alt="Chicago" style="width:100%;">
      </div>
	  
<!--------------footer----------------->

<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
					<h3>Get in touch</h3>
				<ul>
				<li text-align="left"><a href="#"><b>Contact: - 9304121249</b></a></li>
				<li text-align="left"><a href="#"><b>Email: - mdasgara057@gmail.com</b></a></li>
				<li text-align="left"><a href="#"><b>Help-line: - 066-2443880</b></a></li>
				</ul>
			</div>
			<div class="footer-col-2">
				<h3>Benifit</h3>
				<ul>
				<li><a href="#"><b>Diffrent Courses</b></a></li>
				<li><a href="#"><b>Addmissions</b></a></li>
				<li><a href="#"><b>Career</b></a></li>
				</ul>
			</div>
			<div class="footer-col-3">
				<h3>Useful link</h3>
				<ul>
					<li><a href="#"><b>About</b></a></li>
					<li><a href="#"><b>Courses</b></a></li>
					<li><a href="#"><b>National Cordinator</b></a></li>
					<li><a href="#"><b>Local Cheptor</b></a></li>
				</ul>
			</div>
			
			
			<div class="footer-col-4">
				<h3>Follow us</h3>
				<ul>
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
</style>
</head>
<body>

<!-- Add font awesome icons -->
<a href="https://www.facebook.com/mdasgar.ansari.562" class="fa fa-facebook"></a>
<a href="https://twitter.com/MdTausifAsgar3?s=08" class="fa fa-twitter"></a>
<a href="https://youtube.com/channel/UCLMGU7fDSNqBvLhpFP-aW5w" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/md_tausif123/" class="fa fa-instagram"></a>
</body>
</html> 

					
				</ul>
			</div>
		</div>
		<hr>
		<p class="copyrihgt">Copyright 2023 - Cyber-Shiksha - || - <b>Powered By</b>:- <font color="red"><b>Cyber-Shiksha</p></b></font>
	</div>
</div>			
</body>
</html>
