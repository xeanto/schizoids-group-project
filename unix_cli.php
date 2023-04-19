<?php 
	$title = "Home";
	$path = "./";
	$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""
	include($path . "assets/inc/header.php"); 
	include($path . "assets/inc/nav.php");
?>

<div id="top">

<h1 id="title">What is CLI?</h1>
<img id="" src="" alt="">
<p id="summary">
Unix is an operating system that was created in the late 1960s and early 1970s by Bell Laboratories. It was designed to be a straightforward and effective system for running on minicomputers. Unix is known for its simplicity and flexibility, and it quickly became popular among academic institutions, research facilities, and computer scientists and programmers. One of the notable features of Unix is its command line interface (CLI), which allows users to communicate with the system using text commands instead of a graphical user interface (GUI). Unix has been updated over time, resulting in various versions and variations produced by different organizations and individuals. Some well-known Unix variations include Linux, Berkeley Software Distribution, and macOS. Today, Unix is used in many industries, including science, finance, and education.
</p>
	
</div>

<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>
