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

<div class="Quiz">
	<p>What command can you use to display the current working directory in the terminal?</p>
	<label for="1" id="clia1Label">  
		<input type="radio" id="clia1" name="cli" value="1" onclick="answerCorrectly(this,'clia1')">
	  pwd</label>
	<br>
	<label for="2" id="clia2Label">
	  <input type="radio" id="clia2" name="cli" value="2" onclick="answerCorrectly(this,'clia1')">
	  ls</label>
	<br>
	<label for="3" id="clia3Label">
	  <input type="radio" id="clia3" name="cli" value="3" onclick="answerCorrectly(this,'clia1')">
	  cd</label>
	<br>
	<label for="4" id="clia4Label">
	  <input type="radio" id="clia4" name="cli" value="4" onclick="answerCorrectly(this,'clia1')">
	  mkdir</label>
	
    <br> 
</div> 
    
<div class="Quiz" >
    <p>What command can you use to move up one level in the file system hierarchy?</p>
		<label for="5" id="clia5Label">  
	<input type="radio" id="clia5" name="cli" value="5" onclick="answerCorrectly(this,'clia6')">
	  cd .</label>
	<br>
	<label for="6" id="clia6Label">
	  <input type="radio" id="clia6" name="cli" value="6" onclick="answerCorrectly(this,'clia6')">
	  cd ..</label>
	<br>
	<label for="7" id="clia7Label">
	  <input type="radio" id="clia7" name="cli" value="7" onclick="answerCorrectly(this,'clia6')">
	  cd /</label>
	<br>
	<label for="8" id="clia8Label">
	  <input type="radio" id="clia8" name="cli" value="8" onclick="answerCorrectly(this,'clia6')">
	  cd ~</label>
	<br>
</div>

<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>
