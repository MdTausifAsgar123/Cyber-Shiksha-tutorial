<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K&T Group</title>
    <link rel="stylesheet" href="style32.css">
	<link href="https://fonts.googleapis.com/css2?
	family=Poppins:wght@300";400;500;600;700&display=swap"
	rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-
	awesome/4.7.0/css/font-awesome.min.css">
		
</head>
<body>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index2.php"><img src="img/cs.png"width="120px"></a>	
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php"><b>Home</b></a></li>
                    <li><a href="About.php"><b>About</b></a></li>
					
                    <li><a href="Courses.php"><b>All Courses</b></a></li>
                    <li><a href="Nat.php"><b>National Cordinators</b></a></li>
					<li><a href="LCL.php"><b>Local Cheptor</b></a></li>
                </ul>
				</nav>
				<a href="Cart.php"><img src="img/cs.png" width="30px" height="30px"></a>
				<img src="img/cs.png" class="menu-icon" 
				onclick="menutoggle()">				
            </div>
        </div>
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
<div class="container"><center><p class="blink"><b><font size="8px" color="white">Hack before you get cracked </font><b></p></center></div>
<h1><b>"india's Largest <font color="red">"Cyber-Shiksha" </font>Digital Literacy Platform for Student's" </b></h1><br><br>
</body>
		<div class="row">
		
			<div class="col-2">
			<font size="15px"><font color="blue"><b></b></font></font>
	<video width="650" controls>
  <source src="Project Name.mp4" type="video/mp4">
  <source src="Project Name.ogg" type="video/ogg">
</video>
			</div>
			<div class="col-2">
				<div class="form-container">
					<div class="form-btn">
						<span onclick="login()">Login</span>
						<span onclick="register()">Register</span>
						<hr id="Indicator">
					</div>
					
					<form id="LoginForm">
						<input type="text" placeholder="Username">
						<input type="text" placeholder="Password">
						<button type="Submit"class="btn">Login</button>
						<a href="">Forgot password</a>
					</form>

					<form id="RegForm">
						<input type="text" placeholder="Username">
						<input type="text" placeholder="Email">
						<input type="text" placeholder="Password">
						<button type="Submit"class="btn">Register</button>						
					</form>
						
				</div>
			</div>
		</div>
	</div>
</div>




<!---------footer---------->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
				<h3>Download Our App</h3>
				<p>Download App for Android and ios mobile phone.</p>
				<div class="app-logo">
					<img src="img/app-store.png">
				</div>
			</div>
			<div class="footer-col-2">
				<img src="img/cs.png">
				<p>Our Purpose is to substainably Make the pleasure and
				Benifits of Sports Accessible to the Many.</p>
			</div>
			<div class="footer-col-3">
				<h3>Useful link</h3>
				<ul>
					<li>Coupons</li>
					<li>Blog Post</li>
					<li>Return Policy</li>
					<li>Join Affiliate</li>
				</ul>
			</div>
			<div class="footer-col-4">
				<h3>Follow us</h3>
				<ul>
					<li>Facebook</li>
					<li>Twitter</li>
					<li>Instagram</li>
					<li>YouTube</li>
				</ul>
			</div>
		</div>
		<hr>
		<p class="copyrihgt">Copyright 2021 - Easy Tuturials - || - <b>Powered By</b>:- <font color="red"><b>K&T Group</b></font></p>
		
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


</body>
</html>