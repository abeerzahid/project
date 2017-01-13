<!DOCTYPE HTML>

<html>
<head>
  <title>Happy Paws</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/petshop.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/petprofile.css" rel="stylesheet" type="text/css" media="all" />
  <link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Gorditas" rel="stylesheet">

</head>

<body>

<?php include 'header.php';?>

<div class="container">      
	<ol class="breadcrumb">
		<li><a href="index.html">Home</a></li>
		<li><a href="petshoplist.html">Buy A Pet</a></li>
		<li><a href="profile.html"> Petshop01</a></li>
		<li class="active">Cat01</li>        
	</ol>

	<div class="container-fluid">
    <div class="content-wrapper">	
		<div class="item-container">	
			<div class="container">	
				<div class="col-md-12">
				<br>
				<br>
					<div class="product col-md-3 col-sm-3 col-xs-3 service-image-left">
                    
						
							<img id="item-display" style="height:319px;" class="img-responsve" src="images/pet1.jpg" alt=""></img>
					
					</div>
					
					<div class="container service1-items col-sm-2 col-md-4 col-xs-12 pull-left">
						
							<a id="item-1" class="service1-item">
								<img class="img-responsve" src="images/pet1.jpg" alt=""></img>
							</a>
							<a id="item-2" class="service1-item">
								<img class="img-responsve" src="images/pet1.jpg" alt=""></img>
							</a>
							<a id="item-3" class="service1-item">
								<img class="img-responsve" src="images/pet1.jpg" alt=""></img>
							</a>
					
					</div>

				<div class="col-md-6 col-sm-4 col-xs-12 pull-right">
					<div class="product-title">Persian Cat White</div>
					<div class="product-desc">The Persian cat (Persian: گربه ایرانی) is a long-haired breed of cat characterized by its round face and short muzzle.</div>
					<div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
					<hr>
					<div class="product-price">Rs. 4999.00</div>
					<div class="product-stock">In Stock</div>
					<hr>
					<div class="btn-group cart">
						<button type="button" class="btn btn-success">
							Add to cart 
						</button>
					</div>
					<div class="btn-group wishlist">
						<button type="button" class="btn btn-danger">
							Add to wishlist 
						</button>
					</div>
				</div>
			</div>
		</div>			
		</div>
		<div class="container-fluid">		
			<div class="col-md-12 product-info">
					<ul id="myTab" class="nav nav-tabs nav_tabs">
						
						<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
						
					</ul>
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">
						 
							<section class="container product-info">
								The Persian cat (Persian: گربه ایرانی) is a long-haired breed of cat characterized by its round face and short muzzle
								<br>
								<h3>Main Features:</h3>
								<br>
								<li>The selective breeding carried out by breeders has allowed the development of a wide variety of coat colors.</li>								
								<br>
								<li>Favored by fanciers, this head structure can bring with it a number of health problems. </li>
								<br>
								<li>Favored by fanciers, this head structure can bring with it a number of health problems. </li>
								<br>								
								<li>Favored by fanciers, this head structure can bring with it a number of health problems. </li>
								<br>								
							</section>
										  
						</div>
					
				</div>
			
			</div>
		</div>
	</div>
		<br>
<div class="container" style="background-color:#fff;padding-top:10px;padding-bottom:10px;">
<div class="end">
    <div class="row grid-divider">
    <div class="col-sm-3 col-md-3 col-xs-6">
      <div class="col-padding">
        <h3 style="font-size:20px;">Age</h3>
        <p>4 years</p>
      </div>
    </div>
	
    <div class="col-sm-3 col-md-3 col-xs-6">
      <div class="col-padding">
        <h3 style="font-size:20px;"> Category</h3>
        <p> Persian </p>
      </div>
    </div>
    <div class="col-sm-3 col-md-3 col-xs-6">
      <div class="col-padding">
        <h3 style="font-size:20px;">Color</h3>
        <p> White </p>
      </div>
    </div>
    <div class="col-sm-3 col-md-3 col-xs-6">
      <div class="col-padding">
        <h3 style="font-size:20px;">Gender</h3>
        <p> Female </p>
    </div>
    </div>
    </div>

</div>
</div>
</div>
</div>
<br>
<br>
<?php include 'footer.php';?>
</body>
</html>