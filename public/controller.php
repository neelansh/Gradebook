<?php
	require("../includes/config.php");
	
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		render("homepage.php" , ["title" => "homepage"]);
	}
	else if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$rows = query("SELECT exam , subject , marks FROM gradebook WHERE id = ? AND semester = ?",$_SESSION["id"],$_POST["semester"]);
		if($rows === false)
		{
			apologize("wrong sql query");
		}
		render("report.php" , ["title"=>"report card" , "grades"=>$rows]);
	}
?>
