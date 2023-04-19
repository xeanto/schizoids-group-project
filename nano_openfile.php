<?php 
	$title = "Home";
	$path = "./";
	$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""
	include($path . "assets/inc/header.php"); 
	include($path . "assets/inc/nav.php");
?>


<div id="top">

<h1 id="title">Opening and Saving Files</h1>
<img id="" src="" alt="">
<h2 id="commands">Opening Files: </h2>
<p id="summary">The command line interface (CLI) is a text-based interface that allows you to interact with your Unix system using commands and scripts.</p>

<ul>
	<li><p></p></li>
	<li>cd: Changes the current directory to the specified directory.</li>
	<li>mkdir: Creates a new directory.</li>
	<li>rm: Removes a file or directory.</li>
	<li>cp: Copies a file.  </li>
	<li>mv: Moves or renames a file.</li>
</ul>
</div>

<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>