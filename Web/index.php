<!DOCTYPE html>
<html>
<head>
	<title>Start Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<script src="function.js"></script>
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

<div class="middle">
	<div class="col-sm-8">
		<section class="article">
			<h3> New Articles</h3>
			<article id="news1">
				<?php
				include_once("Database.php");
				$result = mysql_query("SELECT * FROM Articles WHERE id=1");
				
				while ($row = mysql_fetch_array($result)) {
				?>				
					<img src="<?php echo $row['Image']?>" width="200" height="125">							
					<h2 style="text-align: center;">	<h3> <?php echo $row['Head'];?> </h3>	</h2>
					<p style="float: left; padding-left: 10px;">	
						<p>	
							<?php echo $row['Short_Text'];?> 
							<a href="more_info.php?id=1<?php echo $row['id']?>"> Read more </a></br> 
						</p>
					</p>
				<?php
				}
				?>					
			</article>
			<article id="news2">
				<?php
				$result = mysql_query("SELECT * FROM Articles WHERE id=2");
				
				while ($row = mysql_fetch_array($result)) {
				?>				
					<img src="<?php echo $row['Image']?>" width="200" height="125">							
					<h2 style="text-align: center;">	<h3> <?php echo $row['Head'];?> </h3>	</h2>
					<p style="float: left; padding-left: 10px;">	
						<p>	
							<?php echo $row['Short_Text'];?>
							<a href="more_info.php?id=2<?php echo $row['id']?>"> Read more </a></br> 
						</p>	
					</p>
				<?php
				}
				?>					
			</article>
			<article id="news3">
				<?php
				$result = mysql_query("SELECT * FROM Articles WHERE id=3");
				mysql_close();

				while ($row = mysql_fetch_array($result)) {
				?>				
					<img src="<?php echo $row['Image']?>" width="200" height="125">							
					<h2 style="text-align: center;">	<h3> <?php echo $row['Head'];?> </h3>	</h2>
					<p style="float: left; padding-left: 10px;">	
						<p>	
							<?php echo $row['Short_Text'];?>
							<a href="more_info.php?id=3<?php echo $row['id']?>"> Read more </a></br> 
						</p>	
					</p>
				<?php
				}
				?>					
			</article>
		</section>
	</div>
	<div class="col-sm-4">
		<aside class="news">
			<h3> Current comments </h3>
			<div id="coment_1" class="coments">
				
			</div>
			<div id="coment_2" class="coments"></div>
			<div id="coment_3" class="coments"></div>
		</aside>
	</div>
</div>

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

</body>
</html>