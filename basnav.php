<?php
$title = "Home";
$path = "./";
$id = "nano-bn";
$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""
include($path . "assets/inc/header.php");
include($path . "assets/inc/nav.php");
?>


<main>
	<h2>Basic navigation</h2>
	<img id="" src="" alt="">
	<h3>Opening a file: </h3>
	<ul>
		<li>
			<p>To open a file with Nano, simply type the command <b>‘nano’</b> followed by the name of the file you want to open. For example, to open a file called <b>example.txt</b>, type the command <b>‘nano example.txt’</b>.</p>
		</li>
		<br>
		<li>
			<p>If the file does not exist, Nano will create a new file with that name.</p>
		</li>
	</ul>

	<h3>Moving the cursor: </h3>
	<ul>
		<li>
			<p>To move the cursor in Nano, use the arrow keys on your keyboard. The up arrow key moves the cursor up one line, the down arrow key moves the cursor down one line, the left arrow key moves the cursor one character to the left, and the right arrow key moves the cursor one character to the right.</p>
		</li>
		<br>
		<li>
			<p>You can also use the <b>Page Up</b> and <br>Page Down</b> keys to move the cursor up and down a page at a time.</p>
		</li>
	</ul>

	<h3>Scrolling the screen: </h3>
	<ul>
		<li>
			<p>To scroll the screen in Nano, use the <b>Ctrl</b> key in combination with the arrow keys. The <b>Ctrl</b> key and <b>Up</b> arrow key scrolls the screen up one line, the <b>Ctrl</b> key and <b>Down</b> arrow key scrolls the screen down one line, the <b>Ctrl</b> key and <b>Left</b> arrow key scrolls the screen left, and the <b>Ctrl</b> key and <b>Right</b> arrow key scrolls the screen right.</p>
		</li>
		<br>
	</ul>
	<h3>Searching for text: </h3>
	<ul>
		<li>
			<p>To search for text in Nano, use the keyboard shortcut <b>Ctrl+W</b>. This will open the search prompt, where you can enter the text you want to search for. Press <b>Enter</b> to start the search.</p>
		</li>
		<br>
		<li>
			<p>To search for the next occurrence of the text, use the keyboard shortcut <b>Ctrl+W</b> again.</p>
		</li>
	</ul>
	<h3>Exiting Nano: </h3>
	<ul>
		<li>
			<p>To exit Nano, use the keyboard shortcut <b>Ctrl+X</b>. If you have made changes to the file, Nano will prompt you to save the changes before exiting.</p>
		</li>
	</ul>
</main>

<br>

<?php

$quizQuestions = array(
	"Which key combination is used to search for text in Nano?"
);
$quizAnswers = array(
	array("Ctrl+S", "Ctrl+F", "Ctrl+R", "Ctrl+G", "a2")
);
$title = "Basic Navigation Quiz";
include($path . "assets/inc/quiz.php");
//assets/inc/footer.php needs to be finished
include($path . "assets/inc/footer.php");
?>