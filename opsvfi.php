<?php 
	$title = "Home";
	$path = "./";
	$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""
	include($path . "assets/inc/header.php"); 
	include($path . "assets/inc/nav.php");
?>


<main>
    <h2>Opening and Saving Files</h2>
    <img id="" src="" alt="">
    <h3>Opening Files: </h3>
    <p id="summary">The command line interface (CLI) is a text-based interface that allows you to interact with your Unix system using commands and scripts.</p>
    
<ul>
	<li><p></p></li>
	<li>cd: Changes the current directory to the specified directory.</li>
	<li>mkdir: Creates a new directory.</li>
	<li>rm: Removes a file or directory.</li>
	<li>cp: Copies a file.  </li>
	<li>mv: Moves or renames a file.</li>
</ul>
</main>
a. Ctrl+S
b. Ctrl+X
c. Ctrl+O
d. Ctrl+Q
<form>
	<p>What command can be used to save changes to a file in Nano?</p>
	  <input type="radio" id="opsvfia1" name="opsvfi" value="1">
	  <label for="1">Ctrl+S</label>
	<br>
	  <input type="radio" id="opsvfia2" name="opsvfi" value="2">
	  <label for="2">Ctrl+X</label>
	<br>
	  <input type="radio" id="opsvfia3" name="opsvfi" value="3">
	  <label for="3">Ctrl+O</label>
	<br>
	  <input type="radio" id="opsvfia4" name="opsvfi" value="4">
	  <label for="4">Ctrl+Q</label>
	<br>  
</form>

<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>