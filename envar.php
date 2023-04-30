<?php 
	$title = "Home";
	$path = "./";
    $id = "unix-fm";
	$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""
	include($path . "assets/inc/header.php"); 
	include($path . "assets/inc/nav.php");
?>


<main>
    <h2>Environmental variables</h2>
    <img id="" src="" alt="">

    <h3>Viewing environmental variables: </h3>
    <ul><p>To view the list of environmental variables in your system, use the command <b>‘printenv’</b> or <b>‘env’</b>. This will display a list of all the environmental variables and their values.</p></ul>
    <br>
    <h3>Setting environmental variables: </h3>
    <ul><p>To set an environmental variable, use the <b>‘export’</b> command followed by the variable name and value. For example, to set the <b>‘PATH’</b> variable to include a new directory, use the command <b>‘export PATH=$PATH:/new/directory’</b>. This will add the new directory to the system's <b>‘PATH’</b> variable, allowing you to execute commands from that directory.</p></ul>
    <br>
    <h3>Unsetting environmental variables: </h3>
    <ul><p>To unset an environmental variable, use the <b>‘unset’</b> command followed by the variable name. For example, to unset the <b>‘PATH’</b> variable, use the command <b>‘unset PATH’</b>.</p></ul>
    <br>
    <h3>Using environmental variables: </h3>
    <ul><p>Environmental variables can be used in many ways in Unix. For example, you can use the <b>‘HOME’</b> variable to navigate to your home directory, the <b>‘USER’</b> variable to display your username, and the <b>‘PS1’</b> variable to customize your shell prompt.</p></ul>
    <br>
    <h3>Persistent environmental variables: </h3>
    <ul><p>To make environmental variables persistent across sessions, you can add them to the appropriate startup file for your shell. For example, for the Bash shell, you can add variables to the <b>‘.bashrc’</b> file. For the Zsh shell, you can add variables to the <b>‘.zshrc’</b> file.</p></ul>
    <br>
</main>

<br>

<h2>File Manipulation Quiz</h2>
<form>
	<p>What command can you use to copy a file from one directory to another?</p>
	  <input type="radio" id="fmana1" name="fman" value="1">
	  <label for="1">mv</label>
	<br>
	  <input type="radio" id="fmana2" name="fman" value="2">
	  <label for="2">cd</label>
	<br>
	  <input type="radio" id="fmana3" name="fman" value="3">
	  <label for="3">cp</label>
	<br>
	  <input type="radio" id="fmana4" name="fman" value="4">
	  <label for="4">mkdir</label>
	
    <br>  
    
    <p>What command can you use to create a new empty file in the current directory?</p>
	  <input type="radio" id="fmana5" name="fman" value="5">
	  <label for="5">cat</label>
	<br>
	  <input type="radio" id="fmana6" name="fman" value="6">
	  <label for="6">mkdir</label>
	<br>
	  <input type="radio" id="fmana7" name="fman" value="7">
	  <label for="7">touch</label>
	<br>
	  <input type="radio" id="fmana8" name="fman" value="8">
	  <label for="8">nano</label>
	<br>
</form>


<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>