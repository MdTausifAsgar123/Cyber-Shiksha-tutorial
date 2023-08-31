<!DOCTYPE html>
<html>
<head>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">	
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style2.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300";400;500;600;700&display=swap"rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>K&T Group</title>

<link rel="icon" href="https://storage.googleapis.com/swayam2_central/assets/img/favicon.ico"/>
<link rel="apple-touch-icon" sizes="152x152" href="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/ico/152x152.png">
<link rel="apple-touch-icon" sizes="167x167" href="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/ico/167x167.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/ico/180x180.png">
<link rel="icon" type="image/png" sizes="196x196" href="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/ico/196x196.png">
<link href="https://storage.googleapis.com/swayam2_central/assets/css/swayam_css/bootstrap.min.css" rel="stylesheet">
<link href="https://storage.googleapis.com/swayam2_central/assets/css/swayam_css/main.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.modal-backdrop{
    opacity:0.8 !important;
}

@media (min-width: 992px) {
    #homePageModal {
      text-align: center;
      padding: 0!important;
    }

    #homePageModal:before {
      content: '';
      display: inline-block;
      height: 100%;
      vertical-align: middle;
      margin-right: -4px;
    }

    #homePageModal .modal-dialog {
      display: inline-block;
      text-align: left;
      vertical-align: middle;
    }
}

@media (max-width: 768px) {
  .modal-dialog.modal-sm {
    width: 300px;
    margin: 30px auto;
  }
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://storage.googleapis.com/swayam2_central/assets/js/swayam_js/jquery.js"></script>
<script src="https://storage.googleapis.com/swayam2_central/assets/js/swayam_js/bootstrap.min.js"></script>
<script type="text/javascript">
var idleTime = 0;
$(document).ready(function () {
    //home page modal triggered here based on session storage check
    let popUpFlagVal = sessionStorage.getItem("popUpFlag");
    if(popUpFlagVal !== "true" || popUpFlagVal === "undefined"){
        $("#homePageModal").modal({
            show: true,
            backdrop: 'static',
            keyboard: false
        });
        sessionStorage.setItem("popUpFlag", "true");
    }
    
    var currentUserEmail = 'None'

    if (currentUserEmail != "None"){
       var idleInterval = setInterval(timerIncrement, 60000); // 1 minute
    }


    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        idleTime = 0;
    });
    $(this).keypress(function (e) {
        idleTime = 0;
    });
});

function timerIncrement() {
    idleTime = idleTime + 1;

    if (idleTime > 119) { // 120 minutes
        window.location.replace("#");
    }
}
</script>
</head>
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
<a href="contactus.php">9304121239 / support@Edu.nic.in</a>
<div class="topnav-right">
<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
	
  <a href="index.php"class="active">Home |</a>
  <a href="About.php">About |</a>
  <a href="Courses.php">All Courses |</a>
  <a href="NatCord.php">National Cordinator |</a>
  <a href="LCL.php">Local Chaptor </a>
  <div style="padding-left:16px">

  </a>
  </div>
</div>
</div>
</div>

<div class="header">
<img src="img\cs.png" alt="logo" width="100%" height="5px">
</div>


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
        <img src="img\bounce.png" alt="Los Angeles" style="width:100%;">
      </div>


  
	
</head>
</div >
<br>


<div class="container">
<center>
  <div class="row">
        
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="AICTE" class="shadowBox">
          <div class="image">
            <img src="img\cy.jfif" alt=""/>
          </div>
          <div class="content2">
            <div class="title">Cyber-Security</div>
  
          </div>
        </a>
      </div>
    
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="CEC" class="shadowBox">
          <div class="image">
            <img src="img\nt.jfif"  alt=""/>
          </div>
          <div class="content2">
            <div class="title">Network Security</div>
            
          </div>
        </a>
      </div>
    
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="IGNOU" class="shadowBox">
          <div class="image">
            <img src="img\crp.png" alt=""/>
          </div>
          <div class="content2">
            <div class="title">Cryptography</div>
          </div>
        </a>
      </div>
    
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="IIMB" class="shadowBox">
          <div class="image">
            <img src="img\AI.jfif"alt=""/>
          </div>
          <div class="content2">
            <div class="title">Artificial Intelligence</div>
            
          </div>
        </a>
      </div>
	  
	  <div class="container">
<center>
  <div class="row">
        
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="AICTE" class="shadowBox">
          <div class="image">
            <img src="img\cy.jfif" alt=""/>
          </div>
          <div class="content2">
            <div class="title">Cyber-Security</div>
  
          </div>
        </a>
      </div>
    
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="CEC" class="shadowBox">
          <div class="image">
            <img src="img\nt.jfif"  alt=""/>
          </div>
          <div class="content2">
            <div class="title">Network Security</div>
            
          </div>
        </a>
      </div>
    
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="IGNOU" class="shadowBox">
          <div class="image">
            <img src="img\crp.png" alt=""/>
          </div>
          <div class="content2">
            <div class="title">Cryptography</div>
          </div>
        </a>
      </div>
    
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="IIMB" class="shadowBox">
          <div class="image">
            <img src="img\AI.jfif"alt=""/>
          </div>
          <div class="content2">
            <div class="title">Artificial Intelligence</div>
            
          </div>
        </a>
      </div>
    
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="NIOS" class="shadowBox">
          <div class="image">
            <img src="img\ro.jfif" alt=""/>
          </div>
          <div class="content2">
            <div class="title">Robotics Work</div>
 
          </div>
        </a>
      </div>
    
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="NITTTR" class="shadowBox">
          <div class="image">
            <img src="img\csa.png" alt=""/>
          </div>
          <div class="content2">
            <div class="title">A-D Algorithm</div>

          </div>
        </a>
      </div>
    
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="NPTEL" class="shadowBox">
          <div class="image">
            <img src="img\cy.jfif" alt=""/>
          </div>
          <div class="content2">
            <div class="title">Security Services</div>

          </div>
        </a>
      </div>
    
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="UGC" class="shadowBox">
          <div class="image">
            <img src="img\ro.jfif" alt=""/>
          </div>
          <div class="content2">
            <div class="title">AWS Training</div>

          </div>
        </a>
      </div>
    
  </div>

</center>
</div>
</div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="UGC" class="shadowBox">
          <div class="image">
            <img src="img\cy.jfif" width="128px" height="128px" alt=""/>
          </div>
          <div class="content2">
            <div class="title">Bright-Code</div>

          </div>
        </a>
      </div>
    
  </div>

</center>
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
		<p class="copyrihgt">Copyright 2023 - Cyber-Shiksha - || - <b>Powered By</b>:- <font color="red"><b>K&T-Group</p></b></font>
	</div>
</div>			

</body>
</html>
