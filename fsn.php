<?php 
	$title = "Home";
	$path = "./";
    $id = "unix-fsn";
	$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""
	include($path . "assets/inc/header.php"); 
	include($path . "assets/inc/nav.php");
?>


<main>
    <h2>File System Navigation</h2>
    <img id="" src="" alt="">

    <h3>Present Working Directory:	</h3>
    <ul><p>The present working directory is the directory that you are currently in. You can find out the present working directory by using the <b>‘pwd’</b> command.</p></ul>

    <h3>Listing files and directories:</h3>
	<ul>
        <li><p>To list the contents of a directory, use the ‘ls’ command, ‘ls’ by default shows the contents of the current directory. You can specify a different directory by including the path after the <b>‘ls’</b> command, for example: <b>‘ls /home/user/Documents’</b>.</p></ul>
		<li><p>The ls command also has various options</p>
            <li>-l: long format that shows detailed information about each file and directory, such as permissions, ownership, and size.</li>
            <li>-a: shows hidden files and directories (whose names begin with a period).</li>
            <li>-h: shows file sizes in a human-readable format, such as KB or MB.</li>
        </li>
	</ul>

    <h3>Changing directories: </h3>
	<ul>
		<li><p>To change to a different directory, use the ‘cd’ command. For example, to change to the Documents directory, you can use <b>‘cd Documents’</b>. If you want to go up one level, use <b>‘cd ..’</b></p></li>
	</ul>

    <h3>Creating and removing directories: </h3>
	<ul>
        <li><p>To create a new directory, use the <b>’mkdir’</b> command followed by the directory name. For example, <b>‘mkdir newdir’</b>.</p></li>
        <li><p>To remove a directory, use the <b>‘rmdir’</b> command followed by the directory name. However, this command only works if the directory is empty. To remove a directory and all its contents, use the <b>‘rm’</b> command with the <b>‘-r’</b> option. The <b>‘-r’</b> option allows you to recursively copy a directory and all of its contents. For example, <b>‘rm -r mydir’</b>.</p></li>
    </ul>
    <h3>Moving files: </h3>
	<ul>
        <li><p>To move a file or directory, use the <b>‘mv’</b> command followed by the source and the destination. For example, <b>‘mv myfile.txt /home/user/Documents/’</b>.</p></li>
    </ul>
</main>


<br>

<h2>File System Navigation Quiz</h2>
<div class="Quiz">
	<p>What command can you use to display the current working directory in the terminal?</p>
	<label for="1" id="fsna1Label">  
	<input type="radio" id="fsna1" name="fsn" value="1" onclick="answerCorrectly(this,'fsna1')">
	  pwd</label>
	<br>
		<label for="2" id="fsna2Label">
	  <input type="radio" id="fsna2" name="fsn" value="2" onclick="answerCorrectly(this,'fsna1')">
	  ls</label>
	<br>
	<label for="3" id="fsna3Label">
	  <input type="radio" id="fsna3" name="fsn" value="3" onclick="answerCorrectly(this,'fsna1')">
	  cd</label>
	<br>
	<label for="4" id="fsna4Label">
	  <input type="radio" id="fsna4" name="fsn" value="4" onclick="answerCorrectly(this,'fsna1')">
	  mkdir</label>
	
    <br>  
</div>
    
<div class="Quiz">
    <p>What command can you use to move up one level in the file system hierarchy?</p>
	<label for="5" id="fsna5Label">  
	<input type="radio" id="fsna5" name="fsn" value="5" onclick="answerCorrectly(this,'fsna6')">
	  cd .</label>
	<br>
	<label for="6" id="fsna6Label">
	  <input type="radio" id="fsna6" name="fsn" value="6" onclick="answerCorrectly(this,'fsna6')">
	  cd ..</label>
	<br>
	<label for="7" id="fsna7Label">
	  <input type="radio" id="fsna7" name="fsn" value="7" onclick="answerCorrectly(this,'fsna6')">
	  cd /</label>
	<br>
	<label for="8" id="fsna8Label">
	  <input type="radio" id="fsna8" name="fsn" value="8" onclick="answerCorrectly(this,'fsna6')">
	  cd ~</label>
	<br>
</div>

<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>