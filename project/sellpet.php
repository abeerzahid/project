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
  <link href="css/sellpet.css" rel="stylesheet" type="text/css" media="all" />
  <link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Gorditas" rel="stylesheet">

  </head>

<body>

<?php include 'header.php';?>

<div class="container">      
	<ol class="breadcrumb">
		<li><a href="index.html">Home</a></li>
		<li class="active"> Sell a Pet</li>        
	</ol>

	
	<div class="container-fluid">
		<div class="row">
			<section class="section1">
				<h1 style="font-size: 30px;
    color: #5d005d;">Sell Your Pet</h1>
			</section>
		</div>
	</div>
	
	
	
<div class="container"style="border-radius: 5px;background-color:rgba(247, 236, 250, 0.55);padding: 20px;">
    <form class="form-horizontal">
<fieldset>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Select Pet Category</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Cat</option>
      <option value="2">Dog</option>
	  <option value="2">Bird</option>
	  <option value="2">Other</option>
    </select>
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Select Breed</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Persian</option>
      <option value="2">Stray</option>
	  <option value="2">Pup</option>
    </select>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Pet Name</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Select Gneder</label>  
  <div class="col-md-4">
    <label class="checkbox-inline"><input type="checkbox"> Male</label>
    <label class="checkbox-inline"><input type="checkbox"> Female</label>
  </div>
</div>
<br>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Quantity</label>
  <div class="col-md-4">
  <input type="number" name="points" step="1" min="1" placeholder="1">
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Price - unit</label>
  <div class="col-md-4">
  <input class="Rupees sign" type="number" min="500" placeholder="Rs.500">
  </div>
</div>



<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Upload photo</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Tags</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
  <span class="help-block"> example: pups </span>  
  </div>
</div>

<!-- File Button --> 
<!-- <div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Images & videos</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div> -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Minimum order</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Select Shipping Region</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Lahore</option>
      <option value="2">Karachi</option>
	  <option value="3">Islamabad</option>
    </select>
  </div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Other Features</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-success">Add Pet</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>

<?php include 'footer.php';?>

</body>
</html>

