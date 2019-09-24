<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>K•Y•L•A | Learnings</title>
	<link rel="icon" type="image/ico" href="img/black-rose1.jpg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="text-font">

<header>
<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top" id="nav1">
<div class="container-fluid">
	<a class="navbar-brand" href="index.php" class="btn btn-outline-secondary"><img class="logo" src="img/sunflower.png"></a>
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
				<a href="learnings.php" class="btn btn-outline-dark" class="btn btn-outline-dark">Learnings</a>
			</li>
		</ul>

		
	
</div>
</nav>
</header>

<div class="container-fluid padding">	
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Learnings</h1>
	</div>
	<hr>
</div>
</div>	


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Trigger the Modal -->
<!-- 4x4 layout grid -->
<center>
<img class="myImg" src="img/cert2.PNG" alt="Programming Foundations: Data Structures(2014)" style="width:100%;max-width:700px;padding-bottom: 10px">
<p>Linkedin LEARNING</p>
<p>Programming Foundations: Data Structures(2014)</p>
<p>Course completed: March 5, 2019</p>
<hr>
<img class="myImg" src="img/cert3.PNG" alt="Learning Python" style="width:100%;max-width:700px;padding-bottom: 10px">
<p>Linkedin LEARNING</p>
<p>Learning Python</p>
<p>Course completed: March 5, 2019</p>
<hr>
<img class="myImg" src="img/cert1.PNG" alt="Programming Foundations: Algorithms" style="width:100%;max-width:700px;padding-bottom: 10px">
<p>Linkedin LEARNING</p>
<p>Programming Foundations: Algorithms</p>
<p>Course completed: March 10, 2019</p>
<hr>
<img class="myImg" src="img/cert5.PNG" alt="Sketch for UX Design" style="width:100%;max-width:700px;padding-bottom: 10px">
<p>Linkedin LEARNING</p>
<p>Sketch for UX Design</p>
<p>Course completed: August 31, 2019</p>
<hr>
<img class="myImg" src="img/cert6.PNG" alt="UX Foundations: Interaction Design" style="width:100%;max-width:700px;padding-bottom: 10px">
<p>Linkedin LEARNING</p>
<p>UX Foundations: Interaction Design</p>
<p>Course completed: August 31, 2019</p>
<hr>
<img class="myImg" src="img/cert4.PNG" alt="Principle for UX Design" style="width:100%;max-width:700px;padding-bottom: 10px">
<p>Linkedin LEARNING</p>
<p>Principle for UX Design</p>
<p>Course completed: September 22, 2019</p>
</center>
</p>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>
</p>
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

</body>
</html>
