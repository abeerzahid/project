<!DOCTYPE html>
<html lang="en">
<head>
  <title>Happy Paws</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/petslist.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Gorditas" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="booking-bg">
<?php include 'header.php';?>

<!--Page Content-->
<div class="container">
		<div class="row-fluid" style="padding-top:90px">

				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 well well1">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
							<img class="img-responsive" src="images/vetdog.jpg">
						</div>	
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
							<h1>Name of Vet<h1> <br> 
							<p>Description<p> <br>
							<h5><i class="fa fa-calendar"></i> 2017-01-09</h5><br>
							<h5><i class="fa fa-clock-o"></i> 02:00 PM</h5>
							
						</div>
					</div>
					<hr></hr>
					<div class="row" style="padding-top:20px">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
							<a href="#"><img class="img-responsive" src="images/map_icon.jpg" style="width:30%"></a>
							
						</div>	
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
							<h1>Name of Vet<h1> <br> 
							<p>Description<p> 
						
						</div>
					</div>
				</div>
			
		  
		    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 well">
				<form class="form-horizontal" action="" method="post">
			
					<!-- First Name input-->
					<div class="form-group">
					  <label class="col-md-3 control-label" for="name">First Name:</label>
					  <div class="col-md-6">
						<input id="name" name="name" type="text" placeholder="Your first name" class="form-control"  required>
					  </div>
					</div>
					
					<!-- Last Name input-->
					<div class="form-group">
					  <label class="col-md-3 control-label" for="name">Last Name:</label>
					  <div class="col-md-6">
						<input id="name" name="name" type="text" placeholder="Your last name" class="form-control"  required>
					  </div>
					</div>
			
					<!-- Email input-->
					<div class="form-group">
					  <label class="col-md-3 control-label" for="email">E-mail:</label>
					  <div class="col-md-6">
						<input id="email" name="email" type="text" placeholder="Your email" class="form-control" required>
					  </div>
					</div>
					
					<!-- Subject -->
					<div class="form-group">
					  <label class="col-md-3 control-label" for="subject">Subject:</label>
					  <div class="col-md-6">
						<textarea class="form-control" id="subject" name="subject" placeholder="Please enter your subject here..." rows="1"  required></textarea>
					  </div>
					</div>
					
					
					<!-- Message body -->
					<div class="form-group">
					  <label class="col-md-3 control-label" for="message">Message:</label>
					  <div class="col-md-6">
						<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"  required></textarea>
					  </div>
					</div>
			
					<!-- Form actions -->
					<div class="form-group">
					  <div class="col-md-12 text-center">
						<button type="submit" class="btn btn-lg">Submit</button>
					  </div>
					</div>
				  
				</form>
		    </div>
		</div>
</div>	  
<!--Page Content-->

<?php include 'footer.php';?>
</body>
</html>

