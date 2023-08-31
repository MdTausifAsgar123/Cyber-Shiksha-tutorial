<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K&T Group</title>
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
                <a href="index2.php"><img src="img/logo24.png"width="120px"></a>	
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php"><b>Home</b></a></li>
                    <li><a href="About.php"><b>About</b></a></li>
                    <li><a href="Account.php"><b>All Courses</b></a></li>
					<li><a href="LCL.php"><b>Local Chapter</b></a></li>
					<li><a href="feedback.php"><b>feedback</b></a></li>
                </ul>
				</nav>
				<a href="Cart.php"><img src="img/logo24.png" width="30px" height="30px"></a>
				<img src="img/logo24.png" class="menu-icon" 
				onclick="menutoggle()">				
            </div>
        </div>
<!------------------Account-page------------>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: courses.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='Courses.php'>Click here to <a href='login.php'>Login</a> again.</p>
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
						<span onclick="register()">Login</span>
						<hr id="Indicator">
					</div>
		
					<form class="form" method="post" name="login">
        
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><font color="Red">Don't have an account? </font><a href="Account.php">Registration Now</a></p>
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