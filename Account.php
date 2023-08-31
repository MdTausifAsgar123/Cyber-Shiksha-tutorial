<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber-Shiksha</title>
    <link rel="stylesheet" href="style2.css">
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
                <a href="index2.php"><img src="img/clogo.png"width="120px"></a>	
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="#"><b>Home</b></a></li>
                    <li><a href="#"><b>About</b></a></li>
                    <li><a href="Account.php"><b>All Courses</b></a></li>
					<li><a href="#"><b>Local Chapter</b></a></li>
					<li><a href="#"><b>feedback</b></a></li>
                </ul>
				</nav>
				<a href="Cart.php"><img src="img/clogo.png" width="30px" height="30px"></a>
				<img src="img/clogo.png" class="menu-icon" 
				onclick="menutoggle()">				
            </div>
        </div>
<!------------------Account-page------------>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } 
?>               
<div class="account-page">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<video width="650" controls>
  <source src="Project Name.mp4" type="video/mp4">
  <source src="Project Name.ogg" type="video/ogg">
</video>
			</div>
			<div class="col-3">
				<div class="form-container">

					<div class="form-btn">
						<span onclick="login()">Please--</span>
						<span onclick="register()">Register</span>
						<hr id="Indicator">
					</div>
		
					<form id="LoginForm">
						<input type="text" placeholder="Username" required="">
						<input type="text" placeholder="Password" required="">
						<button type="Submit"class="btn">Login</button>
						<a href="">Forgot password</a>
					</form>
					
		<form class="form" action="" method="post">
        
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><font color="Red">Already have an account? </font><a href="login.php">Login here</a></p>
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