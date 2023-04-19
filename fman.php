<?php 
	$title = "Home";
	$path = "./";
    $id = "unix-fm";
	$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""
	include($path . "assets/inc/header.php"); 
	include($path . "assets/inc/nav.php");
?>


<main>
    <h2>File manipulation</h2>
    <img id="" src="" alt="">

    <h3>Creating files: </h3>
    <ul><p>To create a new file, use the <b>‘touch’</b> command followed by the file name. For example, <b>‘touch myfile.txt’</b>. You can also create a file with contents using a text editor, such as nano.</p></ul>
    <br>
    <h3>Viewing file contents: </h3>
    <ul><p>To view the contents of a file, use the <b>‘cat’</b> command. For example, <b>‘cat myfile.txt’</b>. You can also use other commands like <b>‘less’</b> or <b>‘more’</b> to view the contents of a file, which allows you to scroll up and down the file.</p></ul>
    <br>
    <h3>Editing files: </h3>
    <ul><p>To edit a file, use a text editor such as <b>nano</b>. For example, to edit myfile.txt with nano, use the command <b>‘nano myfile.txt’</b>. Once you're done editing, save and exit the editor to write the changes to the file.</p></ul>
    <br>
    <h3>Renaming and Moving files: </h3>
    <ul><p>To rename a file, use the <b>‘mv’</b> command followed by the source and the destination. For example, to rename myfile.txt to newfile.txt, use the command <b>‘mv myfile.txt newfile.txt’</b>.</p></ul>
    <ul><p>To move a file, use the <b>‘mv’</b> command followed by the source and the destination. For example, to move myfile.txt to the Documents directory, use the command <b>‘mv myfile.txt Documents/’</b>.</p></ul>
    <br>
    <h3>Copying files: </h3>
    <ul><p>To copy a file, use the <b>‘cp’</b> command followed by the source file and the destination. For example, to copy myfile.txt to Documents/myfile.txt, use the command <b>‘cp myfile.txt Documents/myfile.txt’</b>.</p></ul>
    <br>
    <h3>Deleting files: </h3>
    <ul><p>To delete a file, use the <b>‘rm’</b> command followed by the file name. For example, <b>‘rm myfile.txt’</b>. Be careful when using this command, as it will permanently delete the file and it cannot be recovered. You can also use the <b>‘rmdir’</b> command to delete an empty directory.</p></ul>
    <br>
    <h3>Changing file permissions: </h3>
    <ul><p>To change the permissions of a file, use the <b>‘chmod’</b> command followed by the permission code and the file name. For example, to make myfile.txt readable, writable, and executable by the owner, use the command <b>‘chmod 700 myfile.txt’</b>.</p></ul>
    <br>
</main>

<br>

<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>