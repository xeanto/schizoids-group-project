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
		<li>
			<p>To open the help menu in Nano, press "Ctrl + G". This will display a help menu at the bottom of the
				screen.</p>
		</li>
	</ul>
	<h3>Navigate the help menu:</h3>
	<ul>
		<li>
			<p>The help menu is divided into sections, each of which corresponds to a different category of commands or
				features. To navigate the help menu, use the arrow keys to scroll up and down through the sections. To
				read the contents of a section, press "Enter" when the cursor is on that section.</p>
		</li>
	</ul>
	<h3>Exit the help menu:</h3>
	<ul>
		<li>
			<p>To exit the help menu, press "Ctrl + G" again.</p>
		</li>
		<li>
			<p>In addition to the built-in help feature, you can also access a comprehensive online manual for Nano by
				typing "man nano" in the command line. This will display a manual page that includes detailed
				information about all of Nano's commands and features. You can navigate the manual using the arrow keys
				and the "Page Up" and "Page Down" keys, and you can exit the manual by typing "q". </p>
		</li>
	</ul>
</main>

<br>

<?php
// variables to be used for the quiz
$title = "Help Quiz";
$quizQuestions = [
	0 => "How can you access the Nano help menu?"
];
$quizAnswers = [
	0 => [
		0 => "Ctrl+G",
		1 => "Ctrl+Y",
		2 => "Ctrl+H",
		3 => "Ctrl+C",
		4 => "a1"
	]
];
include($path . "assets/inc/quiz.php");
//assets/inc/footer.php needs to be finished
include($path . "assets/inc/footer.php");
?>