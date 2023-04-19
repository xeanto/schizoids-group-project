<?php 
	$title = "Home";
	$path = "./";
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
        <li><p>To list the contents of a directory, use the ‘ls’ command, ‘ls’ by default shows the contents of the current directory. You can specify a different directory by including the path after the <b>‘ls’</b> command, for example: <b>‘ls /home/user/Documents’<b>.</p></ul>
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

<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>