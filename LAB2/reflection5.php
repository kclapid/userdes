<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>K•Y•L•A | Reflection 5</title>
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

<a href="reflections.php"><h3 class="back"><</h3></a>
	
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
		<h1 class="display-4">SOCIT Fest</h1>
	</div>
	<hr>
</div>
</div>	
	<div class="col-12">
	<p>Honestly, I guess last year’s SOCIT Fest was more fun than this year. We had a lot of seminars, and just few fun 
		activities. Though I found some seminars helpful for us and I discovered a lot of new technologies. They introduce 
		some competitions that might be helpful in improving skills for some of the students in other courses. Since it is 
	about games, our course couldn’t actually relate to that.</p>
<p>
An organizer from JPCS approached me to ask if I could join the Mr. and Ms. SOCIT on August 16. Unfortunately, I have an 
appointment for my ultrasound on the same day and I couldn’t make it to the SOCIT night. Last year I was a member of JPCS 
organization but now I failed to register. I don’t know if I’m still part of it. Kuya Ivan Jasper suggested that I should 
apply as an officer in JPCS but I don’t want to be so stressed and to have loads of works since I’m a varsity of the 
organization Elite Group of Innovators. </p>
<p>
I could say that the most interesting part of the whole event was the seminar about Introduction to Cognitive Services. 
The speaker demonstrates the Microsoft Hololens. It is a pair of mixed reality smartglasses that was developed by 
Microsoft. It is amazing because it’s my first time to see an actual hologram. I’m looking forward to experience new 
technologies, I guess it’ll be fun.</p>
<p>
All in all, the event was not so fun for me because there’s a bunch of seminars, I’m expecting that there will be events 
like games, karaoke etc. The fun events are at night that’s why I fail to attend those, maybe they could adjust it to 
mornings or afternoon since it is our week, we should have fun and have a break from academics.
</p>

<p>
	<img class="myImg" src="img/socit.jpg" alt="Seminar about game genesis" style="width:100%;max-width:500px;display: block;margin-left: auto;margin-right: auto;">
</p>
<p><center>This is the seminar about Game Genesis. The speakers encouraged students who are taking courses related to games, to join this competition.</center></p>
<pre>
	
</pre>
	
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
	
</div>
</body>
</html>
