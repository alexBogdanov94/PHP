<?php
	require 'app_config.php';
	$link = mysqli_connect($database_host, $username
					, $password, $database_name )
					or die("<p>Error connecting to database: " .
							mysql_error() . "</p>");
					echo "<p>Connected to MySQL!</p>";
	mysqli_select_db($link, $database_name)
		or die("<p>Error selecting the database phptutorial: " .
			mysql_error() . "</p>");

	echo "<p> Connected to MySQL, using database phptutorial. </p>" ;
	
	$result = mysqli_query($link, "SHOW TABLES;");
	if(!$result) {
		die("<p>Error in listing tables: " . mysql_error() . "</p>");
		}
		echo "<p>Tables in database:</p>";
		echo "<ul>";
		while ($row = mysqli_fetch_row($result)) {
			echo "<li>Table:" . $row[0] . "</li>";
		}
		echo "</ul>";
		?>	
