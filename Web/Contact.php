<!DOCTYPE html>
<html>
<head>
	<title>ESN Contact</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="contact_style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
<header class="header">
	<img src="Images/Logo.png">

	<ul class="menu">
		<li><a href="Index.php"> Home </a></li>
		<li><a href="About.php"> About </a></li>
		<li><a href="Contact.php"> Contact </a></li>
	</ul>
</header>

<section class="main">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<div id="map" class="Gmap">
			<script>
			function myMap() 
			{
				var myCenter = new google.maps.LatLng(52.222951, 21.019780);
				var mapCanvas = document.getElementById("map");
				var mapOptions = {center: myCenter, zoom: 17};
				var map = new google.maps.Map(mapCanvas, mapOptions);
				var marker = new google.maps.Marker({position:myCenter});
				marker.setMap(map);
					  
				marker.addListener('click', function() 
				{
					infowindow.open(map, marker);
				});
				
				var infowindow = new google.maps.InfoWindow(
				{
						content: '<div id="iw-container">' + '<h5><strong>Erasmus+ Poland</strong></h5>' + '<p><strong>Address:</strong> Mokotowska 43</p>' +
						'<p>Warsaw, Poland</p>' + '<p><strong>Business Hours:</strong> 10am - 9pm Mon-Sat </p>' + '<p> 12pm - 7pm Sun </p>' +
						'<p><strong>E-mail:</strong> myvbikes@gmail.com</p>' +	'<p><strong>Tel:</strong> +48 739443095</p>' +	'</div>'					
				});
			}
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCENsCFTjrLbwkfB1Sx4MVEDFChWcwhWFw&callback=myMap"></script>
		</div>
			<h3 style="text-align: center;"> Get in touch with us </h3>
		
			<div class="bla">
				<section id="sidebar" style="text-align: center;">
			      <input type="button" id="new_button" value="New record">
			      <ul id="notes"></ul>
			    </section>
			    
			    <section id="main" style="text-align: center;">
			      <form>
			        <ul>
			          <li>
			            <input type="submit" id="save_button" value="Save">
			            <input type="submit" id="delete_button" value="Delete">
			          </li>
			          <li>
			            <label for="title">Title</label><br>
			            <input type="text" id="title">
			          </li>
			          <li>
			            <label for="note">Notes</label><br>
			            <textarea id="note"></textarea>
			          </li>
			        </ul>
			      </form>
			    </section>
			</div>
</section>


<footer id="foot" class="footer">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		
	
	<div id="siteMap" class="col-sm-4">
		<h4><strong> Site map </strong></h4>
		<h5><a href="index.php">Home</a></h5>
		<h5><a href="about.php">About</a></h5>
		<h5><a href="contact.php">Contact</a></h5>
	</div>
	<div id="brands" class="col-sm-4">
		<h4><strong> Partners </strong></h4>
		<h5><a href="https://mobilevikings.pl">Mobile Vikings</a></h5>
		<h5><a href="https://www.careersinpoland.com/jobs">Careers in Poland</a></h5>
		<h5><a href="http://www.ef.pl/pg">EF Education First</a></h5>
		<h5><a href="https://www.uniplaces.com">Uniplaces</a></h5>


	</div>
	<div id="contactInfo" class="col-sm-4">
		<h4><strong> ESN Poland </strong></h4>
		<h5>Addres: Krakowskie Przedmieście 24, <br>Warszawa</h5>
		<h5><strong>Business Hours: </strong> 10am-7pm Mon-Sat <br> 12pm-6pm Sun </h5>
		<h5><strong>E-mail: </strong> esn.poland@gmail.com </h5>
		<h5><strong>Phone: </strong> +48 735225124</h5>
	</div>
	</div>
</footer>

<div id="underground">
	<h5>Erusmus Student Network © 2017</h5>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="notes.js" charset="utf-8" type="text/javascript"></script>
</body>
</html>