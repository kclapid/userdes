<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>K•Y•L•A | Activity 5</title>
	<link rel="icon" type="image/ico" href="img/black-rose1.jpg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top" id="nav1">
<div class="container-fluid">

<a href="activities.php"><h3 class="back"><</h3></a>
	
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
				<a href="LAB1\index.php" class="btn btn-outline-dark">About</a>
			</li>
			<li class="nav-item">
				<a href="reflections.php" class="btn btn-outline-dark">Reflections</a>
			</li>
			<li class="nav-item">
				<a href="activities.php" class="btn btn-outline-dark">Activities</a>
			</li>
			<li class="nav-item">
				<a href="learnings.php" class="btn btn-outline-dark">Learnings</a>
			</li>
		</ul>
	
</div>
</nav>
</header>

<div class="container-fluid padding">	
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Log In Page</h1>
	</div>
	<hr>
</div>
</div>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Trigger the Modal -->
<p><center>These are the intial log in and registration page of our project called E-GOBRICK</center></p>
<img class="myImg" src="img/A5-1.png" alt="Log In/Sign Up page" style="width:100%;max-width:300px">
<img class="myImg" src="img/A5-2.png" alt="Type of user" style="width:100%;max-width:300px">
<img class="myImg" src="img/A5-3.png" alt="Registration page for Donor" style="width:100%;max-width:300px">
<img class="myImg" src="img/A5-4.png" alt="Registration page for Organization" style="width:100%;max-width:300px">
<p>
<pre>           Log In/Sign Up Page                    Type of user                Registration page for Donor          Registration page for Organization</pre></p>
<p><center>
For the sign up page, we asked for the type of user. One is donor, which is if the user doesn't belong to any organization and only wants to donate ecobricks. As per organization, they are the one who receives the donated ecobricks. We made the up with a touch of nature since ecobrick is all about saving the environment from trashes. It is also pleasing in the eyes since blue is a relaxing color mixed with green which is a symbol of nature.
</center><p>
	<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>

<script type="text/javascript">

// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = $('.myImg');
var modalImg = $("#img01");
var captionText = document.getElementById("caption");
$('.myImg').click(function(){
    modal.style.display = "block";
    var newSrc = this.src;
    modalImg.attr('src', newSrc);
    captionText.innerHTML = this.alt;
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>
	
</div>
</body>
</html>
