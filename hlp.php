<?php 
	$title = "Home";
	$path = "./";
	$id = "nano-h";
	$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""
	include($path . "assets/inc/header.php"); 
	include($path . "assets/inc/nav.php");
?>


<main>
    <h2>Help</h2>
    <img id="" src="" alt="">

    <h3>Open the help menu:</h3>
	<ul>
		<li><p>To open the help menu in Nano, press "Ctrl + G". This will display a help menu at the bottom of the screen.</p></li>
	</ul>
    <h3>Navigate the help menu:</h3>
	<ul>
		<li><p>The help menu is divided into sections, each of which corresponds to a different category of commands or features. To navigate the help menu, use the arrow keys to scroll up and down through the sections. To read the contents of a section, press "Enter" when the cursor is on that section.</p></li>
	</ul>
    <h3>Exit the help menu:</h3>
	<ul>
        <li><p>To exit the help menu, press "Ctrl + G" again.</p></li>
		<li><p>In addition to the built-in help feature, you can also access a comprehensive online manual for Nano by typing "man nano" in the command line. This will display a manual page that includes detailed information about all of Nano's commands and features. You can navigate the manual using the arrow keys and the "Page Up" and "Page Down" keys, and you can exit the manual by typing "q". </p></li>
	</ul>
</main>

<br>

<h2>Help Quiz</h2>
<div class="Quiz">
	<p>How can you access the Nano help menu?</p>
	<label for="1" id="hlpa1Label">
	  <input type="radio" id="hlpa1" name="hlp" value="1" onclick="answerCorrectly(this,'hlpa1')">
	  Ctrl+G</label>
	<br>
	<label for="2" id="hlpa2Label">
	  <input type="radio" id="hlpa2" name="hlp" value="2" onclick="answerCorrectly(this,'hlpa1')">
	  Ctrl+Y</label>
	<br>
	<label for="3" id="hlpa3Label">
	  <input type="radio" id="hlpa3" name="hlp" value="3" onclick="answerCorrectly(this,'hlpa1')">
	  Ctrl+H</label>
	<br>
	<label for="4" id="hlpa4Label">
	  <input type="radio" id="hlpa4" name="hlp" value="4" onclick="answerCorrectly(this,'hlpa1')">
	  Ctrl+C</label>
	<br>  
</div>

<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>