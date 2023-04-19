<?php 
	$title = "Home";
	$path = "./";
	$id = "nano-oasf";
	$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""
	include($path . "assets/inc/header.php"); 
	include($path . "assets/inc/nav.php");
?>


<main>
    <h2>Opening and Saving Files</h2>
    <img id="" src="" alt="">
    <h3>Opening a file: </h3>
	<ul>
		<li><p>To open a file with Nano, simply type the command <b>‘nano’</b> followed by the name of the file you want to open. For example, to open a file called <b>example.txt</b>, type the command <b>‘nano example.txt’</b>.</p></li>
		<br>
		<li><p>If the file does not exist, Nano will create a new file with that name.</p></li>
	</ul>

	<h3>Editing a file: </h3>
	<ul>
		<li><p>Once you have opened a file with Nano, you can start editing the file. Nano has a simple and intuitive interface that makes it easy to edit text.</p></li>
		<br>
		<li><p>To move the cursor, use the arrow keys on your keyboard. To insert text, simply start typing. To delete text, use the backspace or delete key.</p></li>
		<br>
		<li><p>Nano also has many useful features, such as syntax highlighting, search and replace, and spell-checking. To access these features, use the keyboard shortcuts listed at the bottom of the Nano screen.</p></li>
	</ul>

	<h3>Saving a file: </h3>
	<ul>
		<li><p>To save a file in Nano, use the keyboard shortcut <b>Ctrl+O</b>. This will open the save prompt, where you can enter the name of the file and choose the location where you want to save the file.</p></li>
		<br>
		<li><p>If you want to save the file with a different name or in a different location, simply change the name or location in the save prompt.</p></li>
		<br>
	</ul>
	<h3>Exiting Nano: </h3>
	<ul>
		<li><p>To exit Nano, use the keyboard shortcut <b>Ctrl+X</b>. If you have made changes to the file, Nano will prompt you to save the changes before exiting.</p></li>
	</ul>
</main>

<br>

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