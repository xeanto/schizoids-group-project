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

<h2>CLI Quiz</h2>
<form>
	<p>What command can you use to display the current working directory in the terminal?</p>
	  <input type="radio" id="clia1" name="cli" value="1">
	  <label for="1">pwd</label>
	<br>
	  <input type="radio" id="clia2" name="cli" value="2">
	  <label for="2">ls</label>
	<br>
	  <input type="radio" id="clia3" name="cli" value="3">
	  <label for="3">cd</label>
	<br>
	  <input type="radio" id="clia4" name="cli" value="4">
	  <label for="4">mkdir</label>
	
    <br>  
    
    <p>What command can you use to move up one level in the file system hierarchy?</p>
	  <input type="radio" id="clia5" name="cli" value="5">
	  <label for="5">cd .</label>
	<br>
	  <input type="radio" id="clia6" name="cli" value="6">
	  <label for="6">cd ..</label>
	<br>
	  <input type="radio" id="clia7" name="cli" value="7">
	  <label for="7">cd /</label>
	<br>
	  <input type="radio" id="clia8" name="cli" value="8">
	  <label for="8">cd ~</label>
	<br>
</form>

<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>
