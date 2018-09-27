<?php include('server.php'); ?>
<!DOCTYPE html>
<html>

<head>

	<title> Basic Website</title>
	
	<meta name="language" content="English">
	<meta name="keywords" content="words">
	<meta name="robots" content="selection">
	
	<link rel = "stylesheet" href = "style1.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	
	<script src="js/Slider.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider({
				effect:'random',
				slices:10,
				animSpeed:500,
				pauseTime:2500,
				startSlide:0, //Set starting Slide (0 index)
				directionNav:false,
				directionNavHide:false, //Only show on hover
				controlNav:false, //1,2,3...
				controlNavThumbs:false, //Use thumbnails for Control Nav
				pauseOnHover:true, //Stop animation while hovering
				manualAdvance:false, //Force manual transitions
				captionOpacity:0.8, //Universal caption opacity
				beforeChange: function(){},
				afterChange: function(){},
				slideshowEnd: function(){} //Triggers after all slides have been shown
			});
		});
	</script>
</head>

<body>
	<div class = "HeaderSection templete clear">
		<div class = "logo">
			<img src = "images/mini_logo.png" alt = "Logo"/>
			<h2>Mini Hospital</h2>
		</div>
	</div>
	<div class = "NevigationSection templete">
		<ul>
			<li><a id = "active">Home</a></li>
			<li><a>About Us</a>
				<ul>
					<li><a href="introduction.php">Introduction</a></li>
					<li><a href="rules.php">Rules & Regulations</a></li>
					<li><a href="staffinfo.php">Staff Info</a></li>
				</ul>
			</li>
			<li><a>Department</a>
				<ul>
					<li><a href="orthopaedics.php">Orthopaedics</a></li>
					<li><a href="skin.php">Skin</a></li>
					<li><a href="surgery.php">Surgery</a></li>
					<li><a href="cardiology.php">Cardiology</a></li>
					<li><a href="emergencydepartment.php">Emergency Department</a></li>
				</ul>
			</li>
			<li><a href = "bloodbank.php">Blood Bank</a></li>
			<li><a>Appointment</a>
				<ul>
					<li><a href="availabledoctor.php">Available Doctor</a></li>
					<li><a href="appointment.php">Book Appointment</a></li>
				</ul>
			</li>
			<li><a href = "contactus.php">Contact Us</a></li>
		</ul>
		<div class="logout">
  	  			<a href="index.php"><img src = "images/logout.png" alt = "Logo"/></a>
  			</div>
	</div>
	<div class = "slidersection templete">
		<div id="slider">
            <a href="#"><img src="images/slideshow/01.jpg" alt="nature 1"/></a>
            <a href="#"><img src="images/slideshow/02.jpg" alt="nature 2"/></a>
            <a href="#"><img src="images/slideshow/03.jpg" alt="nature 3"/></a>
            <a href="#"><img src="images/slideshow/04.jpg" alt="nature 4"/></a>
            <a href="#"><img src="images/slideshow/05.jpg" alt="nature 5"/></a>
        </div>
	</div>
	<div class = "ContantSection contemplete clear">
		<div class = "MainContant clear">
			<div class = "SomePost clear">
				<h2>Wecome to Mini Hospital</h2>
				<img src = "images/welcome.jpg" alt = "post image"/>			
				<p>
					Welcome to the Mini Hospital web site. Thank you for choosing our online hospital for your health care. We are committed to providing the highest quality patient care in a friendly, compassionate setting.
				</p>
				<p>
					It is valuable to know that when it comes to getting the best help in the shortest amount of time, you don't have far to go. We're here to help you get well, get healthy, and get your life back to normal as quickly as possible.
				</p>
				<p>
					Our mission is, we are dedicated to providing compassionate, lifelong healthcare to the individual, family and community". This means that in everything we do, our focus is on you. We consider it a privilege to serve you.
				</p>
			</div>
			<div class = "SomePost clear">
				<h2>Our Services</h2>
				<img src = "images/services2.png" alt = "post image"/>			
				<p>Online Appointment System</p>
				<p>Doctors Time Off Management</p>
				<p>Doctors Scheduling Management</p>
				<p>Patients Management System</p>
				<p>Blood Bank</p>
			</div>
		</div>
		<div class = "Sidebar clear">
			<div class = "SameSidebar clear"> 
				<h2>Latest articles</h2>
					<ul>
						<li><a href = "#">Post title one will be go here.</a></li>
						<li><a href = "#">Post title two will be go here.</a></li>
						<li><a href = "#">Post title three will be go here.</a></li>
						<li><a href = "#">Post title four will be go here.</a></li>
						<li><a href = "#">Post title five will be go here.</a></li>
					</ul>
				</div>
			<div class = "SameSidebar clear"> 
				<h2>Popular articles</h2>
					<div class = "popular">
						<h3><a href = "#">Post title will be go here...</a></h3>
						<a href = "#"><img src = "images/gelecegin.jpg" alt = "post image"/></a>
						<p>
							sidebar stay here.sidebar stay here.sidebar stay here.sidebar stay here.sidebar stay here.
							stay
						</p>
					</div>
					<div class = "popular">
						<h3><a href = "#">Post title will be go here...</a></h3>
						<a href = "#"><img src = "images/look.png" alt = "post image"/></a>
						<p>
							sidebar stay here.sidebar stay here.sidebar stay here.sidebar stay here.sidebar stay here.
							stay 
						</p>
					</div>
					<div class = "popular">
						<h3><a href = "#">Post title will be go here...</a></h3>
						<a href = "#"><img src = "images/nasa.jpg" alt = "post image"/></a>
						<p>
							sidebar stay here.sidebar stay here.sidebar stay here.sidebar stay here.sidebar stay here.
							stay here.sidebar stay here.
						</p>
					</div>
			</div>
		</div>
	</div>
	<div class = "FooterSection templete clear">
		<div class = "footerMenu">
			<ul>
				<li><a href = "#">Home</a></li>
				<li><a href = "#">About</a></li>
				<li><a href = "#">Content</a></li>
				<li><a href = "#">Privacy</a></li>
			</ul>
			<p>&copy; Copyright Mini Hospital.</p>
		</div>
	</div>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-xxxxxxxx-x', 'auto');
	  ga('send', 'pageview');
	</script>
	
	<script type="text/javascript" src="js/scroll.js"></script>
</body>

</html>