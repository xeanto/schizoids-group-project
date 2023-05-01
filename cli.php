<?php
$title = "Home";
$path = "./";
$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""
$id = "unix-cli";
include($path . "assets/inc/header.php");
include($path . "assets/inc/nav.php");
?>

<div id="top">

	<h1 id="title">What is CLI?</h1>
	<img id="" src="" alt="">
	<p id="summary">The command line interface (CLI) is a text-based interface that allows you to interact with your Unix system using commands and scripts.</p>
	<h2 id="commands">Basic Commands</h2>
	<ul>
		<li>ls: Lists the files and directories in the current directory.</li>
		<li>cd: Changes the current directory to the specified directory.</li>
		<li>mkdir: Creates a new directory.</li>
		<li>rm: Removes a file or directory.</li>
		<li>cp: Copies a file. </li>
		<li>mv: Moves or renames a file.</li>
	</ul>
</div>

<br>


<?php
// variables to be used for the quiz
$title = "CLI Quiz";
$quizQuestions = [
	0 => "What command can you use to display the current working directory in the terminal?",
	1 => "What command can you use to move up one level in the file system hierarchy?"
];

$quizAnswers = [
	0 => [
		0 => "pwd",
		1 => "ls",
		2 => "cd",
		3 => "mkdir",
		4 => "a1"
	],
	1 => [
		0 => "cd .",
		1 => "cd ..",
		2 => "cd ~",
		3 => "cd /",
		4 => "a2"
	]
];

include "assets/inc/quiz.php";
// assets/inc/footer.php needs to be finished
include($path . "assets/inc/footer.php");
?>