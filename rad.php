<?php 
	$title = "Home";
	$path = "./";
    $id = "unix-fm";
	$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""
	include($path . "assets/inc/header.php"); 
	include($path . "assets/inc/nav.php");
?>


<main>
    <h2>Redirection and piping</h2>
    <img id="" src="" alt="">

    <h3>Redirection: </h3>
    <ul><p>Redirection is the process of changing where a command's input or output comes from or goes to. The following symbols are used for redirection:</p></ul>
    <ul><p><b>‘>’</b>redirects output to a file, overwriting any existing contents.</p></ul>
    <ul><p><b>‘>>’</b> redirects output to a file, appending to the end of the file.</p></ul>
    <ul><p><b>‘<’</b> redirects input from a file.</p></ul>
    <ul><p><b>‘2>’</b> redirects error output to a file.</p></ul>
    <ul><p><b>‘&>’</b> redirects both output and error output to a file.</p></ul>
    <ul><p>For example, to redirect the output of a command to a file, use the command <b>‘command > filename’</b>. To redirect error output to a file, use the command <b>‘command 2> filename’</b>.</p></ul>
    <br>
    <h3>Piping: </h3>
    <ul><p>Piping is the process of chaining commands together so that the output of one command becomes the input of another command. The following symbol is used for piping:</p></ul>
    <ul><p><b>‘|’</b> pipes output to the input of another command.</p></ul>
    <ul><p>For example, to list the contents of a directory and then search for a specific file, use the command <b>‘ls | grep filename’</b>.</p></ul>
    <br>
    <h3>Combining redirection and piping: </h3>
    <ul><p>Redirection and piping can be combined to perform complex operations. For example, to list the contents of a directory, search for a specific file, and then save the results to a file, use the command <b>‘ls | grep filename > results.txt’</b>.</p></ul>
    <br>
    <h3>Using the /dev/null device: </h3>
    <ul><p>The <b>‘/dev/null’</b> device is a special file that discards all input that is sent to it. This can be useful for testing commands or suppressing unwanted output. For example, to suppress the output of a command, use the command <b>‘command > /dev/null’</b>.</p></ul>
    <br>
</main>

<br>
<h2>Unix Redirection and Piping Quiz</h2>
<form>
	<p>What symbol can you use to redirect the output of a command to a file?</p>
	  <input type="radio" id="fmana1" name="fman" value="1">
	  <label for="1">></label>
	<br>
	  <input type="radio" id="fmana2" name="fman" value="2">
	  <label for="2"><</label>
	<br>
	  <input type="radio" id="fmana3" name="fman" value="3">
	  <label for="3">|</label>
	<br>
	  <input type="radio" id="fmana4" name="fman" value="4">
	  <label for="4">&</label>
	
    <br>  
    
    <p>What symbol can you use to pipe the output of one command to the input of another?</p>
	  <input type="radio" id="fmana5" name="fman" value="5">
	  <label for="5">></label>
	<br>
	  <input type="radio" id="fmana6" name="fman" value="6">
	  <label for="6"><</label>
	<br>
	  <input type="radio" id="fmana7" name="fman" value="7">
	  <label for="7">|</label>
	<br>
	  <input type="radio" id="fmana8" name="fman" value="8">
	  <label for="8">&</label>
	<br>
</form>

<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>