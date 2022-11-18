<?php
    error_reporting(0);
    $currentSection = $_GET['section'];
	
	if ($currentSection==aboutUs) {
		include ("aboutUs.php");
	}
	else if ($currentSection==news) {
		include ("news.php");
	}
	else if ($currentSection==photoGallery) {
		include ("photoGallery.php");
	}
	else if ($currentSection==videoGallery) {
		include ("videoGallery.php");
	}
	else if ($currentSection==contact) {
		include ("contact.php");
	}
	else if ($currentSection==achievements) {
		include ("achievements.php");
	}
	else if ($currentSection==press) {
		include ("press.php");
	}
	elseif ($currentSection==volunteers) {
		include ("volunteers.php");
	}
	elseif ($currentSection==doctors) {
		include ("doctors.php");
	}
	else {
		include ("home.php");
	}
	
?>