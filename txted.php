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


<?php 
	//assets/inc/footer.php needs to be finished
	include($path . "assets/inc/footer.php");
?>