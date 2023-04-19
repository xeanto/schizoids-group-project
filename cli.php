<?php 
	$title = "Home";
	$path = "./";
	$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""
	$id = "unix-cli";
	include($path . "assets/inc/header.php"); 
	include($path . "assets/inc/nav.php");
?>

<div id="top">

<h1 id="title">What is CLI?</h1>
<img id="" src="" alt="">
<p id="summary">The command line interface (CLI) is a text-based interface that allows you to interact with your Unix system using commands and scripts.</p>
<h2 id="commands">Basic Commands</h2>
<ul>
	<li>ls: Lists the files and directories in the current directory.</li>
	<li>cd: Changes the current directory to the specified directory.</li>
	<li>mkdir: Creates a new directory.</li>
	<li>rm: Removes a file or directory.</li>
	<li>cp: Copies a file.  </li>
	<li>mv: Moves or renames a file.</li>
</ul>
</div>

<br>

<form>
	<p>What command can be used to start spell-checking in Nano?</p>
	  <input type="radio" id="spchka1" name="spchk" value="1">
	  <label for="1">Ctrl+S</label>
	<br>
	  <input type="radio" id="spchka2" name="spchk" value="2">
	  <label for="2">Ctrl+Y</label>
	<br>
	  <input type="radio" id="spchka3" name="spchk" value="3">
	  <label for="3">Ctrl+T</label>
	<br>
	  <input type="radio" id="spchka4" name="spchk" value="4">
	  <label for="4">Ctrl+C</label>
	<br>  
</form>

<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>
