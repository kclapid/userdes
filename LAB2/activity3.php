<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>K•Y•L•A | Activity 3</title>
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
				<a href="learnings.php" class="btn btn-outline-dark" class="btn btn-outline-dark">Learnings</a>
			</li>
		</ul>
	
</div>
</nav>
</header>

<div class="container-fluid padding">	
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">How would you design an interface for a 1000 floor elevator?</h1>
	</div>
	<hr>
</div>
</div>	
	<div class="col-12">
		<p>
In a 1000 story building, a common elevator that has physical buttons for each floor is not ideal. We didn’t consider this 
type of design for our building as it will end up covering all the walls by 1003 buttons, and it will also be harder to 
locate the floor numbers. To give you a heads up, we assume that it is a corporate and residential in one building. The 
first 500 floors are for the companies and the other 500 are for the residents. We plan to make it a smart elevator to 
make it convenient for the users. </p>
<p>
Since it is a thousand story building, it is expected that there will be at least 200 people in each floor then multiply 
by 1000, that’s a huge amount of people in a building. We plan to have 80 elevators, with the size of 2.5 X 2.5 meters for 
the door and 3.6 meters length for the walls inside. It can load up to 28-30 people with the total weight of 1815 
kilograms and has a speed of 45mph, it can reach 95th floor in 43 seconds. Since it will take quite a long journey for the 
users to reach their desired floors, we want them to somehow, feel comfortable. That’s why we’re planning to put benches 
in the two sides of the elevator, but its priorities are the people with disabilities, pregnant woman and senior citizens. 
We’ll also put an automatic air freshener spray to maintain the fragrance, a CCTV for security, and a background music 
just like in the coffeeshops. </p>
<p>
The elevator has interactive screens and keycard tapping system in each wall. There will also be an LCD screen at the 
top-front to display the pressed floors and the current floor. The elevator also has a voice annunciator to dictate the 
current floor.</p>
<p>
For the security of the residents, we’re planning to use a keycard. The keycard will be unique for each resident, it will 
contain the floor number where their unit is located. Every time they will use the elevator, they’ll have to tap the card 
in the keycard tapping system to enter their floor and tap again to cancel. Since their units are located from 501-1000 
floor, only the first 500 floors can be selected from the interactive screens, so in that case, non-residents have no 
access to their floors. It is also hassle-free for them because they don’t have to locate and press their floors in the 
interactive screen, rather they’ll just have to tap their card. We assume that other residents have no business in the 
other residential floors, that’s why we’ll make it unique so that only the residents and maintenance have the access in 
their own floors.</p>
<p>
For the employees, to access their floors, they will manually find and select their floors in the interactive screen. The 
interactive screen will display the first 100 floors, and to select the other floors, the user will just swipe the screen 
to the left. In each display, there will be an open, close, emergency, and go button below. Unlike in the usual elevators, 
we plan to include a “Go” button so that when all the users are done pressing their floors, the only time the elevator 
will start to operate is when the button is pressed. It is to avoid skipping user’s floor. After pressing the “Go” button, 
there will be an additional button in the screen to add and cancel floors. So that if there’s any case that a floor was 
accidentally pressed, they could still cancel it and if someone changes their mind to go to another floor, they can add 
floors as well.</p>
<p>
With this design, we wanted to make sure that users will feel safe, clean, relaxed, and to boost their energy before 
entering their floors.</p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Trigger the Modal -->
<img class="myImg" src="img/A3-1.png" alt="Full view" style="width:100%;max-width:300px">
<img class="myImg" src="img/A3-2.png" alt="Top view" style="width:100%;max-width:300px">
<img class="myImg" src="img/A3-3.png" alt="Door side" style="width:100%;max-width:300px">
<img class="myImg" src="img/A3-4.png" alt="Back side" style="width:100%;max-width:300px">

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
