
<!DOCTYPE html>
<html>
<head>
<title> Happy Paws</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/loginform.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- //Custom Theme files -->
<!-- web font -->  
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Gorditas" rel="stylesheet">

</head>
<body>
<?php include 'header.php';?>
	<!-- main -->
	<div class="main">
		<h1>Hey There!</h1>
		<div class="main-formclass">
			<!-- login form -->
			<div class="login-form login-form-left"> 
				<div class="agile-row">
					<h2>SignIn !</h2> 
					<div class="login-agileits-top"> 	
						<form action="#" method="post"> 
							<p>User Name </p>
							<input type="text" class="name" name="user name" required=""/>
							<p>Password</p>
							<input type="password" class="password" name="Password" required=""/>  
							
						
								<label class="anim">
								<input type="checkbox" class="checkbox">
								<span> Remember me ?</span> 
							</label>   
							
					<div class="login-agileits-bottom"> 
						<h6><a href="#">Forgot password?</a></h6>
					</div> 
							
							<input type="submit" value="Sign In"> 
						</form> 	
					</div> 

				</div>  
			</div> 
			<!-- sign up form -->
			<div class="login-form agileits-right"> 
				<div class="agile-row">
					<h3>SignUp !</h3> 
					<div class="login-agileits-top"> 	
						<form action="#" method="post"> 
							<p>User Name </p>
							<input type="text" class="name" name="user name" required=""/>
							<p>Email</p>
							<input type="text" class="email" name="email" required=""/>
							<p>Password</p>
							<input type="password" class="password" name="password" required=""/>  
							
							
							<label class="anim">
							
							</label>   
							<input type="submit" value="Sign Up">
						</form> 	
					</div>  
				</div>  
			</div> 
			<div class="clear"> </div>	 
		</div>	
	</div>	
	<!-- //main -->
	<!-- copyright -->
<?php include 'footer.php';?>
	<!-- //copyright --> 
</body>
</html>