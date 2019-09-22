<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>K•Y•L•A | Activity 9</title>
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
				<a href="quiz.php" class="btn btn-outline-dark">Quiz</a>
			</li>
		</ul>
	
</div>
</nav>
</header>

<div class="container-fluid padding">	
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">12 Column Grid Design</h1>
	</div>
	<hr>
</div>
</div>	

<p><center>Below you can see my personalized 12 grid column layout design. Unlike the previous activity, Miss Jen didn't require
us to replace the boxes with pictures and texts. Since it is a 12 grid column, I could put more pictures in one row.
My inspiration in making these layouts were my favorite websites.</center></p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Trigger the Modal -->
<center>
<img class="myImg" src="img/14_A9-1_LAPID.PNG" alt="4x4 layout 1" style="width:100%;max-width:300px;padding-bottom: 10px">
<img class="myImg" src="img/14_A9-2_LAPID.PNG" alt="4x4 layout 2" style="width:100%;max-width:300px;padding-bottom: 10px">
<img class="myImg" src="img/14_A9-3_LAPID.PNG" alt="4x4 layout 3" style="width:100%;max-width:300px;padding-bottom: 10px">
<img class="myImg" src="img/14_A9-4_LAPID.PNG" alt="4x4 layout 4" style="width:100%;max-width:300px;padding-bottom: 10px">
<img class="myImg" src="img/14_A9-5_LAPID.PNG" alt="4x4 layout 5" style="width:100%;max-width:300px;padding-bottom: 10px">
<img class="myImg" src="img/14_A9-6_LAPID.PNG" alt="4x4 layout 6" style="width:100%;max-width:300px;padding-bottom: 10px">
<img class="myImg" src="img/14_A9-7_LAPID.PNG" alt="4x4 layout 7" style="width:100%;max-width:300px;padding-bottom: 10px">
<img class="myImg" src="img/14_A9-8_LAPID.PNG" alt="4x4 layout 8" style="width:100%;max-width:300px;padding-bottom: 10px">
<img class="myImg" src="img/14_A9-9_LAPID.PNG" alt="4x4 layout 9" style="width:100%;max-width:300px;padding-bottom: 10px">
<img class="myImg" src="img/14_A9-10_LAPID.PNG" alt="4x4 layout 10" style="width:100%;max-width:300px;padding-bottom: 10px">
<img class="myImg" src="img/14_A9-11_LAPID.PNG" alt="4x4 layout 11" style="width:100%;max-width:300px;padding-bottom: 10px">
<img class="myImg" src="img/14_A9-12_LAPID.PNG" alt="4x4 layout 12" style="width:100%;max-width:300px;padding-bottom: 10px">
</p>
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
