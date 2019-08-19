<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>K•Y•L•A</title>
	<link rel="icon" type="image/ico" href="img/black-rose1.jpg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<!--Navigation-->
<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top" id="nav1">
<div class="container-fluid">
	<a class="navbar-brand" href="index.php"><img class="logo" src="img/sunflower.png"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a href="index.php" class="btn btn-outline-dark">Home</a>
			</li>
			<li class="nav-item">
				<a href="LAB1\index.php" class="btn btn-outline-dark" class="btn btn-outline-dark">About</a>
			</li>
		</ul>
	
</div>
</nav>
<!--Image slider-->
<div id="slides" class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
	<li data-target="#slides" data-slide-to="0" class="active"></li>
	<li data-target="#slides" data-slide-to="1"></li>
	<li data-target="#slides" data-slide-to="2"></li>
</ul>
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="img/img6.jpg">
		<div class="carousel-caption">
			<h1 class="display-2">K Y L A</h1>
		</div>
	</div>
	<div class="carousel-item">
		<img src="img/img9.jpg">
	</div>
	<div class="carousel-item">
		<img src="img/img8.jpg">
	</div>
</div>
</div>

<!--Welcome section-->
<div class="container-fluid padding">	
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Welcome to my site!</h1>
	</div>
	<hr>
	<div class="col-12">
		<p>USERDES</p>
	</div>
</div>
</div>


<hr class="my-4">
<!--Fixed background-->
<figure>
	<div class="fixed-wrap">
		<div id="fixed">
		</div>
	</div>
</figure>

<!--Activities-->
<button class="activities" data-toggle="collapse" data-target="#activities" id="nav1">Click to see my activities</button>
<div id="activities" class="collapse">
<div class="container-fluid padding">
<div class="row text-center">
	<div class="col-11">
	<ul>
		<li><a href="activities.php">Activities</a></li>
		<li><a href="reflections.php">Reflections</a></li>
		<li><a href="quiz.php">Quiz</a></li>
	</ul>	
	</div>
</div>		
</div>	
</div>

<!--Meet the team-->
<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Meet our Team</h1>
	</div>
	<hr>
</div>	
</div>

<!--Cards-->
<div class="container-fluid padding">
<div class="row padding">

	<div class="col-md-3">
		<div class="card">
			<img class="card-img-top" src="img/DP8.jpg">
			<div class="card-body">
				<h4 class="card-title">Kyla Lapid</h4>
				<a href="#" class="btn btn-outline-secondary">See Profile</a>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="card">
			<img class="card-img-top" src="img/ralph.jpg">
			<div class="card-body">
				<h4 class="card-title">Ralph Dedumo</h4>
				<a href="https://lab-002.herokuapp.com/index.html" class="btn btn-outline-secondary" target="_blank">See Profile</a>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="card">
			<img class="card-img-top" src="img/bruce.jpg">
			<div class="card-body">
				<h4 class="card-title">Bruce Jimenez</h4>
				<a href="https://bruhcejimenez.herokuapp.com/index.html" class="btn btn-outline-secondary">See Profile</a>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="card">
			<img class="card-img-top" src="img/lourenz.jpg">
			<div class="card-body">
				<h4 class="card-title">Lourenz Lactaoen</h4>
				<a href="https://lab1-uxdes.herokuapp.com/index.php" class="btn btn-outline-secondary">See Profile</a>
			</div>
		</div>
	</div>

</div>	
</div>

<!--Connect-->
<div class="container-fluid padding">
<div class="row text-center padding">
	<div class="col-12">
		<h2>Connect</h2>
	</div>
	<div class="col-12 social padding">
		<a href="https://www.facebook.com/andrelyka/" target="_blank"><img class="fb-size" src="img/FB.png"></a>
		<a href="https://www.instagram.com/kyla_lapid/" target="_blank"><img class="ig-size" src="img/IG2.png"></a>
	</div>
</div>	
</div>

</body>
</html>
