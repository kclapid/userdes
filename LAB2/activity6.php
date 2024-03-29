<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>K•Y•L•A | Activity 6</title>
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
		<h1 class="display-4">Personas</h1>
	</div>
	<hr>
</div>
</div>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<p><center>These are our made up personas who will use our application. They have different characterisitcs, with different problems dealing with Ecobricks.</center></p>
<pre>
	

</pre>

<!-- Trigger the Modal -->
<center>
<img class="myImg" src="img/A6-1.png" alt="Abdul Khan" style="width:100%;max-width:300px">
<p>This is Abdul Khan. He is 27 years old.
<p>He's highest level of education is Bachelor's degree.</p>
<p>He has facebook, instagram, twitter, linkedin, pinterest and gmail accounts. He is currently working in manufacturing industry.</p>
<hr>

<img class="myImg" src="img/A6-2.png" alt="Weiss Eidel" style="width:100%;max-width:300px">
<p>This is Weiss Eidel. She is 20 years old.
<p>Her highest level of education is college.</p>
<p>She has facebook, instagram, twitter, linkedin, pinterest and gmail accounts.</p>
<hr>

<img class="myImg" src="img/A6-3.png" alt="Arthur Pentupdragon" style="width:100%;max-width:300px">
<p>This is Arthur Pentupdragon. He is 39 years old.
<p>He's highest level of education is Doctorate degree.</p>
<p>He has facebook, instagram, twitter, linkedin, pinterest and gmail accounts. He is currently working in construction industry and has his own organization with 1001-5000 employees.</p>

</center>

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
