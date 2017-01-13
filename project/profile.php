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
</head>
<body>
<?php include 'header.php';?>

<!--Tabs-->
<section id="page-cover" class="page-cover">
    <div class="cover-bg" style="background-image=(./images/bg.png);">
        <div class="container">
			<div class="cover-wrap clearfix">
			  <div class="shop-title">
				<h1>Pet Shop Name</h1>
			  </div>
			  <div class="tabs-class">
				  <ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
					<li><a data-toggle="tab" href="#menu1">Pets</a></li>
					<li><a data-toggle="tab" href="#menu2">Reviews</a></li>
					<li><a data-toggle="tab" href="#menu3">Gallery</a></li>
				  </ul>
			  </div>
			</div>
		</div>
	</div>	
</section>
	
		<div class="container-fluid" style="background:white;">
		  <div class="tab-content">
			<div id="home" class="tab-pane fade in active about">
				<div class="container">
					<div class="row"> 	 
						<div class="col-xs-4 col-sm-4 col-md-4">
							<img class="img-responsive" src="images/findVet.jpg"  width="460" height="345">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8">
							<h3>About (Pet Shop Name)</h3>
							<p>Lahore has to offer – and pets and vets Animal clinic takes great pride in making sure he's treated like a member of the family.
							Since 1996, pets and vets clinic leads by combining compassionate care with the latest in medical technology and treatment</p>
							<h3 class="text-uppercase">Address</h3>
							<div class="vcard">
								<p class="adr">
									<span class="street-address">148-Y Block, Lahore, Punjab, Pakistan</span><br>
								</p>
							</div>
							<h3 class="text-uppercase">Contact Number</h3>
							<div class="vcard">
								<p class="adr">
									<span class="street-address">0331-1234567</span><br>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--PETS LIST-->
			<div id="menu1" class="tab-pane fade">
				<div class="container" style="padding:20px;">
					<div class="row"> 
					
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="container card1">
								<div class="row"> 
									<div class="col-xs-12 col-sm-12 col-md-12">
										<img class="img-responsive" src="images/doggy.jpg"  width="460" height="345">
									</div>
								</div>
								<div class="row pet-desc"> 
									<div class="col-xs-12 col-sm-12 col-md-12">
										<h3>Name of Pet</h3>
										<p>This is the description of pet.</p>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
										Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
										<center><a href="#" class="btn btn-warning" role="button">Buy Now</a></center>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="container card1">
								<div class="row"> 
									<div class="col-xs-12 col-sm-12 col-md-12">
										<img class="img-responsive" src="images/doggy.jpg"  width="460" height="345">
									</div>
								</div>
								<div class="row pet-desc" > 
									<div class="col-xs-12 col-sm-12 col-md-12">
										<h3>Name of Pet</h3>
										<p>This is the description of pet.</p>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
										Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
										<center><a href="#" class="btn btn-warning" role="button">Buy Now</a></center>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="container card1">
								<div class="row"> 
									<div class="col-xs-12 col-sm-12 col-md-12">
										<img class="img-responsive" src="images/doggy.jpg"  width="460" height="345">
									</div>
								</div>
								<div class="row pet-desc"> 
									<div class="col-xs-12 col-sm-12 col-md-12">
										<h3>Name of Pet</h3>
										<p>This is the description of pet.</p>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
										Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
										<center><a href="#" class="btn btn-warning" role="button">Buy Now</a></center>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="container card1">
								<div class="row"> 
									<div class="col-xs-12 col-sm-12 col-md-12">
										<img class="img-responsive" src="images/doggy.jpg"  width="460" height="345">
									</div>
								</div>
								<div class="row pet-desc"> 
									<div class="col-xs-12 col-sm-12 col-md-12">
										<h3>Name of Pet</h3>
										<p>This is the description of pet.</p>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
										Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
										<center><a href="#" class="btn btn-warning" role="button">Buy Now</a></center>
									</div>
								</div>
							</div>
						</div>
						
					</div>	
					<br>
					<br>
					<!--next row-->
					<div class="row"> 
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="container card1">
								<div class="row"> 
									<div class="col-xs-12 col-sm-12 col-md-12">
										<img class="img-responsive" src="images/doggy.jpg"  width="460" height="345">
									</div>
								</div>
								<div class="row pet-desc"> 
									<div class="col-xs-12 col-sm-12 col-md-12">
										<h3>Name of Pet</h3>
										<p>This is the description of pet.</p>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
										Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
										<center><a href="#" class="btn btn-warning" role="button">Buy Now</a></center>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="container card1">
								<div class="row"> 
									<div class="col-xs-12 col-sm-12 col-md-12">
										<img class="img-responsive" src="images/doggy.jpg"  width="460" height="345">
									</div>
								</div>
								<div class="row pet-desc" > 
									<div class="col-xs-12 col-sm-12 col-md-12">
										<h3>Name of Pet</h3>
										<p>This is the description of pet.</p>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
										Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
										<center><a href="#" class="btn btn-warning" role="button">Buy Now</a></center>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="container card1">
								<div class="row"> 
									<div class="col-xs-12 col-sm-12 col-md-12">
										<img class="img-responsive" src="images/doggy.jpg"  width="460" height="345">
									</div>
								</div>
								<div class="row pet-desc"> 
									<div class="col-xs-12 col-sm-12 col-md-12">
										<h3>Name of Pet</h3>
										<p>This is the description of pet.</p>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
										Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
										<center><a href="#" class="btn btn-warning" role="button">Buy Now</a></center>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="container card1">
								<div class="row"> 
									<div class="col-xs-12 col-sm-12 col-md-12">
										<img class="img-responsive" src="images/doggy.jpg"  width="460" height="345">
									</div>
								</div>
								<div class="row pet-desc"> 
									<div class="col-xs-12 col-sm-12 col-md-12">
										<h3>Name of Pet</h3>
										<p>This is the description of pet.</p>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
										Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
										<center><a href="#" class="btn btn-warning" role="button">Buy Now</a></center>
									</div>
								</div>
							</div>
						</div>

						
						
					</div>	
					
				</div>	
			</div>
			
			
			
			
			
			
			
			
			
			<div id="menu2" class="tab-pane fade">
			  <h3>Reviews</h3>
			  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
			</div>
			<div id="menu3" class="tab-pane fade">
			  <h3>Gallery</h3>
			  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			</div>
		  </div>
		</div>
		


<!--Tabs End-->
<?php include 'footer.php';?>
</body>
</html>

