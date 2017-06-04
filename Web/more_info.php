<style>
	body{
		margin: 0;
		background-color: #eee;
	}

	#news{
		height: auto;
		width: 800px;
		background-color: #e6e6e6;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
	#news h3, img{
		text-align: center;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
</style>

<?php
include_once("DataBase.php");
$ID = $_GET['id'];
$result = mysql_query("SELECT * FROM Articles WHERE id='$ID'");

	while ($row = mysql_fetch_array($result)){
		?>
		<div class="col-sm-12">
			<div class="col-sm-2"></div>
				<div id="news" class="col-sm-8">
					<h3><?php echo $row['Head'];?></h3>
					<img src="<?php echo $row['Image']?>" width="200" height="125">
					<p><?php echo $row['Full_Text'];?></p>
				</div>
			<div class="col-sm-2"></div>
		</div>
		<?php
	}
	?>