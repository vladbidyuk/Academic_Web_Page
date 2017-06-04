<?php
	$connection = mysql_connect("localhost", "vladbidyuk", "asus1597sven");     
	$db = mysql_select_db("Project");                                          
	mysql_set_charset("itf8");                                             

	if (!$connection || !$db)
	{   
    	exit(mysql_error());                         
	}
?>