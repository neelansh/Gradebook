<?php

    // configuration
    require("../includes/config.php"); 

    // render portfolio
    //render("portfolio.php", ["title" => "Portfolio"]);
  
    
    /*render("portfolio.php" , ["title" => "portfolio" ,"cash" => $rows2[0]["cash"],"stocks" => $stocks]);*/
	
	
	$rows = query("SELECT DISTINCT(semester) FROM gradebook WHERE id = ?" , $_SESSION["id"]);
	$name = query("SELECT DISTINCT(name) FROM gradebook WHERE id = ?", $_SESSION["id"]);
	if($rows === false)
	{
		apologize("something went wrong in sql query");
	}
	render("homepage.php" , ["title" => "home" , "semesters" => $rows , "name"=>$name[0]]);
	
?>
