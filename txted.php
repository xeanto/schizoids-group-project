<?php 
	$title = "Home";
	$path = "./";
    $id = "unix-fm";
	$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""
	include($path . "assets/inc/header.php"); 
	include($path . "assets/inc/nav.php");
?>


<main>
    <h2>Text editors</h2>
    <img id="" src="" alt="">

    <h3>Nano: </h3>
    <ul><p>Nano is a simple and easy-to-use text editor that comes pre-installed on many Unix systems. To open a file with nano, use the command <b>‘nano filename’</b>. Once the file is open, you can edit the contents using the cursor keys. To save the changes and exit nano, press <b>‘Ctrl-X’</b>, then <b>‘Y’</b> to confirm the save, and then <b>‘Enter’</b>.</p></ul>
    <br>
    <h3>Vim: </h3>
    <ul><p>Vim is a powerful text editor that provides many advanced features for editing text files. To open a file with vim, use the command <b>‘vim filename’</b>. Vim has several modes, including the command mode, insert mode, and visual mode. To enter insert mode, press <b>‘i’</b>. To exit insert mode and return to command mode, press <b>‘Esc’</b>. To save changes and exit vim, type <b>‘:wq’</b> and press <b>‘Enter’</b>.</p></ul>
    <br>
    <h3>Emacs: </h3>
    <ul><p>Emacs is a versatile and extensible text editor that provides many advanced features for editing text files. To open a file with emacs, use the command <b>‘emacs filename’</b>. Emacs has many modes, including the command mode, insert mode, and visual mode. To enter insert mode, press <b>‘Ctrl-X, Ctrl-I’</b>. To save changes and exit emacs, type <b>‘Ctrl-X’</b>, <b>‘Ctrl-S’</b>, and then <b>‘Ctrl-X’</b>, <b>‘Ctrl-C’</b> to exit.</p></ul>
    <br>
</main>

<br>

<h2>Text Editors Quiz</h2>
<div class="Quiz">
	<p>What is the name of the default text editor in Unix?</p>
	<label for="1" id="txtmana1Label">
	  <input type="radio" id="txtmana1" name="pman" value="1" onclick="answerCorrectly(this,'txtmana3')">
	  notepad</label>
	<br>
	<label for="2" id="txtmana2Label">
	  <input type="radio" id="txtmana2" name="pman" value="2" onclick="answerCorrectly(this,'txtmana3')">
	  Vim</label>
	<br>
	<label for="3" id="txtmana3Label">
	  <input type="radio" id="txtmana3" name="pman" value="3" onclick="answerCorrectly(this,'txtmana3')">
	  Nano</label>
	<br>
	<label for="4" id="txtmana4Label">
	  <input type="radio" id="txtmana4" name="pman" value="4" onclick="answerCorrectly(this,'txtmana3')">
	  Sublime Text</label>

	<br>  
</div>

<div class="Quiz">
    <p>What command can you use to open a file in Nano?</p>
	<label for="5" id="txtmana5Label">  
	<input type="radio" id="txtmana5" name="pman" value="5" onclick="answerCorrectly(this,'txtmana8')">
	  Nano</label>
	<br>
	<label for="6" id="txtmana6Label">
	  <input type="radio" id="txtmana6" name="pman" value="6" onclick="answerCorrectly(this,'txtmana8')">
	  Vim</label>
	<br>
	<label for="7" id="txtmana7Label">
	  <input type="radio" id="txtmana7" name="pman" value="7" onclick="answerCorrectly(this,'txtmana8')">
	  emacs</label>
	<br>
	<label for="8" id="txtmana8Label">
	  <input type="radio" id="txtmana8" name="pman" value="8" onclick="answerCorrectly(this,'txtmana8')">
	  Nano "filename"</label>
</div>

<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>