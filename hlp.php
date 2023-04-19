<?php 
	$title = "Home";
	$path = "./";
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

<form>
	<p>How can you access the Nano help menu?</p>
	  <input type="radio" id="spchka1" name="spchk" value="1">
	  <label for="1">Ctrl+G</label>
	<br>
	  <input type="radio" id="spchka2" name="spchk" value="2">
	  <label for="2">Ctrl+Y</label>
	<br>
	  <input type="radio" id="spchka3" name="spchk" value="3">
	  <label for="3">Ctrl+H</label>
	<br>
	  <input type="radio" id="spchka4" name="spchk" value="4">
	  <label for="4">Ctrl+C</label>
	<br>  
</form>

<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>