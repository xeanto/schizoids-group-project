<?php
$title = "Home";
$path = "./";
$id = "nano-sh";
$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""
include($path . "assets/inc/header.php");
include($path . "assets/inc/nav.php");
?>


<main>
	<h2>Syntax highlighting</h2>
	<img id="" src="" alt="">

	<h3>Enable syntax highlighting: </h3>
	<ul>
		<p>To enable syntax highlighting in Nano, you need to open a file that contains code in a supported programming
			language. Then use the -Y option when opening a file. For example, to enable syntax highlighting for a file
			containing Python code, type:</p>
	</ul>
	<br />
	<ul><b>nano -Y python example.py</b></ul>
	<ul>
		<p>This will open the file in Nano with syntax highlighting enabled for the Python programming language.</p>
	</ul>

	<h3>Customize syntax highlighting:</h3>
	<ul>
		<p>Nano includes a set of default color schemes for syntax highlighting, but you can also customize the colors
			to suit your preferences. To customize the syntax highlighting colors, create a file named ".nanorc" in your
			home directory and add the following lines:</p>
	</ul>
	<li>
		syntax "python" "\.py$"
		<br />
		color green "\<(and|or|not)\>"
			<br />
			color brightgreen "\<(True|False|None)\>"
				<br />
				color cyan "\<(if|else|elif|while|for|in|try|except|finally)\>"
					<br />
					color brightyellow "\<(print|input)\>"
						<br />
	</li>
	<ul>
		<p>This example sets custom colors for various Python keywords and symbols. You can customize the colors for any
			programming language supported by Nano by replacing "python" with the name of the language, and adding color
			definitions for the specific keywords and symbols you want to highlight. Syntax highlighting can be a very
			useful tool for working with code in Nano. By highlighting different parts of the code in different colors,
			it can help you identify errors, understand the structure of the code, and generally make coding easier and
			more enjoyable.</p>
	</ul>
</main>

<br>

<?php
// quiz variables
$title = "Syntax Highlighting Quiz";
$quizQuestions = [
	0 => "How can you toggle syntax highlighting on and off in Nano?"
];
$quizAnswers = [
	0 => [
		0 => "Ctrl+S",
		1 => "Ctrl+Y",
		2 => "Ctrl+X",
		3 => "Ctrl+H",
		4 => "a2"
	]
];
include($path . "assets/inc/quiz.php");
//assets/inc/footer.php needs to be finished
include($path . "assets/inc/footer.php");
?>