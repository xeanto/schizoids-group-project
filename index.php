<?php
$title = "Home";
$path = "./";

$secondCSSFileName = ""; //Insert filename here, if no second css page is needed leave like ""


include($path . "assets/inc/header.php");

include($path . "assets/inc/nav.php");
?>

<!-- UNIQUE INFO HERE -->
<div id="hero"><img src="/~iste240t51/assets/media/hero.png" alt="Hero Image"></div>
<div id="top" class="column">
	<div class="row home-header">
		<h1 id="title">Unix Survival Guide</h1>
		<img id="" src="" alt="">
	</div>
	<div class="column">
		<h1 id="about">About This Page</h1>
		<p id="summary">
			Hello and welcome to our Unix tutorial site, Unix is a powerful
			and popular operating system that has been around for decades. It is used by programmers,
			system administrators, and computer enthusiasts worldwide. Whether you're new to Unix or you're
			looking to brush up on your skills, this tutorial site is here to help.
			<br>
			In this tutorial, we will cover the basics of Unix, including navigating the file
			system, working with files and directories, using the command-line interface, and
			more.
			<br>
			Throughout this tutorial, you will learn how to use Unix to perform common tasks,
			automate repetitive tasks, and manage your system. By the end of this, you
			will have a solid foundation in Unix that will enable you to use it effectively in
			your day-to-day work.
			<br>
			Before we begin, it's important to note that Unix is a complex and powerful operating
			system that requires a certain level of technical proficiency. However, with practice
			and patience, you can master Unix and unlock its full potential. So, let's get started!
		</p>
	</div>
</div>

<hr>

<!-- END OF UNIQUE INFO -->
<?php
//assets/inc/footer.php needs to be finished
include($path . "assets/inc/footer.php");
?>